<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_posts_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','blog_category_id','blog_title','blog_image','blog_text','active',
    ];

	
	protected $table  = 'blog_posts';
}
