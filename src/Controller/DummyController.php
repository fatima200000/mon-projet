<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DummyController extends AbstractController
{
    #[Route('/dummy', name: 'app_dummy')]
    public function index(): Response
    {
        $text ="Hello this is home !";
        $tabYear = [2020,2021,2022,2023];
        return $this->render('dummy/index.html.twig', [
            'controller_name' => 'DummyController',
            "text"=> $text,
            "years"=>$tabYear
        ]);
    }
}
