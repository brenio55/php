<?php 
function test($callback){
    $callback();
}

test(function (){
    echo "Terminou.";
}); //isto é uma função anônima em PHP. Também pode ser feito desta forma:

    echo "<br>";

    $fn = function($a){
        var_dump($a);
    };

    $fn("oi");
?>