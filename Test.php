<?php
$pdo = new PDO('mysql:host=mysql;dbname=basedetest;host=127.0.0.1', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$email = $_POST["email"];
$password = $_POST["password"];
$sql = "INSERT INTO user (email, password) VALUES  ('$email', '$password')";

$pdo->exec($sql);