<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AmmunitionsTypeController extends AbstractController
{
    #[Route('/ammunitions/type', name: 'app_ammunitions_type')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/AmmunitionsTypeController.php',
        ]);
    }
}
