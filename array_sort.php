<?php

// file_put_contents('file.txt', "Are you still here?");


$farm = [
    [
        'name' => 'Cow',
        'sound' => 'Moo',
        'price' => 1000,
    ],
    [
        'name' => 'Pig',
        'sound' => 'Oink',
        'price' => 500,
    ],
    [
        'name' => 'Chicken',
        'sound' => 'Cluck',
        'price' => 250,
    ],
    [
        'name' => 'Horse',
        'sound' => 'Neigh',
        'price' => 5000,
    ],
    [
        'name' => 'Sheep',
        'sound' => 'Baa',
        'price' => 750,
    ],
];
 

echo '<pre>';
// print_r ($farm);

function sortBySound ($a, $b) {
    return $a['sound'] <=> $b['sound'];
}

usort($farm, 'sortbysound');
// print_r ($farm);

$sortByName = function ($a, $b) {
    return $a['name'] <=> $b['name'];
};

usort($farm, $sortByName);
// print_r ($farm);

usort($farm, fn($a, $b) => $a['price'] <=> $b['price']);
// print_r ($farm);


$persons = [
    [
        'name' => 'Paul',
        'wife' => 'Jane',
    ],
    [
        'name' => 'Peter',
        'wife' => 'Mary',
    ],
    [
        'name' => 'Paul',
        'wife' => 'Sue',
    ],
    [
        'name' => 'Mark',
        'wife' => 'Kate',
    ],
    [
        'name' => 'Paul',
        'wife' => 'Anne',
    ],
];

// sort by name & wife

usort ($persons, function($a, $b){
    if ($a['name'] === $b['name']){
        return $a['wife'] <=> $b['wife'];
    }else{
        return $a['name'] <=> $b['name'];
    }
});

print_r($persons);

// sort by name & wife using match

usort($persons, function($a, $b){
    
});