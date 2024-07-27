<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_reviews_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','post_id','score_rating','full_name','review','active',
    ];

	
	protected $table  = 'post_reviews';
}
