<?php 

ini_set('display_errors', 1); 

ini_set('display_startup_errors', 1); 

error_reporting(E_ALL);


$conn = new MySQLi("localhost", "root", "", "dbphp7"); // IP; USUÁRIO; SENHA; BANCO ESCOLHIDO

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
    exit;
}else{
    echo "Conexão bem sucedida.";
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

$login = "user";
$pass = "12345";

$stmt->bind_param("ss", $login, $pass); //Espera os parâmetros das interrogações.
                        //os SS significam que os valores são ambos string.
                        //Estes valores precisam sempre ser passados por variáveis. Chamamos de passagem por referência.

                        //Estes parâmetros não precisam ser declarados novamente, apenas o valor da variável precisar mudar e o execute do statement ser executado.

$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();
?>