<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendance_question_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','card_id','attend_quest_title','attend_quest_yes_title','attend_quest_no_title','attend_quest_mandatory','ticket_type_id','active',
    ];

	
	protected $table  = 'widget_attend_quest';
}
