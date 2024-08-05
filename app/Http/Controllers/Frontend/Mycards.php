<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

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
        $data['mycards']=cards_model::where('web_user_id',auth()->user()->id)->get();
        $data['page_title']="My Cards";
       
        return view('frontend/my_cards',$data);
    }

    public function card_delete($id=''){
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

    public function card_messages($id){        

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
            ->merge($widgetTextQuestions)
        ;

        $data['mergedQuestions'] = $mergedCollection;
        // dd($data['mergedQuestions']);

//------------------------------------------------------------------------//


        // Assuming $id is provided and is the ID of the card you want to fetch
        // $card_answers = cards_model::with([
        //     'answerMemorial' => function ($query) {
        //         $query->whereColumn('card_id', 'cards_model.card_id')
        //             ->whereColumn('ip_address', 'cards_model.ip_address');
        //     },
        //     'answerAttendQuest' => function ($query) {
        //         $query->whereColumn('card_id', 'cards_model.card_id')
        //             ->whereColumn('ip_address', 'cards_model.ip_address');
        //     },
        //     'answerTextQuest' => function ($query) {
        //         $query->whereColumn('card_id', 'cards_model.card_id')
        //             ->whereColumn('ip_address', 'cards_model.ip_address');
        //     },
        //     'answerOptnQuest' => function ($query) {
        //         $query->whereColumn('card_id', 'cards_model.card_id')
        //             ->whereColumn('ip_address', 'cards_model.ip_address');
        //     }
        // ])->where('id', $id)->get();

        // $data['card_answers'] = $card_answers;

        // // Initialize collections
        // $answerAttendQuests = collect();
        // $answerMemorials = collect();
        // $answerOptnQuests = collect();
        // $answerTextQuests = collect();

        // // Iterate through each card answer to merge related answers
        // foreach ($card_answers as $card_answer) {
        //     $answerAttendQuests = $answerAttendQuests->merge($card_answer->answerAttendQuest);
        //     $answerMemorials = $answerMemorials->merge($card_answer->answerMemorial);
        //     $answerOptnQuests = $answerOptnQuests->merge($card_answer->answerOptnQuest);
        //     $answerTextQuests = $answerTextQuests->merge($card_answer->answerTextQuest);
        // }

        // // Merge all answers into a single collection
        // $mergedAnswers = $answerAttendQuests
        //     ->merge($answerMemorials)
        //     ->merge($answerOptnQuests)
        //     ->merge($answerTextQuests);

        // $data['mergedAnswers'] = $mergedAnswers;

        // dd($mergedAnswers);

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


  

        return view('frontend/card_messages',$data);

    }


    public function save_recipient(Request $request)
    {
        // Validate the incoming request data
        // $request->validate([
        //     'cardid' => 'required|string|max:5',
        //     'prefix' => 'nullable|string|max:100',
        //     'recipient_name' => 'required|string|max:200',
        //     'mobile_no' => 'required|string|max:200',
        // ]);

        try {
            // Create a new card recipient record
            $recipient = new card_recipients_model();
            $recipient->web_user_id = auth()->user()->id;
            $recipient->card_id = $request->input('cardid');
            $recipient->prefix = $request->input('prefix');
            $recipient->recipient_name = $request->input('recipient_name');
            $recipient->mobile_no = $request->input('mobile_no');
            $recipient->save();

            return response()->json(['success' => true, 'message' => 'Recipient saved successfully.']);
        } catch (\Exception $e) {
            // Handle any errors
            return response()->json(['success' => false, 'message' => 'Error saving recipient: ' . $e->getMessage()]);
        }
    }
    
   
}
