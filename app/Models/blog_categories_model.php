<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_categories_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','blog_category','active',
    ];

	
	protected $table  = 'blog_categories';
}
