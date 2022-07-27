<?php 
$dt = new DateTime();

$periodo = new DateInterval("P15D"); //periodo de 15 dias

echo $dt->format("d/m/y h:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/y h:i:s");
?>