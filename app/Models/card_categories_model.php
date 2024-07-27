<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card_categories_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','cat_image','title','short_descr','long_descr','sound_file_ids','active',
    ];

	
	protected $table  = 'card_categories';
}
