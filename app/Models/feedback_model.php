<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class feedback_model extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'feedbacks';
    protected $fillable = [
        'web_user_id',
        'item_id',
        'full_name',
        'email_address',
        'feedback',
        'rating',
        'base_lang',
        'active',
    ];
}
