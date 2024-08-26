<?php

namespace Stormforcejj\Seatminingapi;

use Seat\Services\AbstractSeatPlugin;

class MiningApiServiceProvider extends AbstractSeatPlugin
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->add_routes();
    }

    /**
     * Include the routes.
     */
    public function add_routes()
    {
        if (! $this->app->routesAreCached()) {
            include __DIR__ . '/Http/routes.php';
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
//    public function register()
//    {
//        $this->mergeConfigFrom(
//            __DIR__ . '/Config/fitting.config.php', 'fitting.config');
//
//        $this->mergeConfigFrom(
//            __DIR__ . '/Config/fitting.sidebar.php',
//            'package.sidebar'
//        );
//
//        $this->registerPermissions(
//            __DIR__ . '/Config/Permissions/fitting.permissions.php', 'fitting');
//    }

    /**
     * Return the plugin public name as it should be displayed into settings.
     *
     * @example SeAT Web
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Mining API';
    }


    /**
     * Return the plugin repository address.
     *
     * @example https://github.com/eveseat/web
     *
     * @return string
     */
    public function getPackageRepositoryUrl(): string
    {
        return 'https://github.com/stormforcejj/seat-mining-api';
    }

    /**
     * Return the plugin technical name as published on package manager.
     *
     * @example web
     *
     * @return string
     */
    public function getPackagistPackageName(): string
    {
        return 'seat-mining-api';
    }

    /**
     * Return the plugin vendor tag as published on package manager.
     *
     * @example eveseat
     *
     * @return string
     */
    public function getPackagistVendorName(): string
    {
        return 'stormforcejj';
    }
}