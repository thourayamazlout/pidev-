<?php

namespace App\Repository;

use App\Entity\Maisondhote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method Maisondhote|null find($id, $lockMode = null, $lockVersion = null)
 * @method Maisondhote|null findOneBy(array $criteria, array $orderBy = null)
 * @method Maisondhote[]    findAll()
 * @method Maisondhote[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaisondhoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Maisondhote::class);
    }
    public function findMaisondhoteByVille($value ){
        return $this->createQueryBuilder('maisondhote')
            ->where('maisondhote.Ville LIKE :Ville')
            ->setParameter('Ville', '%'.$value.'%')
            ->getQuery()
            ->getResult();
    }
    // /**
    //  * @return Maisondhote[] Returns an array of Maisondhote objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Maisondhote
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
