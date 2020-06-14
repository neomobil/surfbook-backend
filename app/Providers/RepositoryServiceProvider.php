<?php

namespace App\Providers;

use App\Repository\Eloquent\BaseRepository;
use App\Repository\Eloquent\MenuRepository;
use App\Repository\EloquentRepositoryInterface;
use App\Repository\MenuRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        EloquentRepositoryInterface::class => BaseRepository::class,
        MenuRepositoryInterface::class => MenuRepository::class
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
