<?php

namespace App\Repository;

use App\Entity\Locationv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Locationv|null find($id, $lockMode = null, $lockVersion = null)
 * @method Locationv|null findOneBy(array $criteria, array $orderBy = null)
 * @method Locationv[]    findAll()
 * @method Locationv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocationvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Locationv::class);
    }

    // /**
    //  * @return Locationv[] Returns an array of Locationv objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Locationv
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
