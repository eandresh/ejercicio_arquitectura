<?php

namespace App\Repositories\Contracts;


interface MoviesRepository
{
    /**
     * @return array
     */
    public function getAll(): array;

    /**
     * @param int $id
     * @return array
     */
    public function find(int $id): array;
}
