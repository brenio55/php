<?php 
    class Endereco {
        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($a, $b, $c){
            $this->logradouro = $a;
            $this->numero = $b;
            $this->cidade = $c;
        }

        public function __destruct(){
            var_dump('Destruir');
        }

        public function __toString(){
            return $this->logradouro. ", ".$this->numero. ", ".$this->cidade;
        } //quando derem um ECHO no objeto diretamente, o método mágico to string será executado.

        public function getLogradouro(){

        }

        public function getNumero(){
            
        }

        public function getCidade(){
            
        }
    }

    $meuEndereco = new Endereco('Rua Valdemar Saraiva Leão', '123', 'Santos');

    var_dump($meuEndereco);
    echo '<br>';
    echo $meuEndereco;
    echo '<br>';
    unset($meuEndereco);
    
?>