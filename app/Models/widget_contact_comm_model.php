<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class widget_contact_comm_model extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'client_id', 'user_id', 'web_user_id', 'card_id', 'comm_type', 'comm_title', 'comm_tel', 'comm_mobile', 'comm_sms_no', 'comm_sms_text', 'comm_email', 'comm_whatsapp_no', 'comm_whatsapp_text', 'base_lang','ticket_type_id', 'active', 'created_at'
    ];

	
	protected $table  = 'widget_contact_comm';
}
