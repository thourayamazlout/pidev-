<?php

namespace App\Repository;

use App\Entity\Reservationesc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservationesc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservationesc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservationesc[]    findAll()
 * @method Reservationesc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationescRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservationesc::class);
    }

    // /**
    //  * @return Reservationesc[] Returns an array of Reservationesc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reservationesc
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
