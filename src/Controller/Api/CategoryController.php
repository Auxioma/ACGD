<?php

namespace App\Controller\Api;

use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CategoryController extends AbstractController
{
    public function __construct(
        private CategoryRepository $categoryRepository
    ) {}

    public function Category(): Response
    {
        return $this->render('_partials/header.html.twig', [
            'categories' => $this->categoryRepository->findBy(['roles' => $this->getUser()->getRoles()[0], 'parent' => null, 'IsOnLine' => true])
        ]);
    }
}