<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class widgets_ticket_type_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','widget_name','ticket_type_id','ticket_type_id','active',
    ];

	
	protected $table  = 'widgets_ticket_type';
}
