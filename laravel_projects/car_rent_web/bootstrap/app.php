<?php

use App\Http\Middleware\AAfterLogin;
use App\Http\Middleware\ABeforeLogin;
use App\Http\Middleware\uafterlogin;
use App\Http\Middleware\ubeforelogin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
       $middleware->alias([
          'admin_after_login'=>AAfterLogin::class,
          'admin_before_login'=>ABeforeLogin::class,
           'user_before_login'=>ubeforelogin::class,
            'user_before_login'=>uafterlogin::class,
       ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
