<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapConsultaRoutes();

        $this->mapDocenteRoutes();

        $this->mapResponsableRoutes();
        
        $this->mapAdminRoutes();
        
        $this->mapMasterRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    protected function mapMasterRoutes()
    {
        Route::group([
            'middleware' => 'master',
            'namespace' => $this->namespace,
            'prefix' => 'master',
        ], function ($router) {
            require base_path('routes/master.php');
        });
    }

    protected function mapAdminRoutes()
    {
        Route::group([
            'middleware' => 'admin',
            'namespace' => $this->namespace,
            'prefix' => 'administrador',
        ], function ($router) {
            require base_path('routes/admin.php');
        });
    }

    protected function mapResponsableRoutes()
    {
        Route::group([
            'middleware' => 'responsable',
            'namespace' => $this->namespace,
            'prefix' => 'responsable',
        ], function ($router) {
            require base_path('routes/responsable.php');
        });
    }

    protected function mapDocenteRoutes()
    {
        Route::group([
            'middleware' => 'docente',
            'namespace' => $this->namespace,
            'prefix' => 'docente',
        ], function ($router) {
            require base_path('routes/docente.php');
        });
    }

    protected function mapConsultaRoutes()
    {
        Route::group([
            'middleware' => 'consulta',
            'namespace' => $this->namespace,
            'prefix' => 'consulta',
        ], function ($router) {
            require base_path('routes/consulta.php');
        });
    }

}
