<?php

namespace App\Providers;

use App\State\MintProvider;
use ApiPlatform\State\ProviderInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

		$this->app->tag(MintProvider::class, ProviderInterface::class);
    }
}
