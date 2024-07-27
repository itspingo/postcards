<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card_recipients_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'client_id', 'user_id', 'web_user_id', 'card_id', 'score_rating', 'full_name', 'review', 'base_lang', 'active', 'created_at', 'updated_at', 'deleted_at', 'deleted_for'
    ];

	
	protected $table  = 'card_recipients';
}
