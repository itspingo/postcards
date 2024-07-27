<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class envelop_design_parts_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','envelop_design_id','thumbnail','front_image','back_image','flap_image','active',
    ];

	
	protected $table  = 'envelop_design_parts';
}
