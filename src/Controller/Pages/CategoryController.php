<?php

namespace App\Controller\Pages;

use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    #[Route('/cours/{slug}', name: 'app_category_index')]
    public function index(CategoryRepository $category, string $slug): Response
    {
        return $this->render('pages/list_category.html.twig', [
            'categories' => $category->findBy(['slug' => $slug])
        ]);
    }

    #[Route('/cours/{category}/{slug}', name: 'app_category_list')]
    public function list(CategoryRepository $categories, string $category, string $slug): Response
    {
        return $this->render('pages/list-sous-caterogy.html.twig', [
            'categories' => $categories->findBy(['slug' => $slug])
        ]);
    }
}