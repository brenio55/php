<?php 
    session_start();
    session_regenerate_id();
    echo session_id()."<br>";

    echo "<a href='index.php'>Voltar</a>";
?>