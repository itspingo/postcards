<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class widget_social_network_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'client_id', 'user_id', 'web_user_id', 'card_id', 'sn_title', 'sn_facebook', 'sn_twitter', 'sn_instagram', 'sn_telegram', 'sn_whatsapp', 'sn_pinterest', 'base_lang','ticket_type_id', 'active', 'created_at'
    ];

	
	protected $table  = 'widget_social_network';
}
