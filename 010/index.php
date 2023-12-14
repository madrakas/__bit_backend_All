<?php
declare(strict_types=1);

function noReturn() :void {     // void - deklaruojam kad funkcija nieko negrąžins
    echo 'I have no return value';
}


$noreturnvalue = noReturn();

print_r($noreturnvalue);

echo '<br/>';

function returnInt() :int | string {
    return 1;
}

$returnIntValue = returnInt();

print_r($returnIntValue);
echo '<br/>';
var_dump($returnIntValue);


$canISeeIt = 'Yes you can see me!';

function tryToSeeMe() {
    //Per nagus už global naudojimą
    global $canISeeIt;
    return $canISeeIt;
}

echo '<br/>';

@$trytoSeeMeValue = tryToSeeMe();  // indiškas kodas. '@' prieš bet kokį sakinį ignoruoja warning
$trytoSeeMeValue = tryToSeeMe();

var_dump($trytoSeeMeValue);

function sum(int $a, int $b = 5) :int {
    return $a + $b;
}

echo '<br/>';
$sumResult = sum(-8);

var_dump($sumResult);

echo '<br/>';

var_dump (5 == '5');  //true
echo '<br/>';
var_dump (5 === '5'); //false


function sumAll($a, ...$numbers) :int {
    $sum = 0;
    foreach($numbers as $number){
        $sum += $number;
    }
    return $sum;
}

echo '<br/>';
$sumAllResult = sumAll(1,2,3,4,5,6,7,8,9);
var_dump($sumAllResult);
echo '<br/>';

$myDigits = [7, 7, 7];

var_dump(sumAll(...$myDigits));

echo '<br/>';
function withStatic() {
    static $static = 0;
    $static++;
    echo $static . '<br/>';
}


withStatic();
withStatic();
withStatic();
withStatic();

echo '<br/>';
function withRecursive($a) {
    if ($a < 4) {
        echo 'In ' . $a . '<br/>';
        withRecursive($a + 1);
    }
    echo 'Out ' . $a . '<br/>';
}

withRecursive(1);


$anonymous = function(){
    echo 'I am anonymous function';
    return function(){
        echo 'I am anonymous function inside another anononymous function';
    };
};

$anonymous();
$anonymous()();


function withCallback ($callback){
    echo 'I am callback!<br/>';
    $callback();
}
$abc = 123;

withCallback(function() use ($abc){
    echo 'I am anonymous function iunside function with callback!' . $abc . '<br/>';
   
});    
    echo '<br/><br/>';
    
    $k1 =1;
    
    $a1 = function() use (&$k1){
        echo 'I am anonymous function  ' . $k1 . '!<br/>';
    };
    
    $k1++;
    $a1();
    
    echo '<br/><br/>';
    
    $arrow = fn() => 'I am arrow function!'; // galima tik vienoje eilutėje
    $arrow2 = fn() => 'I am arrow function!' . $k1 . '<br/>';  // į vidų ali patekti išorės kintamieji
    
    echo $arrow();
    
    echo '<br/><br/>';

    $farm = [
        [
            'name' => 'Cow',
            'sound' => 'Muuuu',
            'weight' => 500,
        ],
        [
            'name' => 'Pig',
            'sound' => 'Kra kra',
            'weight' => 100,
        ],
        [
            'name' => 'Chicken',
            'sound' => 'Cip cip',
            'weight' => 1,
        ],
        [
            'name' => 'Horse',
            'sound' => 'Iiiiiii',
            'weight' => 800,
        ],
        [
            'name' => 'Sheep',
            'sound' => 'Beeeee',
            'weight' => 200,
        ],
    ];

// sunkinam gyvulius + 1kg

$weightPlus1 = array_map(function($animal){
    $animal['weight'] += 1;
    return $animal;
}, $farm);

// $weightPlus1 =array_map(fn($animal) => ($animal['weight'] + 1) && $animal, $farm);

array_walk($farm, fn(&$animal) => $animal['weight'] += 1);

echo '<pre>';
print_r($weightPlus1);



?>