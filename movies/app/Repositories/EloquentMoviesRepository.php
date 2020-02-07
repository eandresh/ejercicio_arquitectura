<?php


namespace App\Repositories;
use App\Repositories\Contracts\MoviesRepository;
use App\Models\Movie;

class EloquentMoviesRepository implements MoviesRepository
{
    public function find (int $id): array
    {
        $movie = Movie::findOrFail($id);
        return $movie->toArray();
    }

    public function getAll (): array
    {
        $movies = Movie::all()->random(20);
        return $movies->toArray();
    }
}
