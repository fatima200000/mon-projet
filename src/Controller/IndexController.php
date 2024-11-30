<?php

namespace App\Controller;

use Doctrine\DBAL\Schema\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return new Response(content: "hello World!");
    }
    #[Route('/about/{nom}', name: 'app_about')]
    public function about( string $nom= "Anonyme"): Response
    {
        return new Response(content: "hallo alles 123!" .$nom);
    }
    #[Route('/contact/{entier}', name: 'app_contact',requirements:['entier' =>'\d+'])]
    public function contact(string $entier = "1999"): Response
    {
        return new Response(content: "Willkommen!" .$entier);
    }
    #[Route('/savoirplus', name: 'app_savoirplus')]
    public function savoirplus(): Response
    {
        return new Response(content: "plus !");
    }
    #[Route('/dummy', name: 'app_dummy')]
public function dummy(): Response
{
    $text = "hello is home";
    $tabyear = [2020, 2021, 2022, 2023];
    
    return $this->render('dummy/dummy.html.twig', [
        'text' => $text,
        'years' => $tabyear,
    ]);

    }
}
