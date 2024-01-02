<?php
require __DIR__ . '/Bebras.php';

$bebras1 = new Bebras;
$bebras2 = new Bebras;

$bebras1->pasverti();
echo $bebras1->ugis;
echo $bebras1->uodega;
// echo $bebras1->ugis; // Error

echo $bebras1->koksSvoris();
$bebras1->pasverti();
$bebras1->duotiMaisto(8);
echo $bebras1->koksSvoris();
