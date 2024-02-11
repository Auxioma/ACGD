<?php

namespace App\Controller\Pages;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticlesController extends AbstractController
{
    #[Route('/articles/{slug}', name: 'app_cours_index')]
    public function index(CategoryRepository $category, $slug): Response
    {
        return $this->render('pages/cours.html.twig', [
            'articles' => $category->findOneBy(['slug' => $slug])
        ]);
    }

    #[Route('/articles/{slug}/{chapitre}', name: 'app_cours_chapitre')]
    public function chapitre($chapitre, CategoryRepository $category): Response
    {
        return $this->render('pages/chapitre.html.twig', [
            'articles' => $category->findOneBy(['slug' => $chapitre]),
            
        ]);
    }

}     