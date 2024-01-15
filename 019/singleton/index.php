<?php

require __DIR__ . '/Cart.php';

// $cartOne = Cart::getCart(88);
// $cartTwo = Cart::getCart(89);

$cartOne = Cart::getCart();
$cartTwo = Cart::getCart();

// $cartThree = clone $cartOne;
// $cartThree = unserialize(serialize($cartOne));

echo '<pre>';

var_dump($cartOne);
var_dump($cartTwo);
var_dump($cartThree);