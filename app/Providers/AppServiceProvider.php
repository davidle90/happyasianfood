<?php

namespace App\Providers;

use Davidle90\Settings\app\Models\Settings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('layouts.public.main', function ($view) {

            $settings = Settings::get();

            $info = [
                'monday' => $settings->where('key', 'monday')->first(),
                'tuesday' => $settings->where('key', 'tuesday')->first(),
                'wednesday' => $settings->where('key', 'wednesday')->first(),
                'thursday' => $settings->where('key', 'thursday')->first(),
                'friday' => $settings->where('key', 'friday')->first(),
                'saturday' => $settings->where('key', 'saturday')->first(),
                'sunday' => $settings->where('key', 'sunday')->first(),
                'holidays' => $settings->where('key', 'holidays')->first(),
                'adress' => $settings->where('key', 'adress')->first(),
                'city' => $settings->where('key', 'city')->first(),
                'zip_code' => $settings->where('key', 'zip_code')->first(),
                'phone_number' => $settings->where('key', 'phone_number')->first(),
                'email' => $settings->where('key', 'email')->first(),
            ];

            $view->with([
                'info' => $info
            ]);

        });
    }
}
