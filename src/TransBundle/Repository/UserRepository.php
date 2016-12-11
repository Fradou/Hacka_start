<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/12/16
 * Time: 00:25
 */

namespace TransBundle\Repository;

use Doctrine\ORM\EntityRepository;
use TransBundle\Entity\Demand;


class UserRepository extends EntityRepository
{
    public function findTranslator($demand){

        /** On met les % pour pouvoir utiliser "like" et ainsi utiliser de la wildcard.
         * Si pas de % le like se comporterait comme un simple where */

        $searching = $demand;
        $qb= $this->createQueryBuilder('u')
            -> select(array('u'))
            /**   :country le ":" indique que country est un parameter */
            ->where('u.native_language = :needed OR u.native_language = :spoken' )
            //  OR u.nativeLanguage = :spoken
            ->setParameters(array('needed' => $searching->getLanguageSpoken(),'spoken' => $searching->getLanguageNeeded() ))
            ->getQuery();

   //         ->where('j.domain = :domain')
     //       ->setParameter('domain', $domain)
       //     ->getQuery();
        return $qb->getResult();


       //     -> select('User', 'u')
            /**   :country le ":" indique que country est un paramter */
    }

}