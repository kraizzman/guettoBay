<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(): Response
    {
        $listWeapons = ['arme1','arme2','arme3','arme4','arme5'];

        return $this->render('category/index.html.twig',[
            'controller_name' => 'CategoryController',
            'listWeapons' => $listWeapons
        ]);
    }
}
