<?php 
use Colors\App\App;
use Colors\APP\Message;
use Colors\APP\Auth;

session_start();

require '../vendor/autoload.php';

define('ROOT', __DIR__ . '/../');
define('URL', 'http://super-colors.test');
Message::get();
Auth::get();

echo App::run();