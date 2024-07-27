<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','tag','active',
    ];

	
	protected $table  = 'tags';
}
