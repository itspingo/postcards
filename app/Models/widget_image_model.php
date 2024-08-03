<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class widget_image_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'client_id', 'user_id', 'web_user_id', 'card_id', 'image_url', 'base_lang','ticket_type_id','ticket_type_id', 'active', 'created_at'
    ];

	
	protected $table  = 'widget_image';
}
