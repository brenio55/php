<?php 
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese"); // Linux, o padrão é escrito assim: pt_BR; UTF: pt_BR.utf-8; Windows: portuguese;

echo strftime("%A %B"); //todas as variações podem ser encontradas na documentação. -> Esta função é sensível ao setlocale.
?>