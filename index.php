<?php 
    require('config.php');

    $filename = "usuarios.csv";

    if (file_exists($filename)){
        $file = fopen($filename, "r");

        $headers = explode(",", fgets($file)); //transforma uma série de dados em uma array. Primeiro dado: separador. Segundo dado: resource.

        $data = [];

        while ($row = fgets($file)){ //retornando false (vazio), o while é finalizado
            $rowData = explode(",", $row);
            $linha = [];

            for ($i = 0; $i < count($headers); $i++){
                $linha[$headers[$i]] = $rowData[$i];
            }

            array_push($data, $linha);

        }

        fclose($file);

        echo json_encode($data);
    }
?>