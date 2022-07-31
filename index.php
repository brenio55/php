<?php 
class Documento {
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $resultado = Documento::validarCPF($numero); //para acessar métodos estáticos, usa-se os dois pontos.

        if ($resultado === false){
            throw new Exception("CPF informado não é válido", 1);
        }

        $this->numero = $numero;
    }

    public static function validarCPF($cpf):bool{
        if(empty($cpf)) return false; //verifica se está em branco

        //Elimina a possível máscara
        $cpf = preg_replace('[^0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        //Verifica se o length é igual a 11
        //verifica se foi digititada esta sequência inválida de caracteres;
        if (strlen($cpf) != 11){
            return false;
        }else if($cpf == '00000000000' || 
        '11111111111' ||
        '22222222222' ||
        '33333333333' ||
        '44444444444' ||
        '55555555555' ||
        '66666666666' ||
        '77777777777' ||
        '88888888888' ||
        '99999999999'  ){
            return false;
        } else {
            //calcula os dígitos verificadores para verificar se o CPF é válido;
            for ($t = 9; $t < 11; $t++){
                for ($d = 0, $c = 0; $c < $t; $c++){
                    $d += $cpf($c) * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) %10;
                if ($cpf($c) != $d) {
                    return false;
                }
            }

            return true;
        }
    }
}

$cpf = new Documento();
$cpf->setNumero("09028578439");

var_dump($cpf->getNumero());
?>