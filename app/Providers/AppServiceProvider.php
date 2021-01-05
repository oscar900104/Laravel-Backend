<?php

namespace App\Providers;

use Citmatel\Support\Environment\Translator;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); //Solved by increasing StringLength
    }

    /**
     * Register any application services.
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Client::class, function ($app) {
            return app('client');
        });

        $this->app->singleton('client', function ($app) {
            return new Client(['base_uri' => $app['config']->get('app')['url'], 'verify' => false]);
        });

        $this->app->singleton(Translator::class, function ($app) {
            return app('lang');
        });

        $this->app->singleton('lang', function ($app) {
            return new Translator();
        });
    }
}
