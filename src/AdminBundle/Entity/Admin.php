<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 04/12/2017
 * Time: 11:48
 */

namespace AdminBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser ;

/**
 * admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity

 */

class Admin extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

}