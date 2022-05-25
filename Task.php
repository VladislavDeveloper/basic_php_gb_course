<?php
class Task
{
    private User $user;
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private array $comments = [];
    private bool $isDone = false;

    function __construct(User $user, string $description)
    {
        $this->user = $user;
        $this->setDescription($description);
        $this->setDateCreated(new DateTime());
    }
    public function markAsDone() :void
    {
        $this->setDateUpdated(new DateTime());
        $this->setDateDone(new DateTime());
        $this->setIsDone(true);
    }


    /**
     * Get the value of user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser($user) : void
    {
        $this->user = $user;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description) : void
    {
        $this->description = $description;
        $this->setDateUpdated(new DateTime());
    }

    /**
     * Get the value of dateCreated
     */ 
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set the value of dateCreated
     *
     * @return  self
     */ 
    public function setDateCreated($dateCreated) : void
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * Get the value of dateUpdated
     */ 
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set the value of dateUpdated
     *
     * @return  self
     */ 
    public function setDateUpdated($dateUpdated) : void
    {
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * Get the value of dateDone
     */ 
    public function getDateDone()
    {
        return $this->dateDone;
    }

    /**
     * Set the value of dateDone
     *
     * @return  self
     */ 
    public function setDateDone($dateDone) : void
    {
        $this->dateDone = $dateDone;
    }

    /**
     * Get the value of priority
     */ 
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set the value of priority
     *
     * @return  self
     */ 
    public function setPriority($priority) : void
    {
        $this->priority = $priority;
    }

    /**
     * Get the value of isDone
     */ 
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * Set the value of isDone
     *
     * @return  self
     */ 
    public function setIsDone($isDone) : void
    {
        $this->isDone = $isDone;
    }

    /**
     * Get the value of comments
     */ 
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set the value of comments
     *
     * @return  self
     */ 
    public function setComments(Comment $comment) : void
    {
        $this->comments[] = $comment;
    }
}