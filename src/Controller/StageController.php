<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StageController extends AbstractController
{
    #[Route('/stage', name: 'app_stage')]
    public function voirTout(): Response
    {
        return $this->render('stage/liste.html.twig', [
            'controller_name' => 'StageController',
        ]);
    }
}
