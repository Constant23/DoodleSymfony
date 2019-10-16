<?php

namespace App\Repository;

use App\Entity\SondageDateLieu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SondageDateLieu|null find($id, $lockMode = null, $lockVersion = null)
 * @method SondageDateLieu|null findOneBy(array $criteria, array $orderBy = null)
 * @method SondageDateLieu[]    findAll()
 * @method SondageDateLieu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SondageDateLieuRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SondageDateLieu::class);
    }

    // /**
    //  * @return SondageDateLieu[] Returns an array of SondageDateLieu objects
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
    public function findOneBySomeField($value): ?SondageDateLieu
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
