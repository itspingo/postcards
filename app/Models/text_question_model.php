<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class text_question_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','card_id','text_question_title','text_question_type','text_question_mandatory','text_question_foryesno','ticket_type_id','active',
    ];

	
	protected $table  = 'widget_text_question';
}
