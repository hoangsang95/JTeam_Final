<?php

namespace GroupJ\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
		include __DIR__ . '/routes.php';
        $this->app->make('GroupJ\Admin\Controller\AdminController');

    }
}
