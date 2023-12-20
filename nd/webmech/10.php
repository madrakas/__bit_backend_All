<?php 

if(count($_GET) > 0){
    $bgcolor = 'white';
    $color = 'black';
    $form = 'Selected: ' .count($_GET).'<br/>Total: ' . $_GET['checkboxCount'];
}else{
    $bgcolor = 'black';
    $color = 'white';

    $checkboxCount = rand(3, 10);
    $checkboxes = [];
    $ceckboxNamesStr = "ABCDEFGHIJ";
    for ($i=0; $i < $checkboxCount ; $i++) { 
        $checkboxes[] = "<input type='checkbox' id='checkbox$i' name=" . substr($ceckboxNamesStr, $i, 1) . "/><label for='checkbox$i'>" . substr($ceckboxNamesStr, $i, 1) . "</label>";
    }

    $form = "<form action='http://localhost/bit/nd/webmech/10.php' method='get'><input type='hidden' name='checkboxCount' value='$checkboxCount'>" . implode('<br/>', $checkboxes) . "<br/><button type='submit'>Submit</button></form>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution 9</title>
    <style>
        body { background-color: <?php echo($bgcolor); ?>;
               color: <?php echo ($color); ?>;
        }
    </style>
</head>
<body>
   <?= $form ?>
</body>
</html>