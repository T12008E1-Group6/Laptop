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
        'status'
    ];
}
