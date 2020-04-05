<?php


namespace App\Service;


use GuzzleHttp\Client;

class ConsumeApi
{
    private $client;
    private $body;
    private $response;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://swapi.co/api/people']);
    }

    private function consume()
    {
        $this->response = $this->client->request('GET');
    }

    public function getResults()
    {
        $this->consume();
        if ($this->response) {
            $this->body = $this->response->getBody();
            if ($this->body) {
                return $this->body->getContents();
            }
        }
    }
    private function transformData($dataBody)
    {
        return json_decode($dataBody,true);
    }
}