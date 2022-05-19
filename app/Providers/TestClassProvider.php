<?php

namespace App\Providers;

use App\classes\TestClass;
use Illuminate\Support\ServiceProvider;

class TestClassProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('TestClass', function () {
            return new TestClass();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
