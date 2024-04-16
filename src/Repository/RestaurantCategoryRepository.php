<?php

namespace App\Repository;

use App\Entity\RestaurantCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RestaurantCategory>
 *
 * @method RestaurantCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method RestaurantCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method RestaurantCategory[]    findAll()
 * @method RestaurantCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RestaurantCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RestaurantCategory::class);
    }

//    /**
//     * @return RestaurantCategory[] Returns an array of RestaurantCategory objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RestaurantCategory
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
