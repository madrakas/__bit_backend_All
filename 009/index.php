<?php 
echo '<pre>';
$arr =['racoon', 'rabbit', 'fox'];

//echo $arr; -> Error

// print_r($arr);

// Array yra primityvai, o ne referenciniai

$arr2 = $arr;

$arr2[0] = 'dog';

array_push($arr, 'cat'); // lame
$arr[] = 'cat'; //cool
array_unshift($arr, 'mouse');
array_pop($arr2);
array_shift($arr2);

// print_r($arr);
// print_r($arr2);


$arr['lauke'] = 'lape';
$arr[''] = 'lape2';
$arr[''] = 'lape3';

$arr['01'] = '1 stringas';
$arr[8.7] = '8.7 floatas';
$arr['8.7'] = "'8.7' floatas";


// print_r($arr2);
// print_r($arr);

// reset arr indexes

$arr4 = array_values($arr);
// print_r($arr4);

foreach ($arr as $index => $value){
    // echo "[$index] => $value<br/>";
    $arr[$index] = 'Kate Winslet';
}

print_r($arr);
?>