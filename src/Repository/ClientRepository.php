<?php

namespace App\Repository;

use App\Entity\Client;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @extends ServiceEntityRepository<Client>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class ClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Client::class);
    }

    public function findBySearchTerm($searchTerm)
    {
        $queryBuilder = $this->createQueryBuilder('c');

        if ($searchTerm) {
            $queryBuilder->where('c.nom_c LIKE :searchTerm')
                ->orWhere('c.prenom_c LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        return $queryBuilder->getQuery()->getResult();
    }

    public function findByEmail($email)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.email_c LIKE :email')
            ->setParameter('email', '%' . $email . '%')
            ->getQuery()
            ->getResult();
    }

    public function search(string $searchTerm): array
    {
        $qb = $this->createQueryBuilder('c')
            ->where('c.nom_c LIKE :searchTerm')
            ->orWhere('c.prenom_c LIKE :searchTerm')
            ->orWhere('c.email_c LIKE :searchTerm')
            ->orWhere('c.role LIKE :searchTerm') // Supposant que c'est le bon nom du champ de rôle dans votre classe Client
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->getQuery();

        return $qb->execute();
    }

//    /**
//     * @return User[] Returns an array of User objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?User
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
