<?php
    $name = "images";
    // is directory exist
    if (!is_dir($name)){
        mkdir($name);
        echo "O diretório $name foi criado com sucesso";
    } else {
        //rmdir($name); //remove o diretório
        echo "O diretório $name já existe";
    }
?>