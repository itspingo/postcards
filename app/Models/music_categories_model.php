<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class music_categories_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','music_category','active',
    ];

    public function music_files(){
        return $this->hasMany(music_files_model::class, 'music_category_id','id');
    }
	
	protected $table  = 'music_categories';
}
