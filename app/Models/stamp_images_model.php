<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stamp_images_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','title','main_image','more_images','ticket_type_id','active',
    ];

	
	protected $table  = 'stamp_images';
}
