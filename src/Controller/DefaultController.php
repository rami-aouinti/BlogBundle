<?php

namespace Blog\CustomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/custom', name: 'custom_index')]
    public function index(): Response
    {
        return new Response('Welcome to Custom Bundle!');
    }
}
