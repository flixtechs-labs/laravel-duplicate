<?php

namespace Flixtechs\Duplicate;

use Flixtechs\Duplicate\Commands\DuplicateCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DuplicateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-duplicate')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-duplicate_table')
            ->hasCommand(DuplicateCommand::class);
    }
}
