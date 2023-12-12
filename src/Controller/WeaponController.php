<?php

namespace App\Controller;

use App\Repository\WeaponRepository;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class WeaponController extends AbstractController
{
    #[Route('/weapons', name: 'app_weapons')]
    public function index(WeaponRepository $weaponRepository): Response
    {
        $weapons = $weaponRepository->findAll();

        return $this->render('weapon/weapons.html.twig', [
            'weapons' => $weapons,
        ]);
    }

    #[Route('/weapons/category-a', name: 'app_weapons_category_a')]
    public function weaponsCategoryA(WeaponRepository $weaponRepository): Response
    {
        $weapons = $weaponRepository->findByCategory(1);

        return $this->render('weapon/weapons.html.twig', [
            'weapons' => $weapons,
        ]);
    }

    #[Route('/weapons/category-b', name: 'app_weapons_category_b')]
    public function weaponsCategoryB(WeaponRepository $weaponRepository): Response
    {
        $weapons = $weaponRepository->findByCategory(2);

        return $this->render('weapon/weapons.html.twig', [
            'weapons' => $weapons,
        ]);
    }

    #[Route('/weapons/category-c', name: 'app_weapons_category_c')]
    public function weaponsCategoryC(WeaponRepository $weaponRepository): Response
    {
        $weapons = $weaponRepository->findByCategory(3);

        return $this->render('weapon/weapons.html.twig', [
            'weapons' => $weapons,
        ]);
    }

    #[Route('/weapons/category-d', name: 'app_weapons_category_d')]
    public function weaponsCategoryD(WeaponRepository $weaponRepository): Response
    {
        $weapons = $weaponRepository->findByCategory(4);

        return $this->render('weapon/weapons.html.twig', [
            'weapons' => $weapons,
        ]);
    }

    #[Route('/weapons/search', name: 'app_weapons_search')]
    public function searchFormResult(Request $request, WeaponRepository $weaponRepository): Response
    {
        $category = $request->request->get('category');
        $weaponName = $request->request->get('weaponName');
        $minPrice = $request->request->get('minPrice');
        $maxPrice = $request->request->get('maxPrice');

        $weapons = $weaponRepository->findBySearchCriteria($category, $weaponName, $minPrice, $maxPrice);

        return $this->render('weapon/search_results.html.twig', [
            'weapons' => $weapons,
        ]);
    }

    #[Route('/weapons/search-form', name: 'app_weapons_search_form')]
    public function searchForm(): Response
    {
        return $this->render('weapon/search_form.html.twig');
    }
}
