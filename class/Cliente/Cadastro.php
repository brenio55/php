<?php

namespace Cliente; // [e uma maneira de agrupar as classes dentro de um grupo chamado Cliente, criado por este código que chamaos de Namespace

class Cadastro extends \Cadastro { //volta para a raiz
    
    public function registrarVenda(){
        echo "Foi registrada uma venda para o cliente ".$this->getNome();
    }

    
}

?>