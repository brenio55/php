<?php 
class Pessoa {
    public $nome;

    public function falar(){
        return "O meu nome é ".$this->nome;
    }

    // o $this-> serve pra referenciar um atributo ou método dentro de outro método.
    //fora da classe, pode usar normal.
}

    $glaucio = new Pessoa(); // o parêntese só é obrigatório quando se tem o método Construtor (que será explicado nas próximas aulas)
    $glaucio->nome = "Glaucio Daniel"; //acessei o atributo nome, porque instanciei acima a classe pessoa. Logo então, adicionei a string ao atributo referente.

    echo $glaucio->falar();
?>