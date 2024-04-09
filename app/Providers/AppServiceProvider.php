<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Facades\Schema; 
// use Illuminate\Support\Facades\Validator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Validator::extend('mobile_number', function ($attribute, $value, $parameters, $validator) {
        // Define your custom validation logic for mobile numbers here
        // For example, you might use regular expressions to validate the format
        // Return true if the validation passes, false otherwise
        // });
        // Schema::defaultStringLength(191);
    }
}
