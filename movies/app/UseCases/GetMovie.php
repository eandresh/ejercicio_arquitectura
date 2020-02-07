<?php


namespace App\UseCases;


use App\Repositories\Contracts\MoviesRepository;

class GetMovie
{

    /**
     * @var MoviesRepository
     */
    private $moviesRepository;

    public function __construct(MoviesRepository $moviesRepository)
    {
        $this->moviesRepository = $moviesRepository;
    }


    public function getMovie(int $id): array
    {

        return $this->moviesRepository->find($id);
    }

}
