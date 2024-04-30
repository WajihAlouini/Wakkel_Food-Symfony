<?php

// src/Repository/EvenementRepository.php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    public function findByDate($date)
    {
        $qb = $this->createQueryBuilder('e');

        // If filter date is provided, add filter condition
        if ($date) {
            $qb->andWhere('e.dateDebut <= :date')
               ->andWhere('e.dateFin >= :date')
               ->setParameter('date', new \DateTime($date));
        }

        return $qb->getQuery()->getResult();
    }
}










