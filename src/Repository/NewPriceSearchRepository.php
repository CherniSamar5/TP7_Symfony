<?php

namespace App\Repository;

use App\Entity\NewPriceSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NewPriceSearch>
 *
 * @method NewPriceSearch|null find($id, $lockMode = null, $lockVersion = null)
 * @method NewPriceSearch|null findOneBy(array $criteria, array $orderBy = null)
 * @method NewPriceSearch[]    findAll()
 * @method NewPriceSearch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewPriceSearchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NewPriceSearch::class);
    }

    public function save(NewPriceSearch $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(NewPriceSearch $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return NewPriceSearch[] Returns an array of NewPriceSearch objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NewPriceSearch
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
