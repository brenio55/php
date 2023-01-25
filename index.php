<?php
include('config.php');

$cep = "59129696";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //QUAL BIBLIOTECA, SE ESPERA RETORNO, VERFICIAR SE É VÁLIDA A OPÇÃO
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);
print_r($data["localidade"])
?>
