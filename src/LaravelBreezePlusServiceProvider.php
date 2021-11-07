<?php

namespace Rlunardelli\LaravelBreezePlus;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class LaravelBreezePlusServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     *
     */
    public function register(): void
    {
        //
    }

    /**
     * Boostrap any application services.
     *
     */
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Console\InstallCommand::class,
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     */
    public function provides(): array
    {
        return [Console\InstallCommand::class];
    }
}
