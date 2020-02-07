<?php

namespace App\Providers;

use App\UseCases\GetMovie;
use App\UseCases\ListMovies;
use Illuminate\Support\ServiceProvider;
use function foo\func;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ListMovies::class, function(){
            return new ListMovies('');
        });

        $this->app->bind(GetMovie::class, function (){
            return new GetMovie();
        });
    }
}
