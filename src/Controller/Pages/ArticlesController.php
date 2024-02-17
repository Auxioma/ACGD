<?php

namespace App\Controller\Pages;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\Cache;

class ArticlesController extends AbstractController
{
    #[Route('/articles/{slug}', name: 'app_cours_index')]
    #[IsGranted('ROLE_DWWM', message: 'No access! Get out!', statusCode: 403 )]
    #[Cache(public: true, maxage: 3600, mustRevalidate: true)]
    public function index(CategoryRepository $category, $slug): Response
    {
        return $this->render('pages/cours.html.twig', [
            'articles' => $category->findOneBy(['slug' => $slug])
        ]);
    }

    #[Route('/articles/{slug}/{chapitre}', name: 'app_cours_chapitre')]
    #[IsGranted('ROLE_DWWM', message: 'No access! Get out!', statusCode: 403 )]
    #[Cache(public: true, maxage: 3600, mustRevalidate: true)]
    public function chapitre($chapitre, CategoryRepository $category): Response
    {
        return $this->render('pages/chapitre.html.twig', [
            'articles' => $category->findOneBy(['slug' => $chapitre]),
            
        ]);
    }

}     