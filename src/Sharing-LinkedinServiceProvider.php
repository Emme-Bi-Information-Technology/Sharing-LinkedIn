<?php

namespace Emme-Bi\Sharing-Linkedin;

use Illuminate\Support\ServiceProvider;

class LinkedinShareServiceProvider extends ServiceProvider
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
        $this->app->singleton(Sharing-Linkedin::class, function () {
            return new Sharing-Linkedin($this->redirect_uri, $this->client_id, $this->client_secret);
        });
    }
}
