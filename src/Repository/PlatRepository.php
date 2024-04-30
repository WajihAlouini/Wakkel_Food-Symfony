<?php

namespace App\Repository;

use App\Entity\Plat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Plat>
 *
 * @method Plat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Plat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Plat[]    findAll()
 * @method Plat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Plat::class);
    }

   /* public function findByRestaurant(int $id_restaurant): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.nomPlat', 'p.prix', 'p.ingredient', 'p.platImage')
            ->join('p.restaurant', 'r')
            ->andWhere('r.idRestaurant = :restaurantId')
            ->setParameter('restaurantId', $id_restaurant)
            ->getQuery()
            ->getResult();
    }
*/
    public function findByRestaurant(int $id_restaurant): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.idPlat', 'p.nomPlat', 'p.prix', 'p.ingredient', 'p.platImage') // Ajout de idPlat
            ->join('p.restaurant', 'r')
            ->andWhere('r.idRestaurant = :restaurantId')
            ->setParameter('restaurantId', $id_restaurant)
            ->getQuery()
            ->getResult();
    }
    public function findEntitiesByString($str)
    {
        return $this->createQueryBuilder('p')
            ->where('p.nomPlat LIKE :str')
            ->setParameter('str', '%' . $str . '%')
            ->getQuery()
            ->getResult();
    }

    // PlatRepository.php

    public function findUniquePlats(): array
    {
        return $this->createQueryBuilder('p')
            ->groupBy('p.idPlat')
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Plat[] Returns an array of Plat objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Plat
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }


    public function getPlatStatsByCategory(): array
    {
        return $this->createQueryBuilder('p')
            ->select('rc.idCategory AS categoryId', 'rc.categoryName AS categoryName', 'COUNT(p.idPlat) AS platCount')
            ->leftJoin('p.restaurant', 'r')
            ->leftJoin('r.restaurantCategory', 'rc')
            ->groupBy('rc.idCategory')
            ->getQuery()
            ->getResult();


    }


    public function findAllSorted(): array
    {
        $queryBuilder = $this->createQueryBuilder('cl')
            ->orderBy('cl.prix', 'ASC');

        return $queryBuilder->getQuery()->getResult();
    }
    public function findAllSorted1(): array
    {
        $queryBuilder = $this->createQueryBuilder('cl')
            ->orderBy('cl.prix', 'DESC');

        return $queryBuilder->getQuery()->getResult();
    }
}