<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card_recipients_model extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'web_user_id',
        'card_id',
        'prefix',
        'recipient_name',
        'mobile_no',
        'active',
    ];


    protected $table = 'card_recipients';

    public function card()
    {
        return $this->belongsTo(cards_model::class, 'card_id');
    }
}
