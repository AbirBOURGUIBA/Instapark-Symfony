<?php

namespace App\Repository;

use App\Entity\Fourriere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fourriere|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fourriere|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fourriere[]    findAll()
 * @method Fourriere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FourriereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fourriere::class);
    }

    // /**
    //  * @return Fourriere[] Returns an array of Fourriere objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fourriere
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
