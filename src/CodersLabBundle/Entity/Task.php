<?php

namespace CodersLabBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CodersLabBundle\Entity\TaskRepository")
 */
class Task
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=40)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=40)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="priority", type="string", length=40)
     */
    private $priority;

    /**
    * @ORM\ManyToOne( targetEntity = "User", inversedBy= "posts")
    * @ORM\JoinColumn( name="user_id", referencedColumnName="id")
    */
    private $user_task;

    /**
     * @ORM\OneToMany (targetEntity="Comment", mappedBy="comment")
     */

    private $task_comment;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Task
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Task
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Task
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set priority
     *
     * @param string $priority
     * @return Task
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string 
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set user_task
     *
     * @param \CodersLabBundle\Entity\User $userTask
     * @return Task
     */
    public function setUserTask(\CodersLabBundle\Entity\User $userTask = null)
    {
        $this->user_task = $userTask;

        return $this;
    }

    /**
     * Get user_task
     *
     * @return \CodersLabBundle\Entity\User 
     */
    public function getUserTask()
    {
        return $this->user_task;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->task_comment = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add task_comment
     *
     * @param \CodersLabBundle\Entity\Comment $taskComment
     * @return Task
     */
    public function addTaskComment(\CodersLabBundle\Entity\Comment $taskComment)
    {
        $this->task_comment[] = $taskComment;

        return $this;
    }

    /**
     * Remove task_comment
     *
     * @param \CodersLabBundle\Entity\Comment $taskComment
     */
    public function removeTaskComment(\CodersLabBundle\Entity\Comment $taskComment)
    {
        $this->task_comment->removeElement($taskComment);
    }

    /**
     * Get task_comment
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTaskComment()
    {
        return $this->task_comment;
    }
}
