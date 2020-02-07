<?php

namespace App\Providers;

use App\UseCases\GetMovie;
use App\UseCases\ListMovies;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\MoviesRepository;
use App\Repositories\EloquentMoviesRepository;

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

        $this->app->bind(ListMovies::class, function(){
            return new ListMovies(app(MoviesRepository::class));
        });

        $this->app->bind(GetMovie::class, function (){
            return new GetMovie(app(MoviesRepository::class));
        });
    }
}
