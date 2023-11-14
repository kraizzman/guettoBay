<?php

namespace App\Repository;

use App\Entity\AmmunitionsType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AmmunitionsType>
 *
 * @method AmmunitionsType|null find($id, $lockMode = null, $lockVersion = null)
 * @method AmmunitionsType|null findOneBy(array $criteria, array $orderBy = null)
 * @method AmmunitionsType[]    findAll()
 * @method AmmunitionsType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AmmunitionsTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AmmunitionsType::class);
    }

//    /**
//     * @return AmmunitionsType[] Returns an array of AmmunitionsType objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AmmunitionsType
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
