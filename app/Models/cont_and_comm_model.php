<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cont_and_comm_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'user_id','web_user_id','card_id','comm_type','comm_title','comm_tel','comm_mobile','comm_sms_no','comm_sms_text','comm_email','comm_whatsapp_no','comm_whatsapp_text','ticket_type_id','active',
    ];

	
	protected $table  = 'widget_contact_comm';
}
