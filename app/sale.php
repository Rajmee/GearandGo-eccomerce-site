<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'product_id',
        'order_status',
        'price',
        'bought_price',
        'payment_status'
    ];

    public function sales()
    {

    }
}
