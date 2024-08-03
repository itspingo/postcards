<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_text_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','card_id','user_text','user_text_alignment','user_text_font_size','ticket_type_id','active',
    ];

	
	protected $table  = 'widget_user_text';
}
