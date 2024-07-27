<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class widget_text_question_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'client_id', 'user_id', 'web_user_id', 'card_id', 'text_question_title', 'text_question_type', 'text_question_mandatory', 'text_question_foryesno', 'base_lang', 'active', 'created_at'
    ];

	
	protected $table  = 'widget_text_question';
}
