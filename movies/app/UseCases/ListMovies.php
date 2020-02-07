<?php


namespace App\UseCases;

use App\Repositories\Contracts\MoviesRepository;

class ListMovies
{

    /**
     * @var MoviesRepository
     */
    private $moviesRepo;

    public function __construct(MoviesRepository $moviesRepo)
    {
        $this->moviesRepo = $moviesRepo;
    }

    /**
     * Retorna el listado completo de peliculas
     * @return array
     */
    public function getListMovies(): array
    {
        return $this->moviesRepo->getAll();
    }

}
