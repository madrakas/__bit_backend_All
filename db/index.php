
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
WHERE type <> 'palmė' -- AND height > 15
-- ORDER BY type ASC, height DESC
-- LIMIT 0, 3";

$stmt = $pdo->query($sql);

$trees = $stmt->fetchall();

// echo '<pre>';
// print_r($trees);
// echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maria Crud Trees</title>
    <style>
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
    </style>
</head>
<body>
    <h1>Trees</h1>
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
   
</body>
</html>
