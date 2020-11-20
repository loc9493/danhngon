<?php

namespace App\Repository;

use App\Entity\Quote1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Quote1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Quote1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Quote1[]    findAll()
 * @method Quote1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Quote1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Quote1::class);
    }

    // /**
    //  * @return Quote1[] Returns an array of Quote1 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Quote1
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
