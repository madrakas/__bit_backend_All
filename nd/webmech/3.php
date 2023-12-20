<?php 
if (isset($_GET['color'])) {
    $color = '#' . $_GET['color'];
}else{
    $color = 'white';
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
<form action="http://localhost/bit/nd/webmech/3.php" method="get">
        <input type="text" name="color" placeholder="FFFFFF"/>
        <button type="submit">Change bg color</button>

    
</body>
</html>