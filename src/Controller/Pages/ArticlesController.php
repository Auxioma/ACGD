<?php

namespace App\Controller\Pages;

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
}     