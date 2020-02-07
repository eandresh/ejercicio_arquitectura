<?php


namespace App\UseCases;

class ListMovies
{

    /**
     * @var
     */
    private $moviesRepo;

    public function __construct($moviesRepo)
    {
        $this->moviesRepo = $moviesRepo;
    }

    public function getListMovies(): array
    {

        return [];
    }

}
