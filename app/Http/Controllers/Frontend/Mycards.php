<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Mail\SendCardToRecipient;
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
use Mail;

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
                $recipient->email = $request->input('email');
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
                $recipient->email = $request->input('email');
                //Save only on create. Should not be called while updating.
                $recipient->url = unique_id();
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
                    $recipient->url = unique_id();
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
    public function save_recipient_prefix(Request $request, $id)
    {
        try {
            $current_user_id = auth()->user()->id;
            $recipient = card_recipients_model::where([
                ['web_user_id', '=', $current_user_id],
                ['id', '=', $id],
                ['card_id', '=', $request->input('card_id')],
            ])->first();
            if ($recipient) {
                $recipient->prefix = $request->input('prefix');
                $recipient->save();
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
        $data['prefix_options'] = get_prefix_items();
        $data['cardId'] = $id;
        $data['page_title'] = "Receivers";

        return view('frontend/receivers', $data);
    }

    function send_email_to_recipients(Request $request)
    {
        $current_user_id = auth()->user()->id;
        $card_id = $request->input('card_id');
        $card_recipients = card_recipients_model::where('card_id', $card_id)->with('card')->get();

        $userTextFormat = UserTextFormat::where('web_user_id', $current_user_id)->first();
        $text_format = "";//Default
        if ($userTextFormat) {
            $text_format = $userTextFormat->text_format;

        }
        foreach ($card_recipients as $recipient) {
            if (isset($recipient->email) && !empty($recipient->email)) {
                // send
                $data = [];
                $link = route('play', ['id' => $recipient->card_id, 'recipient_url' => $recipient->url]);

                $data['name'] = $recipient->recipient_name;
                $text_format_recipient = str_replace(
                    ['[link]', '[recipient]'],
                    [$link, $recipient->recipient_name],
                    $text_format
                );
                $data['text_format'] = $text_format_recipient;
                $data['card_link'] = $link;

                Mail::to($recipient->email)->send(new SendCardToRecipient($data));
            }
        }
        return response()->json(['success' => true, 'message' => 'Email sent']);
    }

    function card_stats(Request $request)
    {
        $current_user_id = auth()->user()->id;
        $card_id = $request->input('card_id');
        $card_recipients = card_recipients_model::where('card_id', $card_id)->with('card')->get();
        $card_view_count = DB::table('views')->where([
            ['view_type', '=', 'App\card_model'],
            ['view_id', '=', $card_id]
        ])->count();
        $total_recipients_of_card = $card_recipients->count();
        $total_recipients_viewed = DB::table("card_recipients")->where([
            ['card_id', '=', $card_id],
            ['card_status', '=', 2]
        ])->count();

        $data = ['card_view_count' => $card_view_count, 'total_recipients' => $total_recipients_of_card, 'total_recipients_card_viewed' => $total_recipients_viewed];

        return response()->json($data);
    }
}
