<?php

namespace MarcoGermani87\FilamentMatomo\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use MarcoGermani87\FilamentMatomo\FilamentMatomoServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MarcoGermani87\\FilamentMatomo\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentMatomoServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_filament-matomo_table.php.stub';
        $migration->up();
        */
    }
}
