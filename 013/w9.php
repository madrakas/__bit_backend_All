<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cb = $_POST['cb'] ?? [];
    $_SESSION['count'] = count($cb);
    header('Location: http://localhost/bit/013/w9.php?count=' . $count);
    die;
}


if (isset($_SESSION['count'])) {
    $count = $_SESSION['count'];
    $color = 'white';
    unset($_SESSION['count']);
} else {
    $color = 'black';
    $letters = range('A', 'J');
    $random3_10 = rand(3, 10);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U - 9</title>
</head>
<body style="background-color:<?= $color ?>;">

<?php if ($color == 'white'): ?>

    <h1 style="color:skyblue;">You have selected <?= $count ?> letters</h1>
    <a href="http://localhost/bit/013/w9.php">BACK</a>

<?php else: ?>

    <form action="" method="post">
        <?php foreach (array_slice($letters, 0, $random3_10) as $letter): ?>
            <input type="checkbox" name="cb[]" value="<?= $letter ?>">
            <label style="color:skyblue;"><?= $letter ?></label>
        <?php endforeach ?>
        <button type="submit">POST IT</button>
    </form>

<?php endif ?>
</body>
</html>