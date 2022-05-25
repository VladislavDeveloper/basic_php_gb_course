<?php
class Comment
{
    private User $author;
    private Task $task;
    private string $text;

    function __construct(User $author, Task $task, string $text)
    {   
        $this->setAuthor($author);
        $this->setTask($task);
        $this->setText($text);
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor(User $author) : void
    {
        $this->author = $author;
    }

    /**
     * Get the value of task
     */ 
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Set the value of task
     *
     * @return  self
     */ 
    public function setTask($task) : void
    {
        $this->task = $task;
    }

    /**
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text) : void
    {
        $this->text = $text;
    }
}