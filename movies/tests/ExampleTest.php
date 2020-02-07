<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\Repositories\Contracts\MoviesRepository;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    /**
     * @test
     */
    public function getAllRandomMovies()
    {
        $repo = app(MoviesRepository::class);
        $data = $repo->getAll();
        $this->assertIsIterable($data);
        $this->assertNotEmpty($data);
    }

    /**
     * @test
     */
    public function getMoviesTester()
    {
        $db = app(\App\Services\TheMoviedb::class);
        $result = $db->getAll();
        dd($result);
    }
}
