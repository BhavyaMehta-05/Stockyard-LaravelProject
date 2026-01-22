<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Auth\AuthenticationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {

        // ✅ Show message when unauthenticated user accesses protected routes
        $exceptions->render(function (
            AuthenticationException $e,
            $request
        ) {
            return redirect()->route('login')
                ->with('error', 'Authenticated users only. Please login first.');
        });

    })
    ->create();
