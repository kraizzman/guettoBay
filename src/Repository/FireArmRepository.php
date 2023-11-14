<?php

namespace App\Repository;

use App\Entity\FireArm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FireArm>
 *
 * @method FireArm|null find($id, $lockMode = null, $lockVersion = null)
 * @method FireArm|null findOneBy(array $criteria, array $orderBy = null)
 * @method FireArm[]    findAll()
 * @method FireArm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FireArmRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FireArm::class);
    }

    /**
     * @return FireArm[] Returns an array of FireArm objects
     */
    public function findAllFireArm($value): array
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.id = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

//    public function findOneBySomeField($value): ?FireArm
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
