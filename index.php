<?php 
    session_start();
    $_SESSION['nome'] = 'Brenio';

    echo "<a href='novoArq.php'>Ver seu nome</a>";
?>