<?php 

ini_set('display_errors', 1); 

ini_set('display_startup_errors', 1); 

error_reporting(E_ALL);

// $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "12345678";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();
?>