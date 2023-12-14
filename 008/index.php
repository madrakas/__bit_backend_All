<?php 

$jonas = rand(5, 25);
$petras = rand(10, 20);

echo "Jonas: $jonas Pertas: $petras <br/>";

if ($jonas > $petras) {
    echo 'Laimėjo Jonas';
} elseif($jonas < $petras){
    echo 'Laimėjo Petras';
} else {
    echo 'Lygiosios';
}

echo '<br />';
$vienas = 3;
$rezultatas = (1 == $vienas) ? 'Yes' : 'No';
$rezultatas = 1 == $vienas ? '1' : (2 == $vienas ? '2' : 'Do not know');


echo $rezultatas;

echo '<br/>';

$kas = 'Jonas';

echo isset($kas);  // 1

var_dump(isset($kas));

echo '<br/>';

$kas = null;
var_dump($kas === null);
var_dump(isset($kas2));

echo '<br/>';

for ($k = 1; $k <= 15; $k++){
    for ($i =1; $i <= 15; $i++){
        if (rand(0,10) > 9){
            break 2;
        }
        echo $i;
        echo '<br/>';
    }
echo 'Ciklo pabaiga';
}


for ($k = 1; $k <= 7; $k++){
    switch($k){
        case 1: 
            echo 'Vineas<br/>';
            continue 2;
        case 2:
            echo 'Du<br/>';
            continue 2;
        case 3:
            echo 'Trys<br/>';
            continue 2;
        case 4:
            echo 'Keturi<br/>';
            continue 2;
        case 5:
            echo 'Penki<br/>';
            continue 2;
        default:
            echo 'Nežinau<br/>';
            break 2;
    }
}

echo '<br/>';

$k = 3;
$skaicius = match($k) {
    1 => 'Vienas',
    // 2 => 'Du',
    2, 3 => 'Du arba trys',
    // 3 => 'Trys',
    4 => 'Keturi',
    5 => 'Penki',
    $k > 5 && $k < 10 => 'Tarp penkių ir dešimt',
    default => 'Nėra',
};

echo $skaicius;
echo '<br/>';

$k = -11;
$skaicius = match(true) {
    $k > 5 && $k < 10 => 'Tarp penkių ir dešimt',
    $k > 10 => 'Daugiau už 10',
    default => 'mažiau už 5' ,

};

echo $skaicius;