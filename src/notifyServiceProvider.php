<?php

namespace Marjose\notify;

use Marjose\notify\Commands\notifyCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class notifyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-bootstrap-notify')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(notifyCommand::class);
    }

    public function registeringPackage(): void
    {
        $this->app->bind('notify', function ($app) {
            return new notify();
        });
    }
}
