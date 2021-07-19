<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment_rating extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'comment_contents',
        'rating_points',
        'status',
        'order_id'
    ];

    public function order() {
        return $this->belongsTo('App\Order');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function product() {
        return $this->belongsTo('App\product', 'product_id');
    }
}
