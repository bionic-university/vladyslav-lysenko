<?php
/**
 * Created by PhpStorm.
 * User: vladyslav
 * Date: 08.11.14
 * Time: 17:51
 */
namespace BionicUniversity\Bundle\ProjectManagementBundle\Event;
use Symfony\Component\EventDispatcher\Event;

class UserEvent extends Event{
    /**
     * @var \BionicUniversity\Bundle\ProjectManagementBundle\Entity\User
     */
    private $user;

    function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * @return \BionicUniversity\Bundle\ProjectManagementBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

} 