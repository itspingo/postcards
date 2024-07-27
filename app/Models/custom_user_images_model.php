<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class custom_user_images_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','title','custom_user_image','active',
    ];

	
	protected $table  = 'custom_user_images';
}
