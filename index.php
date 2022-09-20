<?php 

ini_set('display_errors', 1); 

ini_set('display_startup_errors', 1); 

error_reporting(E_ALL);

// $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
$stmt = $conn->prepare("DELETE FROM tb_usuarios
                        WHERE idusuario = :ID");

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Delete OK!";
?>