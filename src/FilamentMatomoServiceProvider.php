<?php

namespace MarcoGermani87\FilamentMatomo;

use Illuminate\Contracts\View\View;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentMatomoServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-matomo';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-matomo')
            ->hasConfigFile()
            ->hasViews()
            ->hasViewComposer('filament-cookie-consent::index', function (View $view) {
                $config = config('filament-matomo');
                $canShow = $config['enabled'] &&
                    ! empty($config['base_url']) &&
                    ! empty($config['tracker_filename']) &&
                    ! empty($config['site_id']);
                $view->with(compact(
                    'config',
                    'canShow',
                ));
            });
    }
}
