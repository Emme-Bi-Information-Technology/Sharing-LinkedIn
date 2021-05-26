<?php

namespace EmmeBi\SharingLinkedin;

use Illuminate\Support\ServiceProvider;

class SharingLinkedinServiceProvider extends ServiceProvider
{
    protected $redirect_uri;
    protected $client_id;
    protected $client_secret;

    public function boot()
    {
        $this->publishes([__DIR__.'/config/sharing-linkedin.php' => config_path('sharing-linkedin.php')], 'sharing-linkedin');

        $this->redirect_uri = config('sharing-linkedin.redirect_uri');
        $this->client_id = config('sharing-linkedin.client_id');
        $this->client_secret = config('sharing-linkedin.client_secret');
    }

    public function register()
    {
        $this->app->singleton(SharingLinkedin::class, function () {
            return new SharingLinkedin($this->redirect_uri, $this->client_id, $this->client_secret);
        });
    }
}
