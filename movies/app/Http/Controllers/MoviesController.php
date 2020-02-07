<?php

namespace App\Http\Controllers;

use App\UseCases\GetMovie;
use App\UseCases\ListMovies;

class MoviesController extends Controller
{
    /**
     * @param ListMovies $listMoviesUC
     * @return \Illuminate\Http\JsonResponse
     */
    public function all(ListMovies $listMoviesUC)
    {
        $data = $listMoviesUC->getListMovies();
        return $this->response($data);
    }

    /**
     * @param GetMovie $getMovieUC
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMovie(GetMovie $getMovieUC, $id)
    {
        $data = $getMovieUC->getMovie($id);

        return $this->response($data);
    }

    /**
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    private function response(array $data)
    {
        return response()->json([

            'data' => $data
        ]);
    }
}
