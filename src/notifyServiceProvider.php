<?php

namespace Marjose\notify;

use Illuminate\Support\Facades\Blade;
use Marjose\notify\Commands\notifyCommand;
use Marjose\notify\Storage\Session;
use Marjose\notify\View\Components\Alert;
use Marjose\notify\View\Components\NotifyComponent;
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
            ->hasConfigFile('notify')
            ->hasAssets()
            ->hasViewComponents('notify', Alert::class)
            ;
    }

    public function registeringPackage(): void
    {
        $this->app->singleton('notify', function ($app) {
            return $app->make(notify::class);
        });

        Blade::directive('notifyCss', function () {
            return '<link rel="stylesheet" type="text/css" href="'.asset('vendor/bootstrap-notify/css/app.css').'"/>';
        });

        Blade::directive('notifyJs', function () {
            return '<script type="text/javascript" src="'.asset('vendor/bootstrap-notify/js/notify.js').'"></script>';
        });
    }

}
