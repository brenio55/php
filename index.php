<?php 

ini_set('display_errors', 1); 

ini_set('display_startup_errors', 1); 

error_reporting(E_ALL);


$conn = new MySQLi("localhost", "root", "", "dbphp7"); // IP; USUÁRIO; SENHA; BANCO ESCOLHIDO

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
    exit;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)) { //se eu olhar pro banco e tiver resultado, este resultado vai entrar em $row, e vai continuar ser executado o while.

    //O MYSQLI_ASSOC não traz o número das colunas.
    array_push($data, $row);
    // var_dump($row);

}

echo json_encode($data);
?>