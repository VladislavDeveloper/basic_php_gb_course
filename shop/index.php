<?php
include "Product.php";
include "Cart.php";

$product1 = new Product('Шкаф-купе', 20000);
$product2 = new Product('Комод', 2500);
$product3 = new Product('Кровать', 19000);
$product4 = new Product('Компьютерный стол', 10500);
$product5 = new Product('Тумба', 4500);
$productKit = new Product('Набор для спальни', null, [$product1, $product2, $product3]);

$userCart = new Cart();
$userCart->addToCart($product2);
$userCart->addToCart($product4);
$userCart->addToCart($productKit);

print_r($userCart);

$userCart->removeFromCart($product4);

print_r($userCart);

echo $userCart->getTotalPrice();