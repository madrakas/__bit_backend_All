<?php 
use Colors\App\App;
use Colors\APP\Message;

session_start();

require '../vendor/autoload.php';

define('ROOT', __DIR__ . '/../');
define('URL', 'http://super-colors.test');
Message::get();

echo App::run();