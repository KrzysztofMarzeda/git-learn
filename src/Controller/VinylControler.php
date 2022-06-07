<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylControler
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('działa');
    }
    #[Route('/browse/{slug}')]
    public function browse($slug = null): Response
    {
        return new Response('działa browse');
    }
}