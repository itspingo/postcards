<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions_model extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'user_id',
        'web_user_id',
        'feature',
        'stamp_type',
        'tokens',
        'purchase_trans_id',
        'base_lang',
        'card_id',
        'recipient_id',
        'ticket_type_id',
        'active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $table = 'transactions';



    public function card_recipients()
    {
        return $this->hasMany(card_recipients_model::class, 'transaction_id');
    }

}
