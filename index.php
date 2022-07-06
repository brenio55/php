<?php
  $nome = "Gláucio";

  function teste(){
    global $nome;
    echo $nome;
    echo "<br>";
  } 

  function teste2(){
    $nome = "Glauciano";
    echo $nome;
    echo "<br>";
  }

  teste();
  teste2();
?>
