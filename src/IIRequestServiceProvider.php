<?php

namespace Immersioninteractive\GenericRequest;

use Illuminate\Support\ServiceProvider;

class IIRequestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(IIRequest::class, function () {
            return new IIRequest();
        });
        $this->app->alias(IIRequest::class, 'IIRequest');
    }
}
