<?php

namespace App\Repository;

use App\Entity\Escapade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Escapade|null find($id_esc, $lockMode = null, $lockVersion = null)
 * @method Escapade|null findOneBy(array $criteria, array $orderBy = null)
 * @method Escapade[]    findAll()
 * @method Escapade[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EscapadeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Escapade::class);
    }

    // /**
    //  * @return Escapade[] Returns an array of Escapade objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Escapade
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findEscapadeByVille($value)
    { return $this->createQueryBuilder('escapade')
        -> where('escapade.ville like :ville')
        -> setParameter('ville', '%'.$value.'%')
        ->getQuery()
        ->getResult();
    }
}
