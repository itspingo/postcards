<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class widget_attend_quest_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'id', 'client_id', 'user_id', 'web_user_id', 'card_id', 'attend_quest_title', 'attend_quest_yes_title', 'attend_quest_no_title', 'attend_quest_mandatory', 'base_lang', 'ticket_type_id','active', 'created_at'
    ];

	
	protected $table  = 'widget_attend_quest';
}
