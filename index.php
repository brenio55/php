<?php

include("config.php");

$data = array(
    "empresa"=>"HCode Treinamentos"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600); //nome do cookie, variável, tempo de cookie. 3600 = 1h

echo "OK";
?>