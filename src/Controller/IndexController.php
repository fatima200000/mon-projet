<?php

namespace App\Controller;

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
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return new Response(content: "hello World123!");
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return new Response(content: "willkommen!");
    }
    #[Route('/savoirplus', name: 'app_savoirplus')]
    public function savoirplus(): Response
    {
        return new Response(content: "plus !");
    }
}
