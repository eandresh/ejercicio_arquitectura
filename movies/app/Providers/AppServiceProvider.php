<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\MoviesRepository;
use App\Repositories\Eloquent\EloquentMoviesRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MoviesRepository::class, EloquentMoviesRepository::class);
    }
}
