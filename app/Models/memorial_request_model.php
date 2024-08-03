<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memorial_request_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','card_id','memorial_title','memorial_text','memorial_presence_yesno','display_oncard','memorial_answer_mandatory','memorial_presence_status','ticket_type_id','active',
    ];

	
	protected $table  = 'widget_memorial';
}
