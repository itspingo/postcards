<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class music_files_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','music_category_id','title','music_file','active',
    ];

	
	protected $table  = 'music_files';
}
