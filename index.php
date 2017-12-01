<?php
/**
 * Created by PhpStorm.
 * User: Clemence
 * Date: 01/12/2017
 * Time: 14:19
 */
require_once "connexion.php";
$sql = "SELECT 
  id, 
  gamename, 
  info 
FROM
  runlist
;";
$stmt = $conn->prepare($sql);
$stmt->execute();



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ZblehMa Vie bien bien</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<table>
    <tr>
        <th>id</th>
        <th>nom du jeu</th>
        <th>info</th>

    </tr>
    <?php while(false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
    <tr>
        <td><?=$row["id"]?></td>
        <td><?=$row["gamename"]?></td>
        <td><?=$row["info"]?></td>

    </tr>
<?php endwhile;?>
</table>
</body>
</html>