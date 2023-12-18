<?php 

define ('OK', true);

echo '<h1>Big Index</h1>';

// include __DIR__ . '/f1.php';
include_once __DIR__ . '/f1.php';
echo '<h1>Big Indexmiddle</h1>';
// include __DIR__ . '/f1.php';
include_once __DIR__ . '/f1.php';

echo '<h1>Big Index End</h1>';

if (file_exists(__DIR__ . '/f2.php')){
    require __DIR__ . '/f2.php';
}

require __DIR__ . '/../here.php';