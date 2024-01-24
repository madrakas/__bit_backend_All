
<?php

$host = 'localhost';
$db   = 'forest';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);

$sql = "SELECT id, name, height, type FROM trees
-- WHERE type <> 'palmė' -- AND height > 15
-- ORDER BY type ASC, height DESC
-- LIMIT 0, 3";

$stmt = $pdo->query($sql);

$trees = $stmt->fetchall();


$sql = "
    SELECT AVG(height) AS average, COUNT(*) AS count
    FROM trees
    ";

$stmt = $pdo->query($sql);


$stat = $stmt->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maria Crud Trees</title>
    <style>
        body {
            font-family: Ariel;
            margin-left: 20px;
        }
      table {
        width: 100%;
        border-collapse: collapse;
        }

        /* Table header styling */
        th {
        background-color: #4CAF50; 
        border: 1px solid #dddddd; /* Gray border */
        padding: 8px;
        text-align: left;
        color: white;
        }

        /* Table row styling */
        tr:nth-child(even) {
        background-color: #f9f9f9; /* Alternate row background color */
        }

        /* Table cell (data) styling */
        td {
        border: 1px solid #dddddd; /* Gray border */
        padding: 8px;
        }

        /* Hover effect for better user experience */
        tr:hover {
        background-color: #e6f7ff; /* Light blue background on hover */
        }

        
.forms {
            margin-top: 20px;
            display: flex;
        }
        .forms form {
            width: 33%;
            margin-right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            box-shadow: 0 0 5px #ccc;
            box-sizing: border-box;
        }
        .forms form input, select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: white;
        }
        .forms form button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Trees</h1>

    <h2>Average height: <?= $stat['average'] ?> m</h2>
    <h2>Total trees: <?= $stat['count'] ?></h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Height</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trees as $tree) : ?>
                <tr>
                    <td><?php echo $tree['id']; ?></td>
                    <td><?php echo $tree['name']; ?></td>
                    <td><?php echo $tree['height']; ?></td>
                    <td><?php echo $tree['type']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="forms">
        <form action="store.php" method="post">
            <h2>Plant a tree</h2>
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="height" placeholder="Height">
            <select name="type">
                <option value="Lapuotis">Lapuotis</option>
                <option value="Spygliuotis">Spygliuotis</option>
                <option value="Palmė">Palmė</option>
            </select>
            <button type="submit">Plant Tree</button>
        </form>

        <form action="http://localhost/bit/db/destroy.php" method="post">
            <h2>Cut a tree</h2>
            <input type="text" name="id" placeholder="Id">
            <button type="submit">Cut Tree</button>
        </form>
        <form action="http://localhost/bit/db/update.php" method="post">
            <h2>Grow a tree</h2>
            <input type="text" name="id" placeholder="Id">
            <input type="text" name="height" placeholder="Height">
            <button type="submit">Grow</button>
        </form>
    </div>
   
</body>
</html>
