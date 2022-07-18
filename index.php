<?php 
   $a = 10;

function trocaValor(&$b){
    $b += 50;
    return $b;
}

echo trocaValor($a);
echo "<br>";
echo $a; //$a troca para 60, pois o valor foi alterado para o endereço de memória citado. 
// isto se chama parâmetro passado por referência.
?>