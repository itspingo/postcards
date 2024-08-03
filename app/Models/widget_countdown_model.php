<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class widget_countdown_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'client_id', 'user_id', 'web_user_id', 'card_id', 'countdown_title', 'countdown_date', 'countdown_time', 'js_date_format', 'base_lang', 'ticket_type_id','active', 'created_at'
    ];

	
	protected $table  = 'widget_countdown';
}
