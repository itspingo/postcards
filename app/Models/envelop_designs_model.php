<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class envelop_designs_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'id','user_id','web_user_id','title','short_desc','main_image','active',
    ];

    
    public function design_parts()
    {
        return $this->hasMany(envelop_design_parts_model::class, 'envelop_design_id','id');
    }
	
	protected $table  = 'envelop_designs';
}
