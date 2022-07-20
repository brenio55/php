<?php 
    function br(){
        echo "<br />";
    }


    function ex1(){
        function soma(int ...$valores){
            return array_sum($valores);
        }

        echo soma(2, 2);
        br();
        echo soma (2, 4);
        br();
    }

    function ex2(){
        function soma2(int ...$valores):string {
            return array_sum($valores);
        }

        echo soma2(2, 2);
        br();
        echo soma2(2, 4);
        br();
    }

    ex1();
    br();
    ex2();
?>