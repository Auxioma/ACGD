<?php

namespace App\Controller;

use App\Services\PoleEmploiServices;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/h', name: 'app_home')]
    #[IsGranted('ROLE_DWWM', message: 'No access! Get out!', statusCode: 403 )]
    public function index(PoleEmploiServices $job): Response
    {
        $ResultJob = $job->get($query = '');
        $jobs = json_decode($ResultJob);
        
        return $this->render('home/index.html.twig', [
            'jobs' => $jobs
        ]);
    }
}
