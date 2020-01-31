<?php

namespace Naugrim\WortmannSoapApi\Provider;

use Illuminate\Support\ServiceProvider;
use Naugrim\WortmannSoapApi\Bridge\Api;
use Naugrim\WortmannSoapApi\Contracts\WortmannSoapApi;

class WortmannSoapApiProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/wortmann-soap-api.php' => config_path('wortmann-soap-api.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/wortmann-soap-api.php',
            'wortmann-soap-api',
        );

        $this->app->singleton(WortmannSoapApi::class, function () {
            return new Api(config('wortmann-soap-api'));
        });
    }
}
