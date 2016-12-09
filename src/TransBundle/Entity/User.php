<?php

namespace TransBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;
    
}