<?php
if (isset($_GET['param'])){
    header('Location: http://localhost/bit/nd/webmech/5/blue.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red</title>
    <style>
        body {background-color: red;}
        a {color: white;}
    </style>
    
</head>
<body>
    <a href='red.php?param=1'>Link</a>
</body>
</html>