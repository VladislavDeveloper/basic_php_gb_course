<?php
class Product
{
    private string $title;
    private ?float $price;
    private ?array $components;

    function __construct(string $title, ?float $price, ?array $components = [])
    {
        $this->title = $title;
        $this->price = $price;
        $this->components = $components;
        $components ? $this->recalcPrice() : $this->price = $price;
    }

    private function recalcPrice()
    {
        $price = 0;
        foreach($this->components as $component){
            $price += $component->getPrice();
        }
        $this->price = $price;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title) : void
    {
        $this->title = $title;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price) : void
    {
        $this->price = $price;
    }

    /**
     * Get the value of components
     */ 
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Set the value of components
     *
     * @return  self
     */ 
    public function setComponents($components) : void
    {
        $this->components = $components;
    }
}