<?php
class Unit
{
    private string $name;
    private int $life;
    private int $powerOfAttack;

    function __construct(string $name, int $life, int $powerOfAttack)
    {
        $this->name = $name;
        $this->life = $life;
        $this->powerOfAttack = $powerOfAttack;
    }

    public function attack(Unit $otherUnit)
    {
        $restLife = $otherUnit->getLife() - $this->getPowerOfAttack();
        $otherUnit->setLife($restLife);
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name) : void
    {
        $this->name = $name;
    }

    /**
     * Get the value of life
     */ 
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @return  self
     */ 
    public function setLife($life) : void
    {
        $this->life = $life;
    }

    /**
     * Get the value of powerOfAttack
     */ 
    public function getPowerOfAttack()
    {
        return $this->powerOfAttack;
    }

    /**
     * Set the value of powerOfAttack
     *
     * @return  self
     */ 
    public function setPowerOfAttack($powerOfAttack) : void
    {
        $this->powerOfAttack = $powerOfAttack;
    }
}