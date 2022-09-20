<?php 

ini_set('display_errors', 1); 

ini_set('display_startup_errors', 1); 

error_reporting(E_ALL);

// $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
$stmt = $conn->prepare("UPDATE tb_usuarios 
                        SET deslogin = :LOGIN, 
                            dessenha = :PASSWORD 
                        WHERE idusuario = :ID");

$login    = "João";
$password = "QUERTY";
$id       = 2;


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!";
?>