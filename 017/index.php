<?php 

require(__DIR__ . '/Nso.php');
$nso1 = new NSO(1, 'green');
//By reference
$nso2 = $nso1;

$nso3 = new NSO(3);


echo '<pre>';

echo $nso1->speed . '<br/>';

$nso1->speed = 'slow';


// $nso1->goSwim(); //error
// echo $nso1->color . '<br/>';  // error
// echo $nso1->weight . '<br/>'; // error

$nso3->changeColor('blue');

// $nso1->__construct(51);
// $nso1->goFly();

// var_dump($nso1);
// var_dump($nso2);
// var_dump($nso3);
print_r($nso1);
print_r($nso2);
print_r($nso3);
echo '</pre>';