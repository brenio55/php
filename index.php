<?php
    // include "somar.php";
    require "somar.php"; 
    echo somar(10, 20);

    //require -> obriga que o arquivo existe e que o arquivo esteja funcionando completamente
    //include tem como configurar uma pasta padrão de procura no php.ini


    //o include consegue trazer arquivos de outros sites

    //o require é mais interessante pra ser usado por exigir o bom funcionamento da variável

    //require_once -> quando um arquivo principal e o arquivo interno possui um mesmo include, esta função permite com que o arquivo só seja chamado uma vez no servidor.
    
?>
