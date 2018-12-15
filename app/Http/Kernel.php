<?php

namespace App\Http;

use App\Acceso;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \Styde\Html\Alert\Middleware::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],

        'consulta' => [
            'web',
            'auth',
            'is_consulta',
        ],

        'docente' => [
            'web',
            'auth',
            'is_consulta',
            'is_docente',
        ],

        'responsable' => [
            'web',
            'auth',
            'is_consulta',
            'is_docente',
            'is_responsable',
        ],

        'admin' => [
            'web',
            'auth',
            'is_consulta',
            'is_docente',
            'is_responsable',
            'is_admin'
        ], 

        'master' => [
            'web',
            'auth',
            'is_consulta',
            'is_docente',
            'is_responsable',
            'is_admin',
            'is_master'
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'is_consulta' => \App\Http\Middleware\ConsultaMiddleware::class,
        'is_docente' => \App\Http\Middleware\DocenteMiddleware::class,
        'is_responsable' => \App\Http\Middleware\ResponsableMiddleware::class,
        'is_admin' => \App\Http\Middleware\AdminMiddleware::class,
        'is_master' => \App\Http\Middleware\MasterMiddleware::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'Access' => Styde\Html\Facades\Access::class,
    ];
}
