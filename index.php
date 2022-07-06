<?php
  $nome1 = "João";
  $sobrenome = "Rangel";
  $nomeCompleto = $nome1 . " " . $sobrenome;
  echo $nomeCompleto;

  exit; // -> para a execução do código

  echo "<br>";

  unset($nome1); //exclui uma variável da memória

  echo $nome1;
?>
