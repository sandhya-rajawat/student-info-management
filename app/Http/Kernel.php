<?php


namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // other code...

    protected $routeMiddleware = [
        // your other middleware...
        'checkLogin' => \App\Http\Middleware\CheckLogin::class,
    ];
}
