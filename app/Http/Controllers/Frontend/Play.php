<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Models\card_recipients_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cards_model;
// use App\Models\widget_optional_question_model;
// use Carbon\Carbon;

class Play extends Controller
{

    protected $cardId;
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index($id, ?string $recipient_url = '')
    {
        $this->cardId = $id;
        $data['page_title'] = "Play";
        $data['id'] = $id;
        if ($id != '') {
            $cardInfo = cards_model::with([
                'widgetAttendQuest',
                'widgetContactComm',
                'widgetCountdown',
                'widgetImage',
                'widgetLink',
                'widgetMemorial',
                'widgetOptionalQuestion',
                'widgetSeparator',
                'widgetSocialNetwork',
                'widgetTextQuestion',
                'widgetUserText',
                'widgetVideo'
            ])->find($id);
            // foreach ($data['card_info']->getRelations() as $relation => $items) {
            //     $data['card_info']->setRelation($relation, $items->sortBy('created_at'));
            // }
            $data['card_info'] = $cardInfo;

            $widgetSeparators = $cardInfo->widgetSeparator;
            $widgetLinks = $cardInfo->widgetLink;
            $widgetMemorials = $cardInfo->widgetMemorial;
            $widgetContactComms = $cardInfo->widgetContactComm;
            $widgetTextQuestions = $cardInfo->widgetTextQuestion;
            $widgetAttendQuests = $cardInfo->widgetAttendQuest;
            $widgetCountdowns = $cardInfo->widgetCountdown;
            $widgetImages = $cardInfo->widgetImage;
            $widgetOptionalQuestions = $cardInfo->widgetOptionalQuestion;
            $widgetSocialNetworks = $cardInfo->widgetSocialNetwork;
            $widgetUserTexts = $cardInfo->widgetUserText;
            $widgetVideos = $cardInfo->widgetVideo;

            $recipient = $this->load_recipient_information($id, $recipient_url);
            if ($recipient) {
                $cardInfo->recepient_name = $recipient->recipient_name;
                //Also pass recipient object
                $data['card_recipient'] = $recipient;
            }

            $mergedCollection = $widgetSeparators
                ->merge($widgetLinks)
                ->merge($widgetMemorials)
                ->merge($widgetContactComms)
                ->merge($widgetAttendQuests)
                ->merge($widgetCountdowns)
                ->merge($widgetImages)
                ->merge($widgetOptionalQuestions)
                ->merge($widgetSocialNetworks)
                ->merge($widgetUserTexts)
                ->merge($widgetVideos)
                ->merge($widgetTextQuestions)
            ;

            $data['sortedCollection'] = $mergedCollection->sortBy('created_at');

            // dD($data['sortedCollection']);
        }

        return view('frontend/playcard', $data);
    }

    private function load_recipient_information($card_id, $url)
    {
        if (empty($url))
            return null;
        $card_recipient = card_recipients_model::where([['url', '=', $url], ['card_id', '=', $card_id]])->first();

        return $card_recipient;
    }

    public function save_answers(Request $request)
    {
        //save data in tables of widgets
        $vcardid = $request->post('hcard_id');
        $all_answers = $request->post();
        // dd($all_answers);

        if (isset($all_answers['answer_optnl_quest']) && count($all_answers['answer_optnl_quest']) > 0) {
            for ($i = 0; $i < count($all_answers['answer_optnl_quest']); $i++) {
                $answer_optnl_quest_data = array(
                    'ip_address' => getenv("REMOTE_ADDR"),
                    'web_user_id' => auth()->user()->id,
                    'card_id' => $vcardid,
                    'optnl_quest_id' => $all_answers['optnl_quest_id'][$i],
                    'answer_optnl_quest' => $all_answers['answer_optnl_quest'][$i],
                );
                DB::table('answers_optional_question')->insert($answer_optnl_quest_data);
            }
        } else {
            $answer_optnl_quest_data = array(
                'ip_address' => getenv("REMOTE_ADDR"),
                'web_user_id' => auth()->user()->id,
                'card_id' => $vcardid,
                'optnl_quest_id' => null,
                'answer_optnl_quest' => null,
            );
            DB::table('answers_optional_question')->insert($answer_optnl_quest_data);
        }


        if (isset($all_answers['answer_text_question']) && count($all_answers['answer_text_question']) > 0) {
            for ($i = 0; $i < count($all_answers['answer_text_question']); $i++) {
                $answer_text_question_data = array(
                    'ip_address' => getenv("REMOTE_ADDR"),
                    'web_user_id' => auth()->user()->id,
                    'card_id' => $vcardid,
                    'text_question_id' => $all_answers['text_question_id'][$i],
                    'answer_text_question' => $all_answers['answer_text_question'][$i],
                );
                DB::table('answers_text_question')->insert($answer_text_question_data);
            }
        } else {
            $answer_text_question_data = array(
                'ip_address' => getenv("REMOTE_ADDR"),
                'web_user_id' => auth()->user()->id,
                'card_id' => $vcardid,
                'text_question_id' => null,
                'answer_text_question' => null,
            );
            DB::table('answers_text_question')->insert($answer_text_question_data);
        }


        if (isset($all_answers['answer_attend_quest']) && count($all_answers['answer_attend_quest']) > 0) {
            for ($i = 0; $i < count($all_answers['answer_attend_quest']); $i++) {
                $answer_attend_quest_data = array(
                    'ip_address' => getenv("REMOTE_ADDR"),
                    'web_user_id' => auth()->user()->id,
                    'card_id' => $vcardid,
                    'attend_quest_id' => $all_answers['attend_quest_id'][$i],
                    'answer_attend_quest' => $all_answers['answer_attend_quest'][$i],
                );
                DB::table('answers_attend_quest')->insert($answer_attend_quest_data);
            }
        } else {
            $answer_attend_quest_data = array(
                'ip_address' => getenv("REMOTE_ADDR"),
                'web_user_id' => auth()->user()->id,
                'card_id' => $vcardid,
                'attend_quest_id' => null,
                'answer_attend_quest' => null,
            );
            DB::table('answers_attend_quest')->insert($answer_attend_quest_data);
        }


        if (isset($all_answers['answer_memorial']) && count($all_answers['answer_memorial']) > 0) {
            for ($i = 0; $i < count($all_answers['answer_memorial']); $i++) {
                $answer_memorial_data = array(
                    'ip_address' => getenv("REMOTE_ADDR"),
                    'web_user_id' => auth()->user()->id,
                    'card_id' => $vcardid,
                    'memorial_id' => $all_answers['memorial_id'][$i],
                    'answer_memorial' => $all_answers['answer_memorial'][$i],
                );
                DB::table('answers_memorial')->insert($answer_memorial_data);
            }
        } else {
            $answer_memorial_data = array(
                'ip_address' => getenv("REMOTE_ADDR"),
                'web_user_id' => auth()->user()->id,
                'card_id' => $vcardid,
                'memorial_id' => null,
                'answer_memorial' => null,
            );
            DB::table('answers_memorial')->insert($answer_memorial_data);
        }


        // $widget_id = $request->post('widget_id');
        // $widget_type = $request->post('widget_type');

        return redirect('play/' . $vcardid);
    }

}
