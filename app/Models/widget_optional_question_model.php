<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class widget_optional_question_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'client_id', 'user_id', 'web_user_id', 'card_id', 'optnl_quest_title', 'optnl_quest_type', 'optnl_quest_options', 'optnl_quest_mandatory', 'optnl_quest_foryesno', 'base_lang', 'active', 'created_at'
    ];

	
	protected $table  = 'widget_optional_question';
}
