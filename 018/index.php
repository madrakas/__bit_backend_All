<?php

require __DIR__ . '/Afrika.php';
require __DIR__ . '/ManoAfrika.php';
require __DIR__ . '/Dramblys.php';
require __DIR__ . '/Krokodilas.php';

$afrika = new Afrika;
$dramblys = new Dramblys;
$krokodilas = new Krokodilas;

// echo ($afrika->zemynas . '<br/>');
// echo ($afrika->gyventojai . '<br/>');
echo $dramblys->pavadinimas . '<br/>';
echo $dramblys->zemynas . '<br/>';
echo $dramblys->socialinisTinklas . '<br/>';
$dramblys->padainuok();

echo $krokodilas->pavadinimas . '<br/>';
echo $krokodilas->zemynas . '<br/>';
echo $krokodilas->socialinisTinklas . '<br/>';
$krokodilas->padainuok();


// echo $dramblys->mano . '<br/>'; // Error nes mano Afrikoje yra private
