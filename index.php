<?php 

ini_set('display_errors', 1); 

ini_set('display_startup_errors', 1); 

error_reporting(E_ALL);


$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");//TIPO DE BANCO; IP/HOST; USUÁRIO; SENHA;

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); // os dois pontos são usados quando queremos acessar propriedades, métodos e constantes de nível de classe

foreach($results as $row) {
    foreach($row as $key => $value){
        echo "<strong>".$key."</strong> ".$value."<br/>";
    }
    echo "========================================================<br/>";
}

var_dump($results);
?>