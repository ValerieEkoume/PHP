<?php

// Ouverture de la connection à la base de données
$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// préparation de la requête DELETE
$pdoStat = $pdo -> prepare('DELETE * FROM user');

/*Liaison du paramètre nommé
$user=$pdoStat->bindValue(':user', $_GET['User'], PDO::PARAM_INT);

//executer la requête
$pdoStat->execute();*/

?>

 <!doctype html>
<html lang="fr">
<heead>
    <link rel="stylesheet" href="list.css">
    <meta charset="UTF-8">
</heead>

<body>

<h1 class="titre">SUPPRESSION</h1><br>

<table class="table" style="width:100%">

