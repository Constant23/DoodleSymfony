<?php

namespace App\Repository;

use App\Entity\SondageLieu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SondageLieu|null find($id, $lockMode = null, $lockVersion = null)
 * @method SondageLieu|null findOneBy(array $criteria, array $orderBy = null)
 * @method SondageLieu[]    findAll()
 * @method SondageLieu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SondageLieuRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SondageLieu::class);
    }

    // /**
    //  * @return SondageLieu[] Returns an array of SondageLieu objects
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
    public function findOneBySomeField($value): ?SondageLieu
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
