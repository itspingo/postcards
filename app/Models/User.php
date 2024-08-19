<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'client_id',
        'user_id',
        'web_user_id',
        'name',
        'email',
        'google_id',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'active',
        'account_type',
        'webside',
        'username',
        'country',
        'state',
        'city',
        'street_address',
        'zip_post_code',
        'phone',
        'bank_details',
        'paypal_email_id',
        'worldpay_id',
        'nochex_email_id',
        '2checkout_account_number',
        'skrill_email_address',
        'skrill_seceret_word',
        'paymate_username',
        'sales_invoice_contents',
        'subscribe_newsletter',
        'agree_terms_condition',
        'validation_code',
        'browser_agent',
        'login_date_time',
        'login_ip'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
