<?php
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $color = 'yellow';
}else{
    $color = 'green';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post or Get</title>
    <style>
        body {background-color: <?php echo($color);?>;}
        a {color: white;}
    </style>
    
</head>
<body>
    <form action="6.php" method="get">
        <button type="submit">Get</button>
    </form>
    <form action="6.php" method="post">
        <button type="submit">POST</button>
    </form>
</body>
</html>