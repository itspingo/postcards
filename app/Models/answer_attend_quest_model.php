<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer_attend_quest_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'id', 'client_id', 'web_user_id', 'ip_address', 'card_id', 'attend_quest_id', 'answer_attend_quest',  'base_lang', 'active', 'created_at'
    ];

	
	protected $table  = 'answers_attend_quest';
}
