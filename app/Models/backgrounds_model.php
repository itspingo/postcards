<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class backgrounds_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','title','main_image','more_images','active',
    ];

	
	protected $table  = 'backgrounds';
}
