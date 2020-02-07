<?php

namespace App\Repositories;

use App\Repositories\Contracts\MoviesRepository;
use App\Services\TheMoviedb;

class TheMoviesDBRepository implements MoviesRepository
{
    public function getAll (): array
    {
        $theMovieDB = app(TheMoviedb::class);
        $data = $theMovieDB->getAll();
        return $data['results'];
    }

    public function find (int $id): array
    {
        return [];
    }
}
