<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    #[Route('/project', name: 'project')]
    public function index(): Response
    {
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }

    #[Route('/project/list', name: 'project_list')]
    public function list(): Response
    {
        return $this->render('project/list.html.twig');
    }

    #[Route('/project/details/{id}', name: 'details', requirements: ['id' => '\d+'])]
    public function details(): Response
    {
        return $this->render('project/details.html.twig');
    }
}
