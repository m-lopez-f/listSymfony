<?php


namespace App\Controller;


use App\Entity\Heroes;

class HeroesHandler
{
    public function handle($result)
    {
        $heroesElements = $result->results;

        return $heroesElements;
    }
}