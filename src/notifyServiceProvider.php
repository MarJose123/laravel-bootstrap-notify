<?php

namespace Marjose\notify;

use Illuminate\Support\Facades\Blade;
use Marjose\notify\Commands\notifyCommand;
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
            ->hasViewComponents('notify-messages', NotifyComponent::class)
            ->hasCommand(notifyCommand::class);
    }

    public function registeringPackage(): void
    {
        $this->app->bind('notify', function ($app) {
            return new Notify();
        });

        Blade::directive('notifyJs', function () {
            return '<?php echo notifyJs(); ?>';
        });
    }
}
