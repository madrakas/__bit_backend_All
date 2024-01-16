<?php 

spl_autoload_register(function ($class) {
    // echo "Loading class $class<br/> 1st time<br/>";
    require __DIR__ . '/' . $class . '.php';
});

// spl_autoload_register(function ($class) {
//     echo "Loading class $class<br/> 2nd time<br/>";
//     require_once __DIR__ . '/A.php';
// });

// spl_autoload_register(function ($class) {
//     echo "Loading class $class<br/> 3d time<br/>";
// });

$a = new A;
$b = new B;
$c = new C;