<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer_optional_question_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'client_id', 'web_user_id',  'ip_address', 'card_id', 'optnl_quest_id', 'answer_optnl_quest', 'base_lang', 'active', 'created_at'
    ];

	
	protected $table  = 'answers_optional_question';
}
