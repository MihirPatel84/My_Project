<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stripeModel extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'stripe_history';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'amount',
        'currency_code',
        'stripe_card_id',
        'card_last_four',
        'card_type',
        'stripe_charge_id',
        'stripe_response',
        'received_date',
        'created_at'
    ];
}
