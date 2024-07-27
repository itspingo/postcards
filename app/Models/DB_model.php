<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DB_model extends Model
{
    use HasFactory;
	protected $guarded = [];

	protected $fillable = [];	
	protected $table  = '';

    public function setFillable($arFields){
        $this->fillable = $arFields;
    }

    public function setTable($tblname){
        //dd($tblname);
        $this->table = $tblname;
    }

    public function getFillable(){
        return $this->fillable;
    }
    
}
