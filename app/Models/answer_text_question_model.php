<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer_text_question_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'client_id',  'web_user_id', 'ip_address', 'card_id', 'text_question_id', 'answer_text_question', 'base_lang', 'active', 'created_at'
    ];

	
	protected $table  = 'answers_text_question';
}
