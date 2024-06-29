<?php

namespace Visiarch\AtsrServiceTrait;

use Illuminate\Support\ServiceProvider;
use Visiarch\ActionServiceTrait\ActionServiceProvider;
use Visiarch\RepositoryServiceTrait\RepositoryServiceProvider;
use Visiarch\ServiceServiceTrait\ServiceServiceProvider;
use Visiarch\TraitServiceTrait\TraitServiceProvider;

/**
 * Service provider for the ATSR package.
 *
 * This service provider registers the necessary packages for the ATSR package.
 */
class ATSRServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Register the packages
        $this->app->register(ActionServiceProvider::class);
        $this->app->register(TraitServiceProvider::class);
        $this->app->register(ServiceServiceProvider::class);
        $this->app->register(RepositoryServiceProvider::class);
    }

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        // Package boot logic if needed
    }
}
