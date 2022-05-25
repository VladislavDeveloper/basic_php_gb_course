<?php
class User
{
    public string $username;
    public string $email;
    public ?string $sex;
    public ?int $age;
    public bool $isActive = true;

    function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername(string $username) : void
    {
        $this->username = $username;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    /**
     * Get the value of sex
     */ 
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     *
     * @return  self
     */ 
    public function setSex(?string $sex) : void
    {
        $this->sex = $sex;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge(?int $age) : void
    {
        $this->age = $age;
    }

    /**
     * Get the value of isActive
     */ 
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set the value of isActive
     *
     * @return  self
     */ 
    public function setIsActive($isActive) : void
    {
        $this->isActive = $isActive;
    }
}