<h1>Big</h1>
<?php

// echo 'Labas vakaras!';


$s1 = 'Labas';
$s2 = 'rytas';

// echo '<br/>' . $s1 . ' ' . $s2;


$s3 = '$s1 rytas';
$s4 = "$s1 rytas";

echo $s3;
echo '<br/>';
echo $s4;


echo '<pre>';
print_r([$s1, $s2, $s3]);

var_dump($s2);