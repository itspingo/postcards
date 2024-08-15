<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\UserTextFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\settings;
use App\Models\orderItemModel;
use App\Models\Shopitems;
use App\Models\header_slider_model;
use App\Models\partners_model;
use App\Models\testimonials_model;
use App\Models\team_members_model;
use App\Models\cards_model;
use App\Models\card_recipients_model;

// use Carbon\Carbon;

class Mycards extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');

    }

    public function index()
    {
        $data['mycards'] = cards_model::where('web_user_id', auth()->user()->id)->with('card_recipients')->get();
        $data['page_title'] = "My Cards";

        return view('frontend/my_cards', $data);
    }

    public function card_delete($id = '')
    {
        cards_model::where('id', $id)->delete();
        return redirect()->route('mycards');
    }

    public function card_copy($id = '')
    {
        $card = cards_model::find($id); // Use find for simplicity
        if ($card) {
            $newCard = $card->replicate(); // Use replicate to create a copy
            $newCard->save(); // Save the new card to create a new record
        }
        return redirect()->route('mycards');
    }

    public function card_messages($id)
    {

        $cardInfo = cards_model::with([
            'widgetAttendQuest',
            'widgetMemorial',
            'widgetOptionalQuestion',
            'widgetTextQuestion'
        ])->find($id);

        $data['card_info'] = $cardInfo;

        $widgetAttendQuests = $cardInfo->widgetAttendQuest;
        $widgetMemorials = $cardInfo->widgetMemorial;
        $widgetOptionalQuestions = $cardInfo->widgetOptionalQuestion;
        $widgetTextQuestions = $cardInfo->widgetTextQuestion;

        $mergedCollection = $widgetAttendQuests
            ->merge($widgetMemorials)
            ->merge($widgetOptionalQuestions)
            ->merge($widgetTextQuestions);

        $data['mergedQuestions'] = $mergedCollection;
        // dd($data['mergedQuestions']);

        $answers = DB::table('answers_attend_quest')
            ->leftJoin('answers_memorial', function ($join) {
                $join->on('answers_attend_quest.ip_address', '=', 'answers_memorial.ip_address')
                    ->on('answers_attend_quest.card_id', '=', 'answers_memorial.card_id');
            })
            ->leftJoin('answers_optional_question', function ($join) {
                $join->on('answers_attend_quest.ip_address', '=', 'answers_optional_question.ip_address')
                    ->on('answers_attend_quest.card_id', '=', 'answers_optional_question.card_id');
            })
            ->leftJoin('answers_text_question', function ($join) {
                $join->on('answers_attend_quest.ip_address', '=', 'answers_text_question.ip_address')
                    ->on('answers_attend_quest.card_id', '=', 'answers_text_question.card_id');
            })
            ->select(
                'answers_attend_quest.answer_attend_quest',
                'answers_memorial.answer_memorial',
                'answers_optional_question.answer_optnl_quest',
                'answers_text_question.answer_text_question',
                'answers_attend_quest.ip_address',
                'answers_attend_quest.card_id'
            )
            ->get();

        // dd($answers);

        $data['answers'] = $answers;
        $data['cardId'] = $id;

        return view('frontend/card_messages', $data);
    }
    public function save_recipient(Request $request)
    {
        try {
            if ($request->input('recipient_id') && !empty($request->input('recipient_id'))) {
                //Update record
                $recipient = card_recipients_model::where([['id', '=', $request->input('recipient_id')], ['web_user_id', '=', auth()->user()->id]])->first();
                $recipient->prefix = $request->input('prefix');
                $recipient->recipient_name = $request->input('recipient_name');
                $recipient->mobile_no = $request->input('mobile_no');
                $recipient->save();

                return response()->json(['success' => true, 'message' => 'Recipient saved successfully.']);
            } else {
                // Create a new card recipient record
                $recipient = new card_recipients_model();
                $recipient->web_user_id = auth()->user()->id;
                $recipient->card_id = $request->input('cardid');
                $recipient->prefix = $request->input('prefix');
                $recipient->recipient_name = $request->input('recipient_name');
                $recipient->mobile_no = $request->input('mobile_no');
                $recipient->save();

                return response()->json(['success' => true, 'message' => 'Recipient saved successfully.']);
            }
        } catch (\Exception $e) {
            // Handle any errors
            return response()->json(['success' => false, 'message' => 'Error saving recipient: ' . $e->getMessage()]);
        }
    }

    public function save_multiple_recipient(Request $request)
    {
        try {
            $recipient_names_multiple = preg_split("/\r\n|\n|\r/", $request->input('name_multiple'));
            foreach ($recipient_names_multiple as $recipient_name) {
                if (trim($recipient_name) != '') { // Create a new card recipient record
                    $recipient = new card_recipients_model();
                    $recipient->web_user_id = auth()->user()->id;
                    $recipient->card_id = $request->input('cardid');
                    $recipient->recipient_name = $recipient_name;
                    $recipient->save();
                }
            }

            return response()->json(['success' => true, 'message' => 'Recipients saved successfully.']);
        } catch (\Exception $e) {
            // Handle any errors
            return response()->json(['success' => false, 'message' => 'Error saving recipient: ' . $e->getMessage()]);
        }
    }

    public function save_text_format(Request $request)
    {
        try {
            $current_user_id = auth()->user()->id;
            $userTextFormat = UserTextFormat::where('web_user_id', $current_user_id)->first();
            if ($userTextFormat) {
                $userTextFormat->text_format = $request->input('text_format');
                $userTextFormat->save();
            } else {
                $userTextFormat = new UserTextFormat();
                $userTextFormat->text_format = $request->input('text_format');
                $userTextFormat->web_user_id = $current_user_id;
                $userTextFormat->save();
            }

        } catch (\Exception $e) {
            // Handle any errors
            return response()->json(['success' => false, 'message' => 'Error saving text format: ' . $e->getMessage()]);
        }

    }

    public function remove_card_recipient(Request $request)
    {
        try {
            $current_user_id = auth()->user()->id;
            $recipient = card_recipients_model::where([
                ['web_user_id', '=', $current_user_id],
                ['id', '=', $request->input('recipient_id')],
                ['card_id', '=', $request->input('card_id')],
            ])->first();
            if ($recipient) {
                $recipient->delete();
            } else {
                return response()->json(['success' => false, 'message' => 'Unknown option']);
            }

        } catch (\Exception $e) {
            // Handle any errors
            return response()->json(['success' => false, 'message' => 'Error removing card recipient ' . $e->getMessage()]);
        }
    }

    public function recipient_detail(Request $request, $id)
    {
        try {
            $current_user_id = auth()->user()->id;
            $recipient = card_recipients_model::where([
                ['web_user_id', '=', $current_user_id],
                ['id', '=', $id],
                ['card_id', '=', $request->input('card_id')],
            ])->first();
            if ($recipient) {
                return $recipient;
            } else {
                return response()->json(['success' => false, 'message' => 'Unknown option']);
            }

        } catch (\Exception $e) {
            // Handle any errors
            return response()->json(['success' => false, 'message' => 'Error removing card recipient ' . $e->getMessage()]);
        }

    }
    public function receivers($id)
    {
        $current_user_id = auth()->user()->id;
        $data['recipients'] = card_recipients_model::where('card_id', $id)->with('card')->get();
        $data['text_format'] = UserTextFormat::where('user_id', $current_user_id)->first();
        $data['cardId'] = $id;
        $data['page_title'] = "Receivers";

        return view('frontend/receivers', $data);
    }
}
