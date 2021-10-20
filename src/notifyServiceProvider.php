<?php

namespace Marjose\notify;

use Illuminate\Support\Facades\Blade;
use Marjose\notify\View\Components\Alert;
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
            ->name('notify')
            ->hasConfigFile('notify')
            ->hasAssets()
            ->hasViews()
            ->hasViewComponent('notify', Alert::class)
            ;
    }

    public function registeringPackage(): void
    {
        $this->app->singleton('notify', function ($app) {
            return $app->make(notify::class);
        });

        Blade::directive('notifyCss', function () {
            return '<?php echo notifyCss() ?>';
        });

        Blade::directive('notifyJs', function () {
            return '<?php echo notifyJs() ?>';
        });
    }
}
