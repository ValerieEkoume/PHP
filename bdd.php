<?php
$pdo = new PDO('mysql:host=mysql;dbname=villes;host=127.0.0.1', 'root', '',[
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$sql = "INSERT INTO capitales (capitales, pays) VALUES ('paris', 'france')";

$pdo->exec($sql);