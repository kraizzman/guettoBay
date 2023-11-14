<?php

namespace App\Repository;

use App\Entity\Grenade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Grenade>
 *
 * @method Grenade|null find($id, $lockMode = null, $lockVersion = null)
 * @method Grenade|null findOneBy(array $criteria, array $orderBy = null)
 * @method Grenade[]    findAll()
 * @method Grenade[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrenadeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Grenade::class);
    }

//    /**
//     * @return Grenade[] Returns an array of Grenade objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Grenade
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
