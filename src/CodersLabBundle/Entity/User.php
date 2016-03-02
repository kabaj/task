<?php
// src/CodersLabBundle/Entity/User.php

namespace CodersLabBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany (targetEntity="Task", mappedBy="user")
     */

    private $user_task;



    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Add user_task
     *
     * @param \CodersLabBundle\Entity\Task $userTask
     * @return User
     */
    public function addUserTask(\CodersLabBundle\Entity\Task $userTask)
    {
        $this->user_task[] = $userTask;

        return $this;
    }

    /**
     * Remove user_task
     *
     * @param \CodersLabBundle\Entity\Task $userTask
     */
    public function removeUserTask(\CodersLabBundle\Entity\Task $userTask)
    {
        $this->user_task->removeElement($userTask);
    }

    /**
     * Get user_task
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserTask()
    {
        return $this->user_task;
    }
}
