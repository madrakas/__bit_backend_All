<?php
require __DIR__ . '/Bebras.php';

$bebras1 = new Bebras;
$bebras2 = new Bebras;

$bebras1->pasverti();

$bebras1->ugis = 0.9;
echo $bebras1->ugis . '</br/>';


echo $bebras1->uodega . '</br/>';
// echo $bebras1->ugis; // Error

echo $bebras1->koksSvoris() . '</br/>';
$bebras1->pasverti();
$bebras1->duotiMaisto(8);
echo $bebras1->koksSvoris() . '<br/>';

$bebras1->spalva = 'juoda';

$sb1 = serialize($bebras1);

// echo $sb1 . '<br/>';

// echo '<pre>';
// var_dump(unserialize($sb1));

echo $bebras1;
echo '<br/>';


$bebras2();

