<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('project/index.html.twig');
    }

    #[Route('/profile', name: 'profile')]
    public function profile(): Response
    {
        return $this->render('project/profile.html.twig');
    }
}
