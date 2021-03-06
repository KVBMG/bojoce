<?php

namespace EcoJob\UserBundle\Repository;

/**
 * TypeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TypeRepository extends \Doctrine\ORM\EntityRepository
{
    public function getNewlyCandidat() 
    {
        $dateMax = new \DateTime();
        $dateMin = $dateMax->modify('-2 day');
        $qb = $this->createQueryBuilder('u');
        $qb->where("u.candidat.type = 'candidat' ");
        $qb->andWhere('u.createdAt BETWEEN :dateMin AND :dateMax')
           ->setParameter('dateMin', $dateMin)
           ->setParameter('dateMax', $dateMax);

        return $qb->getQuery()->getResult();               
    }     
}
