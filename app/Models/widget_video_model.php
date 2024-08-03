<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class widget_video_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'client_id', 'user_id', 'web_user_id', 'card_id', 'video_link', 'base_lang','ticket_type_id', 'active', 'created_at'
    ];

	
	protected $table  = 'widget_video';
}
