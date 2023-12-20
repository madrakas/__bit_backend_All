<?php 
    if ($_SERVER['REQUEST_METHOD']==='POST'){
        header('Location: http://localhost/bit/nd/webmech/8/rose.php?param=1');
    }else{
        if(!isset($_GET['param'])){
            header('Location: http://localhost/bit/nd/webmech/8/pink.php');
        }
    }
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rose</title>
    <style>body{background-color: #FF00CC;}</style>
</head>
<body>
    
</body>
</html>