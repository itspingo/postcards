<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\card_categories_model;
use App\Models\stickers_model;
use App\Models\backgrounds_model;
use App\Models\envelop_inside_images_model;
use App\Models\stamp_images_model;;
use App\Models\stamp_designs_model;
use App\Models\seal_designs_model;
use App\Models\envelop_designs_model;
use App\Models\music_categories_model;
use App\Models\DB_model;
use App\Models\cards_model;
use App\Models\ticket_types_model;
use App\Models\transactions_model;


use Illuminate\Broadcasting\Broadcasters\LogBroadcaster;

// use Carbon\Carbon;

class Card_designer extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() 
    {
        //$this->middleware('auth');    
    } 
 

    public function index($id='')
    {
        
        $data['page_title']="Designer";
        // $data['rows'] = card_categories_model::where('active','1')->get();
        $data['stickers'] = stickers_model::where('active','1')->get();
        $data['backgrounds'] = backgrounds_model::where('active','1')->get();
        $data['inside_images']=envelop_inside_images_model::where('active','1')->get();
        $data['stamp_images']=stamp_images_model::where('active','1')->get();
        $data['stamp_designs']=stamp_designs_model::where('active','1')->get();
        $data['ticket_types']=ticket_types_model::where('active','1')->get();
        $data['seal_designs']=seal_designs_model::where('active','1')->get();
        $data['envelop_designs'] = envelop_designs_model::with('design_parts')->where('active','1')->get();
        $data['cardmusic'] = music_categories_model::with('music_files')->where('active','1')->get();

        if($id!=''){
            session()->put('sess_card_id', $id);
            $data['card_info'] = cards_model::with([
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
            ])
            ->where('web_user_id',auth()->user()->id)
            ->where('id',$id)
            ->first();
            foreach ($data['card_info']->getRelations() as $relation => $items) {
                $data['card_info']->setRelation($relation, $items->sortBy('created_at'));
            }
        }else{
            $dbmodl = new DB_model();
            $dbmodl->settable('cards');
            $newrec = $dbmodl->create(['title' => 'New Card','card_status'=>'draft'])->id;
            session()->put('sess_card_id', $newrec);
        }
        return view('frontend/card_designer/card_designer',$data);
    }

    //--------------------------------------------------------//

    public function add_widget_link(Request $request){
        $data['card_id'] = session()->get('sess_card_id');
        $data['link_text'] = $request->post('link_text');
        $data['link_url'] = $request->post('link_url');
        // $data['id'] = $request->post('recid_widget_link');
        $recid =$request->post('recid_widget_link');

        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_link');
        if($recid == ''){
            $recid = $dbmodl->create($data)->id;
        }elseif($recid!=''){
            $recdata = $dbmodl->find($recid);
            $recdata->fill($data);
            $recdata->save();
        }
        $data['recid_widget_link'] = $recid;
        $dbmodl_card = new DB_model();
        $dbmodl_card->setTable('cards')->where('id',session()->get('sess_card_id'))->update(['widget_link_id' => $recid]);
        $widgetView = view('frontend/formated_widgets/link',$data);

         return view('frontend/formated_widgets/link',$data);
    }

    
    public function edit_widget_link(Request $request){
       
        $recid =$request->post('recid_widget_link');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_link');
        $recdata = $dbmodl->where('id',$recid)->first();

        return  $recdata;
    }

    public function delete_widget_link(Request $request){
        
        $recid =$request->post('recid_widget_link');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_link');
        $recdata = $dbmodl->where('id',$recid)->delete();
        
        return  $recdata;
    }
    //--------------------------------------------------------//

    public function add_widget_separator(Request $request){
        $data['card_id'] = session()->get('sess_card_id');
        $data['separator'] = $request->post('separator');        
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_separator');

        $recid =$request->post('recid_widget_separator');
        if($recid == ''){
            $recid = $dbmodl->create($data)->id;
        }elseif($recid!=''){
            $recdata = $dbmodl->find($recid);
            $recdata->fill($data);
            $recdata->save();
        }
        $data['recid_widget_separator'] = $recid;
        

        return view('frontend/formated_widgets/separator',$data);
    }
   


    public function edit_widget_separator(Request $request){
       
        $recid =$request->post('recid_widget_separator');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_separator');
        $recdata = $dbmodl->where('id',$recid)->first();

        return  $recdata;
    }

    public function delete_widget_separator(Request $request){
        
        $recid =$request->post('recid_widget_separator');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_separator');
        $recdata = $dbmodl->where('id',$recid)->delete();
        
        return  $recdata;
    }
    //--------------------------------------------------------//
    
    
    public function add_widget_social_network(Request $request){
        $data['card_id'] = session()->get('sess_card_id');
        $data['sn_title'] = $request->post('sn_title');
        $data['sn_facebook'] = $request->post('sn_facebook');
        $data['sn_twitter'] = $request->post('sn_twitter');
        $data['sn_instagram'] = $request->post('sn_instagram');
        $data['sn_telegram'] = $request->post('sn_telegram');
        $data['sn_whatsapp'] = $request->post('sn_whatsapp');
        $data['sn_pinterest'] = $request->post('sn_pinterest');

        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_social_network');
        $recid =$request->post('recid_widget_social_network');
        if($recid == ''){
            $recid = $dbmodl->create($data)->id;
        }elseif($recid!=''){
            $recdata = $dbmodl->find($recid);
            $recdata->fill($data);
            $recdata->save();
        }
        $data['recid_widget_social_network'] = $recid;

        return view('frontend/formated_widgets/social_network',$data);
    }


    public function edit_widget_social_network(Request $request){
       
        $recid =$request->post('recid_widget_social_network');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_social_network');
        $recdata = $dbmodl->where('id',$recid)->first();

        return  $recdata;
    }

    public function delete_widget_social_network(Request $request){
        
        $recid =$request->post('recid_widget_social_network');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_social_network');
        $recdata = $dbmodl->where('id',$recid)->delete();
        
        return  $recdata;
    }
    //--------------------------------------------------------//
    
    
    public function add_widget_video(Request $request){
        $data['video_link'] = str_replace('watch?v=','embed/',$request->post('video_link'));        
        $data['card_id'] = session()->get('sess_card_id');
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_video');
        $recid =$request->post('recid_widget_video');
        if($recid == ''){
            $recid = $dbmodl->create($data)->id;
        }elseif($recid!=''){
            $recdata = $dbmodl->find($recid);
            $recdata->fill($data);
            $recdata->save();
        }
        $data['recid_widget_video'] = $recid;

        return view('frontend/formated_widgets/video',$data);
    }

    public function edit_widget_video(Request $request){
       
        $recid =$request->post('recid_widget_video');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_video');
        $recdata = $dbmodl->where('id',$recid)->first();

        return  $recdata;
    }

    public function delete_widget_video(Request $request){
        
        $recid =$request->post('recid_widget_video');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_video');
        $recdata = $dbmodl->where('id',$recid)->delete();
        
        return  $recdata;
    }
    //--------------------------------------------------------//
    
    public function add_widget_user_text(Request $request){
        $data['card_id'] = session()->get('sess_card_id');
        $data['user_text'] = $request->post('user_text');
        $data['user_text_alignment'] = $request->post('user_text_alignment');
        $data['user_text_font_size'] = $request->post('user_text_font_size');

        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_user_text');
        $recid =$request->post('recid_widget_user_text');
        if($recid == ''){
            $recid = $dbmodl->create($data)->id;
        }elseif($recid!=''){
            $recdata = $dbmodl->find($recid);
            $recdata->fill($data);
            $recdata->save();
        }
        $data['recid_widget_user_text'] = $recid;

        return view('frontend/formated_widgets/user_text',$data);
    }



    public function edit_widget_user_text(Request $request){
       
        $recid =$request->post('recid_widget_user_text');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_user_text');
        $recdata = $dbmodl->where('id',$recid)->first();

        return  $recdata;
    }

    public function delete_widget_user_text(Request $request){
        
        $recid =$request->post('recid_widget_user_text');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_user_text');
        $recdata = $dbmodl->where('id',$recid)->delete();
        
        return  $recdata;
    }
    //--------------------------------------------------------//
    
    
    public function add_widget_attend_quest(Request $request){
        $data['card_id'] = session()->get('sess_card_id');
        $data['attend_quest_title'] = $request->post('attend_quest_title');
        $data['attend_quest_yes_title'] = $request->post('attend_quest_yes_title');
        $data['attend_quest_no_title'] = $request->post('attend_quest_no_title');
        $data['attend_quest_mandatory'] = $request->post('attend_quest_mandatory');

        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_attend_quest');
        $recid =$request->post('recid_widget_attend_quest');
        // dd($recid);
        if($recid == ''){
            $recid = $dbmodl->create($data)->id;
        }elseif($recid!=''){
            $recdata = $dbmodl->find($recid);
            $recdata->fill($data);
            $recdata->save();
        }
        $data['recid_widget_attend_quest'] = $recid;

        return view('frontend/formated_widgets/attend_quest',$data);
    }


    public function edit_widget_attend_quest(Request $request){
       
        $recid =$request->post('recid_widget_attend_quest');
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_attend_quest');
        $recdata = $dbmodl->where('id',$recid)->first();

        return  $recdata;
    }

    public function delete_widget_attend_quest(Request $request){
        
        $recid =$request->post('recid_widget_attend_quest');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_attend_quest');
        $recdata = $dbmodl->where('id',$recid)->delete();
        
        return  $recdata;
    }
    //--------------------------------------------------------//
    

    public function add_widget_text_question(Request $request){
        $data['card_id'] = session()->get('sess_card_id');
        $data['text_question_title'] = $request->post('text_question_title');
        $data['text_question_type'] = $request->post('text_question_type');
        $data['text_question_mandatory'] = $request->post('text_question_mandatory');
        $data['text_question_foryesno'] = $request->post('text_question_foryesno');

        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_text_question');
        $recid =$request->post('recid_widget_text_question');
        if($recid == ''){
            $recid = $dbmodl->create($data)->id;
        }elseif($recid!=''){
            $recdata = $dbmodl->find($recid);
            $recdata->fill($data);
            $recdata->save();
        }
        $data['recid_widget_text_question'] = $recid;

        return view('frontend/formated_widgets/text_question',$data);
    }


    public function edit_widget_text_question(Request $request){
       
        $recid =$request->post('recid_widget_text_question');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_text_question');
        $recdata = $dbmodl->where('id',$recid)->first();

        return  $recdata;
    }

    public function delete_widget_text_question(Request $request){
        
        $recid =$request->post('recid_widget_text_question');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_text_question');
        $recdata = $dbmodl->where('id',$recid)->delete();
        
        return  $recdata;
    }
    //--------------------------------------------------------//
    

    
    public function add_widget_countdown(Request $request)
    {
        $data['card_id'] = session()->get('sess_card_id');
        $data['countdown_title'] = $request->post('countdown_title');
        $data['countdown_date'] = $request->post('countdown_date');
        $data['countdown_time'] = $request->post('countdown_time');
    
        // Combine date and time and format it
        $datetime = $data['countdown_date'] . ' ' . $data['countdown_time'];
        $data['js_date_format'] = date('M d, Y H:i:s', strtotime($datetime));
    
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_countdown');
        $recid = $request->post('recid_widget_countdown');
    
        if (empty($recid)) {
            // Create new record if recid is empty
            $newRecord = $dbmodl->create($data);
            $recid = $newRecord->id;
        } else {
            // Update existing record if recid is not empty
            $recdata = $dbmodl->find($recid);
            if ($recdata) {
                $recdata->fill($data);
                $recdata->save();
            }
        }
    
        $data['recid_widget_countdown'] = $recid;
    
        return view('frontend/formated_widgets/countdown', $data);
    }
    



    public function edit_widget_countdown(Request $request){
       
        $recid =$request->post('recid_widget_countdown');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_countdown');
        $recdata = $dbmodl->where('id',$recid)->first();

        return  $recdata;
    }

    public function delete_widget_countdown(Request $request){
        
        $recid =$request->post('recid_widget_countdown');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_countdown');
        $recdata = $dbmodl->where('id',$recid)->delete();
        
        return  $recdata;
    }
    //--------------------------------------------------------//
    
    
    public function add_widget_optional_question(Request $request)
    {
        $data['card_id'] = session()->get('sess_card_id');
        $data['optnl_quest_title'] = $request->post('optnl_quest_title');
        $data['optnl_quest_type'] = $request->post('optnl_quest_type');
        $data['optnl_quest_options'] = implode(',',$request->post('optnl_quest_options'));
        $data['optnl_quest_mandatory'] = $request->post('optnl_quest_mandatory');
        $data['optnl_quest_foryesno'] = $request->post('optnl_quest_foryesno');
    
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_optional_question');
        $recid =$request->post('recid_widget_optional_question');
        if($recid == ''){
            $recid = $dbmodl->create($data)->id;
        }elseif($recid!=''){
            $recdata = $dbmodl->find($recid);
            $recdata->fill($data);
            $recdata->save();
        }
        $data['recid_widget_optional_question'] = $recid;

      return view('frontend/formated_widgets/optnl_quest', $data);
    }


    public function edit_widget_optional_question(Request $request){
       
        $recid =$request->post('recid_widget_optional_question');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_optional_question');
        $recdata = $dbmodl->where('id',$recid)->first();

        return  $recdata;
    }

    public function delete_widget_optional_question(Request $request){
        
        $recid =$request->post('recid_widget_optional_question');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_optional_question');
        $recdata = $dbmodl->where('id',$recid)->delete();
        
        return  $recdata;
    }
    //--------------------------------------------------------//
    
    
    public function add_widget_contact_comm(Request $request)
    {
        $data['card_id'] = session()->get('sess_card_id');
        $data['comm_type'] = $request->post('comm_type');
        $data['comm_title'] = $request->post('comm_title');
        $data['comm_tel'] = $request->post('comm_tel');
        $data['comm_mobile'] = $request->post('comm_mobile');
        $data['comm_sms_no'] = $request->post('comm_sms_no');
        $data['comm_sms_text'] = $request->post('comm_sms_text');
        $data['comm_email'] = $request->post('comm_email');
        $data['comm_whatsapp_no'] = $request->post('comm_whatsapp_no');
        $data['comm_whatsapp_text'] = $request->post('comm_whatsapp_text');
    
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_contact_comm');
        $recid =$request->post('recid_widget_contact_comm');
        if($recid == ''){
            $recid = $dbmodl->create($data)->id;
        }elseif($recid!=''){
            $recdata = $dbmodl->find($recid);
            $recdata->fill($data);
            $recdata->save();
        }
        $data['recid_widget_contact_comm'] = $recid;

      return view('frontend/formated_widgets/cont_comm', $data);
    }


    public function edit_widget_contact_comm(Request $request){
       
        $recid =$request->post('recid_widget_contact_comm');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_contact_comm');
        $recdata = $dbmodl->where('id',$recid)->first();

        return  $recdata;
    }

    public function delete_widget_contact_comm(Request $request){
        
        $recid =$request->post('recid_widget_contact_comm');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_contact_comm');
        $recdata = $dbmodl->where('id',$recid)->delete();
        
        return  $recdata;
    }
    //--------------------------------------------------------//
    

    public function add_widget_memorial(Request $request)
    {
        $data['card_id'] = session()->get('sess_card_id');
        $data['memorial_title'] = $request->post('memorial_title');
        $data['memorial_text'] = $request->post('memorial_text');
        $data['memorial_presence_yesno'] = $request->post('memorial_presence_yesno');
        $data['display_oncard'] = $request->post('display_oncard');
        $data['memorial_answer_mandatory'] = $request->post('memorial_answer_mandatory');
        $data['memorial_presence_status'] = $request->post('memorial_presence_status');
    
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_memorial');
        $recid =$request->post('recid_widget_memorial');
        if($recid == ''){
            $recid = $dbmodl->create($data)->id;
        }elseif($recid!=''){
            $recdata = $dbmodl->find($recid);
            $recdata->fill($data);
            $recdata->save();
        }
        $data['recid_widget_memorial'] = $recid;

      return view('frontend/formated_widgets/memorial', $data);
    }


    public function edit_widget_memorial(Request $request){
       
        $recid =$request->post('recid_widget_memorial');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_memorial');
        $recdata = $dbmodl->where('id',$recid)->first();

        return  $recdata;
    }

    public function delete_widget_memorial(Request $request){
        
        $recid =$request->post('recid_widget_memorial');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_memorial');
        $recdata = $dbmodl->where('id',$recid)->delete();
        
        return  $recdata;
    }
    //--------------------------------------------------------//
    

    public function add_widget_image(Request $request)
    {
        $data['card_id'] = session()->get('sess_card_id');
        if ($request->hasFile('widget_image') && $request->file('widget_image')->isValid()) {
            $imgfile = $request->file('widget_image')->store('public');
            $data['image_url'] = $imgfile;
        }else{
            $data['image_url'] = '';
        }
    
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_image');
        $recid =$request->post('recid_widget_image');
        if($recid == ''){
            $recid = $dbmodl->create($data)->id;
        }elseif($recid!=''){
            $recdata = $dbmodl->find($recid);
            $recdata->fill($data);
            $recdata->save();
        }
        $data['recid_widget_image'] = $recid;

        return view('frontend/formated_widgets/image', $data);
    }

    public function edit_widget_image(Request $request){
       
        $recid =$request->post('recid_widget_image');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_image');
        $recdata = $dbmodl->where('id',$recid)->first();

        return  $recdata;
    }

    public function delete_widget_image(Request $request){
        
        $recid =$request->post('recid_widget_image');
        // dd($recid);
        $dbmodl = new DB_model();
        $dbmodl->setTable('widget_image');
        $recdata = $dbmodl->where('id',$recid)->delete();
        
        return  $recdata;
    }
    //--------------------------------------------------------//
    

    //================ Ajaxes =============================================//

    public function updateBackgroundImage(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'imageURL' => 'required|url',
        // ]);

        
        $cardId = session()->get('sess_card_id');
        $card = cards_model::find($cardId);

        if ($card) {
            // Update the background_image column
            $card->background_image = $request->imageURL;
            $card->background_image_id = $request->recid;
            $card->save();

            return response()->json(['message' => 'Background image updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Card not found'], 404);
        }
    }

    public function updateInsideImage(Request $request)
    {
        $cardId = session()->get('sess_card_id');
        $card = cards_model::find($cardId);  // where('id',$cardId)->first;
        
        if ($card) {
            // Update the background_image column
            $card->envelop_inside_image = $request->imageURL;
            $card->envelop_inside_image_id = $request->recid;
            $card->save();

            return response()->json(['message' => 'Background image updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Card not found'], 404);
        }
    }

    
    public function updateCanvasImage(Request $request)
    {
        $cardId = session()->get('sess_card_id');        
        $data = $request->imageURL;
        
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);
       
        // Create a temporary file and move the data into it
        $tempFilePath = sys_get_temp_dir() . '/' . uniqid() . '.jpg';
        file_put_contents($tempFilePath, $data);

        // Create an UploadedFile instance
        $file = new \Illuminate\Http\UploadedFile($tempFilePath, 'canvas_image_' . $cardId . '.jpg');
       
        // Store the file using the 'public' disk
        $imagePath = $file->store('public');
       
        $card = cards_model::find($cardId); 
        
        if ($card) {
            // Update the background_image column
            $card->canvas_image = $imagePath;
            $card->save();

            return response()->json(['message' => 'Background image updated successfully'], 200);
        } else {
            return response()->json(['message' => 'Card not found'], 404);
        }
    }

public function updateStampImage(Request $request)
{
    $cardId = session()->get('sess_card_id');
    $card = cards_model::find($cardId);  // where('id',$cardId)->first;
    
    if ($card) {
        // Update the background_image column
        $card->stamp_image = $request->imageURL;
        $card->stamp_image_id = $request->recid;
        $card->save();

        return response()->json(['message' => 'Background image updated successfully'], 200);
    } else {
        return response()->json(['message' => 'Card not found'], 404);
    }
}

public function updateStampDesign(Request $request)
{
    $cardId = session()->get('sess_card_id');
    $card = cards_model::find($cardId);  // where('id',$cardId)->first;
    
    if ($card) {
        // Update the background_image column
        $card->stamp_design = $request->imageURL;
        $card->stamp_design_id = $request->recid;
        $card->save();

        return response()->json(['message' => 'Background image updated successfully'], 200);
    } else {
        return response()->json(['message' => 'Card not found'], 404);
    }
}

public function updateSealDesign(Request $request)
{
    $cardId = session()->get('sess_card_id');
    $card = cards_model::find($cardId);  // where('id',$cardId)->first;
    
    if ($card) {
        // Update the background_image column
        $card->seal_design = $request->imageURL;
        $card->seal_design_id = $request->recid;
        $card->save();

        return response()->json(['message' => 'Background image updated successfully'], 200);
    } else {
        return response()->json(['message' => 'Card not found'], 404);
    }
}

public function updateCardMusic(Request $request)
{
    $cardId = session()->get('sess_card_id');
    $card = cards_model::find($cardId);  // where('id',$cardId)->first;
    
    if ($card) {
        // Update the background_image column
        $card->music_title = $request->musictitle;
        $card->music_file = $request->musicfile;
        $card->music_file_id = $request->recid;
        $card->save();

        return response()->json(['message' => 'Background image updated successfully'], 200);
    } else {
        return response()->json(['message' => 'Card not found'], 404);
    }
}

public function updateRecipientName(Request $request)
{
    $cardId = session()->get('sess_card_id');
    $card = cards_model::find($cardId);  // where('id',$cardId)->first;
    
    if ($card) {
        // Update the background_image column
        $card->recipient_name = $request->recipient_name;
        $card->save();

        return response()->json(['message' => 'Background image updated successfully'], 200);
    } else {
        return response()->json(['message' => 'Card not found'], 404);
    }
}


public function updateSenderName(Request $request)
{
    $cardId = session()->get('sess_card_id');
    $card = cards_model::find($cardId);  // where('id',$cardId)->first;
    
    if ($card) {
        // Update the background_image column
        $card->sender_name = $request->sender_name;
        $card->save();

        return response()->json(['message' => 'Background image updated successfully'], 200);
    } else {
        return response()->json(['message' => 'Card not found'], 404);
    }
}

public function updateEnvelopDesign(Request $request)
{
    $cardId = session()->get('sess_card_id');
    $card = cards_model::find($cardId);  // where('id',$cardId)->first;
    
    if ($card) {
        // Update the background_image column
        $card->front_image = $request->frontimage;
        $card->back_image = $request->backimage;
        $card->flap_image = $request->flapimage;
        $card->envelop_design_id = $request->recid;
        $card->save();

        return response()->json(['message' => 'Background image updated successfully'], 200);
    } else {
        return response()->json(['message' => 'Card not found'], 404);
    }
}

 
public function updateEffects(Request $request)
{
    $cardId = session()->get('sess_card_id');
    $card = cards_model::find($cardId);  // where('id',$cardId)->first;
    
    if ($card) {
        // Update the background_image column
        $card->effect_name = $request->effect_name;
        $card->save();

        return response()->json(['message' => 'Background image updated successfully'], 200);
    } else {
        return response()->json(['message' => 'Card not found'], 404);
    }
}

public function saveCardObjects(Request $request)
{
    // Log the incoming request data
    //Log::info('Request received:', $request->all());

    // Retrieve the session card ID and find the corresponding card
    $cardId = session()->get('sess_card_id');
    $card = cards_model::find($cardId);

    if ($card) {

        $ticket_types = ticket_types_model::where(['active'=>'1'])->get();
        $dbmodl = new DB_model();
        $card_token_details = [];
        $tot_tokens_reqd = 0;
        $tokensAvailable = transactions_model::where('web_user_id',auth()->user()->id)->sum('tokens');

        //Log::info('Card found:', ['card' => $card]);

        // Update the card_objects column with JSON data
        $card->card_objects = $request->input('card_objects');
        //Log::info('Card objects updated:', ['card_objects' => $card->card_objects]);

        // Handle the uploaded image if present
        if ($request->hasFile('card_image') && $request->file('card_image')->isValid()) {
            $file = $request->file('card_image');

            // Ensure a unique filename based on card ID
            $imageName = 'card_image_' . $cardId . '.jpg';

            // Store the image in the 'public' disk under 'storage/app/public' directory
            $path = $file->storeAs('public', $imageName);
            //Log::info('Image stored:', ['path' => $path]);

            // Update the card_image column with the storage path
            $card->card_image = $path;
        } else {
            //Log::info('No valid file received');
        }
        $card->web_user_id = auth()->user()->id;
        // Save the card model with updated data
        $card->save();
        //Log::info('Card saved successfully');


/*
        $envelop_design_id = $card->envelop_design_id;
        if($envelop_design_id != ''){        
            $dbmodl->settable('envelop_designs');
            $dbmodel_rec = $dbmodl->where(['id'=>$envelop_design_id])->first();
            if($dbmodel_rec->ticket_type_id != ''){
                $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
                array_push($card_token_details, [
                    'web_user_id'=>auth()->user()->id,
                    'feature'=>'Envelop Design',
                    'stamp_type'=>$stamp_rec->ticket_type,
                    'tokens'=> -$stamp_rec->tokens
                ]);
                $tot_tokens_reqd += $stamp_rec->tokens;
            }
        }

        $seal_design_id = $card->seal_design_id;
        if($seal_design_id != ''){        
            $dbmodl->settable('seal_designs');
            $dbmodel_rec = $dbmodl->where(['id'=>$seal_design_id])->first();
            if($dbmodel_rec->ticket_type_id != ''){
                $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
                array_push($card_token_details, [
                    'web_user_id'=>auth()->user()->id,
                    'feature'=>'Seal Design',
                    'stamp_type'=>$stamp_rec->ticket_type,
                    'tokens'=> -$stamp_rec->tokens
                ]);
                $tot_tokens_reqd += $stamp_rec->tokens;
            }
        }


        $background_image_id = $card->background_image_id;
        if($background_image_id != ''){        
            $dbmodl->settable('backgrounds');
            $dbmodel_rec = $dbmodl->where(['id'=>$background_image_id])->first();
            if($dbmodel_rec->ticket_type_id != ''){
                $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
                array_push($card_token_details, [
                    'web_user_id'=>auth()->user()->id,
                    'feature'=>'Envelop Design',
                    'stamp_type'=>$stamp_rec->ticket_type,
                    'tokens'=> -$stamp_rec->tokens
                ]);
                $tot_tokens_reqd += $stamp_rec->tokens;
            }
        }


        $envelop_inside_image_id = $card->envelop_inside_image_id;
        if($envelop_inside_image_id != ''){        
            $dbmodl->settable('envelop_inside_images');
            $dbmodel_rec = $dbmodl->where(['id'=>$envelop_inside_image_id])->first();
            if($dbmodel_rec->ticket_type_id != ''){
                $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
                array_push($card_token_details, [
                    'web_user_id'=>auth()->user()->id,
                    'feature'=>'Envelop Inside Image',
                    'stamp_type'=>$stamp_rec->ticket_type,
                    'tokens'=> -$stamp_rec->tokens
                ]);
                $tot_tokens_reqd += $stamp_rec->tokens;
            }
        }


        // $canvas_image_id = $card->canvas_image_id;
        // if($canvas_image_id != ''){        
        //     $dbmodl->settable('envelop_designs');
        //     $dbmodel_rec = $dbmodl->where(['id'=>$canvas_image_id])->first();
        //     if($dbmodel_rec->ticket_type_id != ''){
        //         $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
        //         array_push($card_token_details, [
        //             'feature'=>'Context Selection',
        //             'stamp_type'=>$stamp_rec->ticket_type,
        //             'tokens'=> -$stamp_rec->tokens
        //         ]);
        //         $tot_tokens_reqd += $stamp_rec->tokens;
        //     }
        // }


        $stamp_image_id = $card->stamp_image_id;
        if($stamp_image_id != ''){        
            $dbmodl->settable('stamp_images');
            $dbmodel_rec = $dbmodl->where(['id'=>$stamp_image_id])->first();
            if($dbmodel_rec->ticket_type_id != ''){
                $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
                array_push($card_token_details, [
                    'web_user_id'=>auth()->user()->id,
                    'feature'=>'Stamp Image',
                    'stamp_type'=>$stamp_rec->ticket_type,
                    'tokens'=> -$stamp_rec->tokens
                ]);
                $tot_tokens_reqd += $stamp_rec->tokens;
            }
        }


        $stamp_design_id = $card->stamp_design_id;
        if($stamp_design_id != ''){        
            $dbmodl->settable('stamp_designs');
            $dbmodel_rec = $dbmodl->where(['id'=>$stamp_design_id])->first();
            if($dbmodel_rec->ticket_type_id != ''){
                $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
                array_push($card_token_details, [
                    'web_user_id'=>auth()->user()->id,
                    'feature'=>'Stamp Design',
                    'stamp_type'=>$stamp_rec->ticket_type,
                    'tokens'=> -$stamp_rec->tokens
                ]);
                $tot_tokens_reqd += $stamp_rec->tokens;
            }
        }


        // $card_image_id = $card->card_image_id;
        // if($card_image_id != ''){        
        //     $dbmodl->settable('envelop_designs');
        //     $dbmodel_rec = $dbmodl->where(['id'=>$card_image_id])->first();
        //     if($dbmodel_rec->ticket_type_id != ''){
        //         $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
        //         array_push($card_token_details, [
        //             'feature'=>'Card Image',
        //             'stamp_type'=>$stamp_rec->ticket_type,
        //             'tokens'=> -$stamp_rec->tokens
        //         ]);
        //         $tot_tokens_reqd += $stamp_rec->tokens;
        //     }
        // }


        $music_file_id = $card->music_file_id;
        if($music_file_id != ''){        
            $dbmodl->settable('music_files');
            $dbmodel_rec = $dbmodl->where(['id'=>$music_file_id])->first();
            if($dbmodel_rec->ticket_type_id != ''){
                $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
                array_push($card_token_details, [
                    'web_user_id'=>auth()->user()->id,
                    'feature'=>'Music Selection',
                    'stamp_type'=>$stamp_rec->ticket_type,
                    'tokens'=> -$stamp_rec->tokens
                ]);
                $tot_tokens_reqd += $stamp_rec->tokens;
            }
        }

        // dd($card_token_details); 

        // dd('tot_tokens_reqd: '.$tot_tokens_reqd.' , tokenavailable: '.$tokensAvailable);
        // DB::enableQueryLog();
        if($tot_tokens_reqd <= $tokensAvailable ){
            foreach($card_token_details as $card_token_detail){
                transactions_model::create($card_token_detail);
            }

        }
*/


        // Fetch the canvas background image URL if exists
        $imageUrl = Storage::url($card->canvas_image);
        //Log::info('Canvas Image URL:', ['imageUrl' => $imageUrl]);

        // Return a JSON response indicating success and the canvas image URL
        return response()->json(['message' => 'Canvas objects saved successfully', 'imageUrl' => $imageUrl], 200);
    } else {
        //Log::info('Card not found');
        return response()->json(['message' => 'Card not found'], 404);
    }
}




public function getCanvasImage($cardId)
{
    $card = cards_model::find($cardId);

    if ($card && $card->canvas_image) {
        $imageUrl = Storage::url($card->canvas_image);
        return response()->json(['imageUrl' => $imageUrl], 200);
    } else {
        return response()->json(['message' => 'Card or image not found'], 404);
    }
}


/*
public function store_card($cardId){
    $card = cards_model::find($cardId);
    $ticket_types = ticket_types_model::where(['active'=>'1'])->get();
    $dbmodl = new DB_model();
    $card_token_details = [];
    $tot_tokens_reqd = 0;

    $tokensAvailable = transactions_model::where('web_user_id',auth()->user()->id)->sum('tokens');

    $envelop_design_id = $card->envelop_design_id;
    if($envelop_design_id != ''){        
        $dbmodl->settable('envelop_designs');
        $dbmodel_rec = $dbmodl->where(['id'=>$envelop_design_id])->first();
        if($dbmodel_rec->ticket_type_id != ''){
            $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
            array_push($card_token_details, [
                'web_user_id'=>auth()->user()->id,
                'feature'=>'Envelop Design',
                'stamp_type'=>$stamp_rec->ticket_type,
                'tokens'=> -$stamp_rec->tokens
            ]);
            $tot_tokens_reqd += $stamp_rec->tokens;
        }
    }

    $seal_design_id = $card->seal_design_id;
    if($seal_design_id != ''){        
        $dbmodl->settable('seal_designs');
        $dbmodel_rec = $dbmodl->where(['id'=>$seal_design_id])->first();
        if($dbmodel_rec->ticket_type_id != ''){
            $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
            array_push($card_token_details, [
                'web_user_id'=>auth()->user()->id,
                'feature'=>'Seal Design',
                'stamp_type'=>$stamp_rec->ticket_type,
                'tokens'=> -$stamp_rec->tokens
            ]);
            $tot_tokens_reqd += $stamp_rec->tokens;
        }
    }


    $background_image_id = $card->background_image_id;
    if($background_image_id != ''){        
        $dbmodl->settable('backgrounds');
        $dbmodel_rec = $dbmodl->where(['id'=>$background_image_id])->first();
        if($dbmodel_rec->ticket_type_id != ''){
            $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
            array_push($card_token_details, [
                'web_user_id'=>auth()->user()->id,
                'feature'=>'Envelop Design',
                'stamp_type'=>$stamp_rec->ticket_type,
                'tokens'=> -$stamp_rec->tokens
            ]);
            $tot_tokens_reqd += $stamp_rec->tokens;
        }
    }


    $envelop_inside_image_id = $card->envelop_inside_image_id;
    if($envelop_inside_image_id != ''){        
        $dbmodl->settable('envelop_inside_images');
        $dbmodel_rec = $dbmodl->where(['id'=>$envelop_inside_image_id])->first();
        if($dbmodel_rec->ticket_type_id != ''){
            $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
            array_push($card_token_details, [
                'web_user_id'=>auth()->user()->id,
                'feature'=>'Envelop Inside Image',
                'stamp_type'=>$stamp_rec->ticket_type,
                'tokens'=> -$stamp_rec->tokens
            ]);
            $tot_tokens_reqd += $stamp_rec->tokens;
        }
    }


    // $canvas_image_id = $card->canvas_image_id;
    // if($canvas_image_id != ''){        
    //     $dbmodl->settable('envelop_designs');
    //     $dbmodel_rec = $dbmodl->where(['id'=>$canvas_image_id])->first();
    //     if($dbmodel_rec->ticket_type_id != ''){
    //         $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
    //         array_push($card_token_details, [
    //             'feature'=>'Context Selection',
    //             'stamp_type'=>$stamp_rec->ticket_type,
    //             'tokens'=> -$stamp_rec->tokens
    //         ]);
    //         $tot_tokens_reqd += $stamp_rec->tokens;
    //     }
    // }


    $stamp_image_id = $card->stamp_image_id;
    if($stamp_image_id != ''){        
        $dbmodl->settable('stamp_images');
        $dbmodel_rec = $dbmodl->where(['id'=>$stamp_image_id])->first();
        if($dbmodel_rec->ticket_type_id != ''){
            $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
            array_push($card_token_details, [
                'web_user_id'=>auth()->user()->id,
                'feature'=>'Stamp Image',
                'stamp_type'=>$stamp_rec->ticket_type,
                'tokens'=> -$stamp_rec->tokens
            ]);
            $tot_tokens_reqd += $stamp_rec->tokens;
        }
    }


    $stamp_design_id = $card->stamp_design_id;
    if($stamp_design_id != ''){        
        $dbmodl->settable('stamp_designs');
        $dbmodel_rec = $dbmodl->where(['id'=>$stamp_design_id])->first();
        if($dbmodel_rec->ticket_type_id != ''){
            $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
            array_push($card_token_details, [
                'web_user_id'=>auth()->user()->id,
                'feature'=>'Stamp Design',
                'stamp_type'=>$stamp_rec->ticket_type,
                'tokens'=> -$stamp_rec->tokens
            ]);
            $tot_tokens_reqd += $stamp_rec->tokens;
        }
    }


    // $card_image_id = $card->card_image_id;
    // if($card_image_id != ''){        
    //     $dbmodl->settable('envelop_designs');
    //     $dbmodel_rec = $dbmodl->where(['id'=>$card_image_id])->first();
    //     if($dbmodel_rec->ticket_type_id != ''){
    //         $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
    //         array_push($card_token_details, [
    //             'feature'=>'Card Image',
    //             'stamp_type'=>$stamp_rec->ticket_type,
    //             'tokens'=> -$stamp_rec->tokens
    //         ]);
    //         $tot_tokens_reqd += $stamp_rec->tokens;
    //     }
    // }


    $music_file_id = $card->music_file_id;
    if($music_file_id != ''){        
        $dbmodl->settable('music_files');
        $dbmodel_rec = $dbmodl->where(['id'=>$music_file_id])->first();
        if($dbmodel_rec->ticket_type_id != ''){
            $stamp_rec = $this->get_stamp_rec($ticket_types, $dbmodel_rec->ticket_type_id);
            array_push($card_token_details, [
                'web_user_id'=>auth()->user()->id,
                'feature'=>'Music Selection',
                'stamp_type'=>$stamp_rec->ticket_type,
                'tokens'=> -$stamp_rec->tokens
            ]);
            $tot_tokens_reqd += $stamp_rec->tokens;
        }
    }

    // dd($card_token_details); 

    // dd('tot_tokens_reqd: '.$tot_tokens_reqd.' , tokenavailable: '.$tokensAvailable);
    // DB::enableQueryLog();
    if($tot_tokens_reqd <= $tokensAvailable ){
        foreach($card_token_details as $card_token_detail){
            transactions_model::create($card_token_detail);
        }

    }else{
        return redirect()->back()->with('flash_failure', 'Insufficient tokens');
    }
    //  dd(DB::getQueryLog());

}
*/

    protected function get_stamp_rec($ticket_types, $stamp_id){
        // $retval=0;
        foreach($ticket_types as $tickt_typ){
            if($tickt_typ->id == $stamp_id ){
                return $tickt_typ;
            }
        }
        return false;
    }

}
