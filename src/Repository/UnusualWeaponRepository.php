<?php

namespace App\Repository;

use App\Entity\UnusualWeapon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UnusualWeapon>
 *
 * @method UnusualWeapon|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnusualWeapon|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnusualWeapon[]    findAll()
 * @method UnusualWeapon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnusualWeaponRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UnusualWeapon::class);
    }

//    /**
//     * @return UnusualWeapon[] Returns an array of UnusualWeapon objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UnusualWeapon
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
