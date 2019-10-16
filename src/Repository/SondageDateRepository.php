<?php

namespace App\Repository;

use App\Entity\SondageDate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SondageDate|null find($id, $lockMode = null, $lockVersion = null)
 * @method SondageDate|null findOneBy(array $criteria, array $orderBy = null)
 * @method SondageDate[]    findAll()
 * @method SondageDate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SondageDateRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SondageDate::class);
    }

    // /**
    //  * @return SondageDate[] Returns an array of SondageDate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SondageDate
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
