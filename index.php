<form>
    <input type="text" name="nome" id="">
    <input type="date" name="nascimento" id="">
    <input type="submit" value="OK">
</form>
<?php

if (isset($_GET)){


   foreach ($_GET as $key => $value){
        echo "Nome do campo: ". $key;
        echo "<hr>";
        echo "Valor do campo: " .$value;
        echo "<hr>";
   }
}
?>
