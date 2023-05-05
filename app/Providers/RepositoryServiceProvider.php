<?php

namespace App\Providers;

use App\Repositories\Contracts\{
    TopicRepository,
};
use App\Repositories\Eloquent\{
    EloquentTopicRepository
};
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(TopicRepository::class, EloquentTopicRepository::class);
    }
}
