<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GoogleSheetsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('googlesheets', function ($app) {
            // Resolve Google client
            $client = app()->make('google');

            // Attach services before authorizing
            $service = new \Google_Service_Sheets($client);

            if (config()->has('google.refresh_token')) {
                $client->refreshToken(config('google.refresh_token'));
            } else {
                abort(500, 'Do setup the Google Sheets service.');
            }
        
            return $service;
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
