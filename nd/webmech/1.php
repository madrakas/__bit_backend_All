<?php 
if (($_GET['color'] ?? '') == '1') {
    $color = 'red';
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

        body { background-color: <?php echo($color);?>}
    </style>
</head>
<body>
    <a href="http://localhost/bit/nd/webmech/1.php">Link1</a><br/>
    <a href="http://localhost/bit/nd/webmech/1.php?color=1">Link2</a><br/>
</body>
</html>