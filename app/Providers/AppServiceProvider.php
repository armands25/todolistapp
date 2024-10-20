<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\TasksInterface;
use App\Repositories\TasksRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(TasksInterface::class, TasksRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
