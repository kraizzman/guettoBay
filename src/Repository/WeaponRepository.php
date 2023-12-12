<?php

namespace App\Repository;

use App\Entity\Weapon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Weapon>
 *
 * @method Weapon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Weapon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Weapon[]    findAll()
 * @method Weapon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WeaponRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Weapon::class);
    }

    public function findByCategory($categoryId)
    {
        return $this->createQueryBuilder('w')
            ->innerJoin('w.category', 'c')
            ->select('w.name', 'w.picture', 'w.description', 'w.inStock', 'w.price')
            ->andWhere('c.id = :categoryId')
            ->setParameter('categoryId', $categoryId)
            ->getQuery()
            ->getResult();
    }

    public function findBySearchCriteria($category = null, $name = null, $minPrice = null, $maxPrice = null)
    {
        $qb = $this->createQueryBuilder('w');

        if ($category !== null) {
            $categoryId = $this->getCategoryIdFromLetter($category);
            if ($categoryId !== null) {
                $qb->andWhere('w.category = :categoryId')
                    ->setParameter('categoryId', $categoryId);
            }
        }
        if ($name !== null) {
            $qb->andWhere('w.name = :name')
                ->setParameter('name', $name);
        }
        if ($minPrice !== null) {
            $qb->andWhere('w.price >= :minPrice')
                ->setParameter('minPrice', $minPrice);
        }
        if ($maxPrice !== null) {
            $qb->andWhere('w.price <= :maxPrice')
                ->setParameter('maxPrice', $maxPrice);
        }

        return $qb->getQuery()->getResult();
    }


    private function getCategoryIdFromLetter($letter): ?int
    {
        $categoryMap = [
            'A' => 1,
            'B' => 2,
            'C' => 3,
            'D' => 4,
        ];

        return $categoryMap[$letter] ?? null;
    }
}
