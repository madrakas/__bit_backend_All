<?php
if ($_SERVER['REQUEST_METHOD']==='POST'){
    header('Location: http://localhost/bit/nd/webmech/7.php?param=2');
}else{
    if (isset($_GET['param'])){
        if($_GET['param'] === '1'){
            $color= 'green';
        }elseif($_GET['param'] === '2'){
            $color = 'yellow';
        }else{
            $color= 'black';
        }
    }
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
    <form action="http://localhost/bit/nd/webmech/7.php?" method="get">
        <input type='hidden' name=param value='1'/>
        <button type="submit">Get</button>
    </form>
    <form action="7.php" method="post">
        <button type="submit">POST</button>
    </form>
</body>
</html>