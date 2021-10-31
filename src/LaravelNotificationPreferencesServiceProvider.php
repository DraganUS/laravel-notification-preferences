<?php

namespace draganus\LaravelNotificationPreferences;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use draganus\LaravelNotificationPreferences\Commands\LaravelNotificationPreferencesCommand;

class LaravelNotificationPreferencesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-notification-preferences')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-notification-preferences_table')
            ->hasCommand(LaravelNotificationPreferencesCommand::class);
    }
}
