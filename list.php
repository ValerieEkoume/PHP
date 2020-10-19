<?php


$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


$pdoStat = $pdo -> query("SELECT * FROM user");
$user = $pdoStat -> fetchAll();



?>
<!doctype html>
<html lang="fr">
<heead>
    <link rel="stylesheet" href="list.css">
    <meta charset="UTF-8">
</heead>

<body>

<h1 class="titre">LISTE DE CONTACTS</h1><br>

<table class="table" style="width:100%">

    <tr>
        <th>email</th>
        <th>password</th>
        <th>statut</th>
    </tr>
<?php foreach ($user as $item): ?>
    <tr>
        <td><?php echo $item['email'] ?></td>
        <td><?php echo $item['password'] ?></td>
        <td><a href="supprimer.php?numItem=<?= $item['id'] ?>">Supprimer</a></td>
    </tr>
<?php endforeach ?>

</table>


</body>
</html>