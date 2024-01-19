
<?php

$host = 'localhost';
$db   = 'forest';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);

$name = $_POST['name'];
$height = $_POST['height'];
$type = $_POST['type'];

// $sql = "INSERT INTO trees (name, height, type) VALUES ($_POST['name'], $_POST['height'], $_POST['type'])";
$sql = "INSERT INTO trees (name, height, type) VALUES ('$name', '$height', '$type')";

$pdo->query($sql);

header('Location:http://localhost/bit/db/');