<?php

namespace App\Controller\Pages;

use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    #[Route('/h/cours/{slug}', name: 'app_category_index')]
    #[IsGranted('ROLE_DWWM', message: 'No access! Get out!', statusCode: 403 )]
    public function index(CategoryRepository $category, string $slug): Response
    {
        return $this->render('pages/list_category.html.twig', [
            'categories' => $category->findBy(['slug' => $slug])
        ]);
    }

    #[Route('/h/cours/{category}/{slug}', name: 'app_category_list')]
    #[IsGranted('ROLE_DWWM', message: 'No access! Get out!', statusCode: 403 )]
    public function list(CategoryRepository $categories, string $category, string $slug): Response
    {
        return $this->render('pages/list-sous-caterogy.html.twig', [
            'categories' => $categories->findBy(['slug' => $slug])
        ]);
    }
}