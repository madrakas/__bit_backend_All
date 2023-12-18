<?php 
define('MY_CONST', 'My const value');

define('small', 'small value'); // not recommended

define('MY_ARR', [
    'key'=> 'value',
    'key2'=> 'value',
]);



function myFunction(){
    echo MY_CONST;
    echo '<br/>';
    echo small;
    echo '<br/>';
    echo '<pre>';
    print_r(MY_ARR);
}

myFunction();

// PHP predifined constants

echo '<br/>';
echo PHP_INT_MIN;


// magic constants
echo '<br/>';
echo __DIR__;

file_put_contents(__DIR__ . '/test1.txt',  'test1'); // absolute path
file_put_contents('test2.txt', 'test2');  //relative path

// always use absolute path

?>