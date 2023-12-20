<?php 
if (isset($_GET['color'])) {
    $color = '#' . $_GET['color'];
}else{
    $color = 'black';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body { background-color: <?php echo($color) ?>; }
    </style>
</head>
<body>
    <a href="http://localhost/bit/nd/webmech/2.php">Back to black</a><br/>
    
</body>
</html>