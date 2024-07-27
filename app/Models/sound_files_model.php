<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sound_files_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','title','sound_file','active',
    ];

	
	protected $table  = 'sound_files';
}
