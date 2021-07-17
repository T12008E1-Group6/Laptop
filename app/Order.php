<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'cart_info',
        'delivery_info',
        'payment_info',
        'status'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function products() {
        return $this->belongsToMany('App\product', 'order_product', 'order_id', 'product_id');
    }
}
