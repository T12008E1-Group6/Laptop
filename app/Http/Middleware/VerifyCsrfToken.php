<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://localhost:8000/checkout-stripe',
        'http://localhost:8000/orders',
        'http://localhost:8000/comment-ratings',
        'http://localhost:8000/admin-orders/update-orders-status',
        'http://localhost:8000/admin-update-comment-rating-status'
    ];
}
