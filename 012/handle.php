<?php

//POST - duomenys ateina is formos
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $kas = $_POST['kas'] ?? '';
    header('Location: http://localhost/bit/012/handle.php');
    die;
}

// GET
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $kas ?? 'Nieko nėra' ?></h2>
    <form action="http://localhost/bit/012/handle.php" method="post">
        <input type="text" name="kas">
        <button type="submit">POST IT</button>
</body>
</html>