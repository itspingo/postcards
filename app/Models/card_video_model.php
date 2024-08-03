<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card_video_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','card_id','video_link','ticket_type_id','active',
    ];

	
	protected $table  = 'widget_video';
}
