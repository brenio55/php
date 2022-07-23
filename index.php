<?php 
    echo date("d/m/Y"); // dd/MM/YYYY
    echo "<br>";
    echo date("d/m/Y H:i:s"); // dd/MM/YYYY H:min:sec

    echo time(); //exibe a quantidade de segundos passados até hoje
    echo "<br>";
    $ts = strtotime('2001-09-11'); //converte string para timestamp (numero de segundos desde 1970 até agora)

    echo "<br>";
    echo date("l, d/m/Y", $ts);
?>