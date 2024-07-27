<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class effects_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','title','effects_file','active',
    ];

	
	protected $table  = 'effects';
}
