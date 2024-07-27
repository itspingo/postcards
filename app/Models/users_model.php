<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','name','email','email_verified_at','validation_code','password','active','account_type','photo','country','state','city','street_address','zip_post_code','phone','agree_terms_condition',
    ];

	
	protected $table  = 'users';
}
