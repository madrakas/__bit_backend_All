<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webmechanika</title>
</head>
<body>
    <a href="http://localhost/bit/012/?kas=kazkas">Linkas kazkas</a><br/>
    <a href="http://localhost/bit/012/?kas=kitas">Linkas kitas</a><br/>
    <a href="http://localhost/bit/012/?kas=kas&kitas=kitas">Linkas kitas</a><br/>


<form action="http://localhost/bit/012/" method="get">
    <input type="text" name="kas" value="kazkas">
    <input type="text" name="kitas" value="kitas">
    <input type="color" name="color" value="#FFFFFF">
    <input type="hidden" name="slapukas" value="5">
    <button type="submit">GET</button>
</form>

<form action="http://localhost/bit/012/?z=88" method="post">
    <input type="text" name="kas" value="kazkas">
    <input type="text" name="kitas" value="kitas">
    <input type="color" name="color" value="#FFFFFF">
    <input type="hidden" name="slapukas" value="5">
    <button type="submit">POST</button>
</form>

<?php
//Webmechanika

echo 'Hello<br/>';
// Query
// Body
// Param
echo '<pre>';
print_r($_GET);
print_r($_POST);
print_r($_SERVER['REQUEST_METHOD']);
echo '</pre>';

if (($_GET['kas'] ?? '') == 'kazkas') {
    echo '<h2>Labas, kazkas!</h2>';
}
if (($_GET['kas'] ?? '') == 'kitas') {
    echo '<h2>Labas, kitas</h2>';
}

echo '------------';



?>

</body>
</html>