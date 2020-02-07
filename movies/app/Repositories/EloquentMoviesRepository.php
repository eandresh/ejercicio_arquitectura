<?php


namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\MoviesRepository;
use Movie;

class EloquentMoviesRepository implements MoviesRepository
{
    public function find (int $id): array
    {
        $movie = Movie::findOrFail($id);
        return $movie->toArray();
    }

    public function getAll (): array
    {
        $movies = Movie::all();
        return $movies->toArray();
    }
}
