<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [
            'stripe/*',
            'http://example.com/foo/bar',
            'http://example.com/foo/*',
        ]);
        $middleware->validateCsrfTokens(['/estudiante']); //quitar en producción
        $middleware->validateCsrfTokens(['/categoria']); //quitar en producción
        $middleware->validateCsrfTokens(['/certificado']); //quitar en producción
        $middleware->validateCsrfTokens(['/inscripcion']); //quitar en producción
        $middleware->validateCsrfTokens(['/newalumno']); //quitar en producción

        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
