<?php 
    $file = fopen('log.txt', 'a+'); //caminho do arquivo e nome / o que será feito com o arquivo
    //w+ = leitura e escrita, recria o arquivo internamente
    //a+ = apenas escreve no final do arquivo

    //$file agora é uma resource var, uma variavel que contem o caminho de arquivo e tipo de acesso ao arquivo
    fwrite($file, date('Y-m-d H:i:s') . "\r\n");
    fclose($file);

    echo "Arquivo criado com sucesso";
    ?>