<?php 

require_once("config.php");

use Cliente\Cadastro; //diz que usaremos um namespace.

$cad = new Cadastro(); //dependendo do use, esta classe muda, pelo polimorfismo. Ela com o comando USE, vira o cliente\cadastro. Sem, ela vira o cadastro padrõa.

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();

echo "<br/>";

echo $cad;


?>