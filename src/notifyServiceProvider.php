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
            ->hasMigration('create_laravel-bootstrap-notify_table')
            ->hasCommand(notifyCommand::class);
    }
}
