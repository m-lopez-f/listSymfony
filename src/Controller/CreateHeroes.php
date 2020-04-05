<?php

namespace App\Controller;

use App\Service\ConsumeApi;
use Symfony\Component\HttpFoundation\Response;

class CreateHeroes
{

    public function __construct()
    {
    }

    public function get(ConsumeApi $consumeApi)
    {
        return Response::create(
            $consumeApi->getResults(),
            Response::HTTP_OK,
            ['content-type' => 'application/json']
        );
    }
}