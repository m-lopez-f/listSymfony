<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListHeroes extends AbstractController
{
    public function list()
    {
        return $this->render('base.html.twig');
    }
}