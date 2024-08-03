<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countdown_timer_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','card_id','countdown_title','countdown_date','countdown_time','js_date_format','ticket_type_id','active',
    ];

	
	protected $table  = 'widget_countdown';
}
