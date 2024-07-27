<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer_memorial_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'client_id', 'web_user_id',  'ip_address', 'card_id', 'memorial_id', 'answer_memorial', 'base_lang', 'active', 'created_at'
    ];

	
	protected $table  = 'answers_memorial';
}
