<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket_types_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','ticket_image','ticket_type','tokens','short_descr','active',
    ];

	
	protected $table  = 'ticket_types';
}
