<?php

namespace App\Controller;

use App\Repository\FeatureRepository;
use App\Repository\ProjectRepository;
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

    #[Route('/profile/developer', name: 'profile_developer')]
    public function developer(): Response
    {
        return $this->render('project/developer.html.twig');
    }

    #[Route('/project', name: 'project')]
    public function project(): Response
    {
        return $this->render('project/project.html.twig');
    }

    #[Route('/project/type', name: 'project_type')]
    public function projectType(): Response
    {
        return $this->render('project/project_type.html.twig');

    }

    #[Route('/project/list', name: 'project_list')]
    public function list(): Response
    {
        return $this->render('project/list.html.twig');
    }

    #[Route('/feature', name: 'feature')]
    public function language(): Response
    {
        return $this->render('feature/language.html.twig');
    }

    #[Route('/feature/{language}', name: 'feature_language')]
    public function feature(FeatureRepository $featureRepository, string $language): Response
    {
        if($language == 'all') {
            $features = $featureRepository->findAll();
        } else {
            $features = $featureRepository->findBy(['language' => $language]);
        }
        
        return $this->render('feature/featuresList.html.twig', ['features' => $features]);
    }
}
