<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cards_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'client_id', 'user_id', 'web_user_id', 'card_status', 'title', 'short_descr', 'tags', 'short_code', 'card_context', 'card_objects', 'designed_by_user_id', 'sender_user_id', 'sender_name', 'seal_design', 'background_image', 'envelop_design_id', 'envelop_inside_image', 'effect_name', 'canvas_image', 'stamp_image', 'stamp_design','stamp_design_id', 'card_image', 'music_title', 'music_file', 'recipient_name', 'front_image', 'back_image', 'flap_image', 'card_credits_price', 'base_lang', 'active','seal_design_id','background_image_id','envelop_inside_image_id','effect_name_id','canvas_image_id','stamp_image_id','card_image_id','music_file_id',
    ];

	
	protected $table  = 'cards';

    public function widgetAttendQuest()
    {
        return $this->hasMany(widget_attend_quest_model::class, 'card_id');
    }

    public function widgetContactComm()
    {
        return $this->hasMany(widget_contact_comm_model::class, 'card_id');
    }

    public function widgetCountdown()
    {
        return $this->hasMany(widget_countdown_model::class, 'card_id');
    }

    public function widgetImage()
    {
        return $this->hasMany(widget_image_model::class, 'card_id');
    }

    public function widgetLink()
    {
        return $this->hasMany(widget_link_model::class, 'card_id');
    }

    public function widgetMemorial()
    {
        return $this->hasMany(widget_memorial_model::class, 'card_id');
    }

    public function widgetOptionalQuestion()
    {
        return $this->hasMany(widget_optional_question_model::class, 'card_id');
    }

    public function widgetSeparator()
    {
        return $this->hasMany(widget_separator_model::class, 'card_id');
    }

    public function widgetSocialNetwork()
    {
        return $this->hasMany(widget_social_network_model::class, 'card_id');
    }

    public function widgetTextQuestion()
    {
        return $this->hasMany(widget_text_question_model::class, 'card_id');
    }

    public function widgetUserText()
    {
        return $this->hasMany(widget_user_text_model::class, 'card_id');
    }

    public function widgetVideo()
    {
        return $this->hasMany(widget_video_model::class, 'card_id');
    }


    public function answerMemorial()
    {
        return $this->hasMany(answer_memorial_model::class, 'card_id');
    }
    public function answerAttendQuest()
    {
        return $this->hasMany(answer_attend_quest_model::class, 'card_id');
    }
    public function answerTextQuest()
    {
        return $this->hasMany(answer_text_question_model::class, 'card_id');
    }
    public function answerOptnQuest()
    {
        return $this->hasMany(answer_optional_question_model::class, 'card_id');
    }
}

