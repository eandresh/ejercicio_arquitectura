<?php

namespace App\Services;
use GuzzleHttp\Client;

class TheMoviedb
{
    private $url;
    private $apiKey;
    private $client;

    public function __construct ()
    {
        $this->url = env('THEMOVIESDBURL');
        $this->apiKey = env('THEMOVIESDBKEY');
        $this->client = new Client();
    }

    public function getAll(): array
    {
        $response = $this->client->request('GET', $this->url.$this->apiKey);
        $result = $response->getBody()->getContents();
        return json_decode($result, true);
    }
}
