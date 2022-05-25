<?php
class Cart
{
    private array $items = [];

    public function addToCart(Product $item){
        $this->items[] = $item;
    }
    public function removeFromCart(Product $itemToRemove){
        foreach($this->items as $item){
            if($item === $itemToRemove){
                unset($this->items[array_search($item, $this->items)]);
            }
        }
    }
    public function getTotalPrice() : float
    {
        $totalPrice = 0;
        foreach($this->items as $item){
            $totalPrice += $item->getPrice();
        }
        return $totalPrice;
    }


    /**
     * Get the value of items
     */ 
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the value of items
     *
     * @return  self
     */ 
    public function setItems($items) : void
    {
        $this->items = $items;
    }
}