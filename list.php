<?php

$email = $_POST['email'];
$nom = $_POST['password'];


$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);


$pdo = ('SELECT * FROM user');

/* executer la requete*/

$executeIsOk = $pdo

$var = $pdo ->exec($sql);
var_dump($var);

?>

<html lang="fr">

<body>
<p>
<h2>Connectez-vous</h2><br>
</p>

<form action="Test.php" method="post">
    <div class="form">
        <br>
        <label  for="">pseudo:</label>
        <input class="pseudo" type="id" name="pseudo" class="form-control"><br>
        <label  for="">email:</label>
        <input class="email" type="email" name="email" class="form-control"><br>
        <br>
        <label for="">password:</label>
        <input class="password" type="password" name="password" class="form-control"><br>
        <br>
    </div>


    <input class="send" type="submit" value="Envoyer"><br>
</form>
</body>
</html>

