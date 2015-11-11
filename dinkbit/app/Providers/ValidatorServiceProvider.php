<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Validator;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //validator custom
       $this->app['validator']->extend('alpha_spaces', function($attribute, $value,$parameters)
            {
                return preg_match('/^([-a-z0-9_-\s])+$/i', $value);
            });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}