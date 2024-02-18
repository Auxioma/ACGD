<?php

namespace App\Controller\Api;

use App\Services\PoleEmploiServices;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StageController extends AbstractController
{
    public function __construct() {}

    #[Route('/h/stage', name: 'app_stage')]
    #[IsGranted('ROLE_DWWM', message: 'No access! Get out!', statusCode: 403 )]
    public function stage(PoleEmploiServices $job): Response
    {
        $ResultJob = $job->get($query = '');
        $jobs = json_decode($ResultJob);

        return $this->render('stage/stage.html.twig', [
            'jobs' => $jobs
        ]);
    }
}