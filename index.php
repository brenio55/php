<?php 
    $file = fopen("teste.txt", "w+");

    fclose($file);

    unlink("teste.txt"); //remove um arquivo

    echo "Arquivo removido com sucesso!";
?>