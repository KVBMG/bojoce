<?php

namespace EcoJob\CandidatBundle\Repository;

/**
 * AlertMailRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AlertMailRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAlerts($criter){
        $criter = "%".$criter."%";

        $qb = $this->createQueryBuilder('a');
        $qb->where("a.criter LIKE :criter");
        $qb->setParameter('criter', $criter);


        return $qb->getQuery()->getResult();
    }
}
