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

        $this->mapParentalRoutes();

        $this->mapOrganizationRoutes();

        $this->mapCoachRoutes();

        $this->mapPlayerRoutes();

        $this->mapAdminRoutes();

        //
    }

    /**
     * Define the "admin" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::group([
            'middleware' => ['web', 'admin', 'auth:admin'],
            'prefix' => 'admin',
            'as' => 'admin.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/admin.php');
        });
    }

    /**
     * Define the "player" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapPlayerRoutes()
    {
        Route::group([
            'middleware' => ['web', 'player', 'auth:player'],
            'prefix' => 'player',
            'as' => 'player.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/player.php');
        });
    }

    /**
     * Define the "coach" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapCoachRoutes()
    {
        Route::group([
            'middleware' => ['web', 'coach', 'auth:coach'],
            'prefix' => 'coach',
            'as' => 'coach.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/coach.php');
        });
    }

    /**
     * Define the "organization" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapOrganizationRoutes()
    {
        Route::group([
            'middleware' => ['web', 'organization', 'auth:organization'],
            'prefix' => 'organization',
            'as' => 'organization.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/organization.php');
        });
    }

    /**
     * Define the "parental" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapParentalRoutes()
    {
        Route::group([
            'middleware' => ['web', 'parental', 'auth:parental'],
            'prefix' => 'parental',
            'as' => 'parental.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/parental.php');
        });
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
}
