<?php

namespace App\Repository;

use App\Entity\Epaisseur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Epaisseur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Epaisseur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Epaisseur[]    findAll()
 * @method Epaisseur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EpaisseurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Epaisseur::class);
    }

    // /**
    //  * @return Epaisseur[] Returns an array of Epaisseur objects
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
    public function findOneBySomeField($value): ?Epaisseur
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
