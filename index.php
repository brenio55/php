<?php 

ini_set('display_errors', 1); 

ini_set('display_startup_errors', 1); 

error_reporting(E_ALL);

// $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();


$stmt = $conn->prepare("DELETE FROM tb_usuarios
                        WHERE idusuario = ?");
$id = 2;

$stmt->execute(array($id));

$conn->commit();

// $conn->rollback();

echo "Delete OK!";
?>