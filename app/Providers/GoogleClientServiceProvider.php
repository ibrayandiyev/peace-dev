<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GoogleClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('google', function ($app) {
            $client = new \Google_Client([
                'ioFileCache_directory' => config('google.tmp')
            ]);
            $client->setApprovalPrompt(config('google.approval_prompt'));
            $client->setAccessType(config('google.access_type'));
            $client->setClientId(config('google.client_id'));
            $client->setClientSecret(config('google.client_secret'));
            $client->setRedirectUri(config('google.redirect_uri'));
            $client->addScope(config('google.scopes'));
        
            return $client;
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
