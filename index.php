<?php 
    session_start();
    echo session_id()."<br>";

    echo "<a href='novoReg.php'>Gerar novo registro</a><br>";
    echo session_save_path(); //retorna onde está salvo o arquivo temporário de sessão dentro do PC.

    
?>