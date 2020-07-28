<?php

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$resultado = Documento::validaCPF($numero);
		
		if($resultado === false){

			throw new Exception("CPF Informado não e valido", 1);
			
		}

		$this->numero = $numero;
	}

	public static function validaCPF($cpf):bool{


		//Verifica se o numero foi informado
		 if(empty($cpf)) {
        return false;
    }
	//Elimina possivel mascara 
    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    //cerifica se o numero digitado informado e igual a 11
    if (strlen($cpf) != 11) {
        echo "length";
        return false;
    }
    //verifica se nenhuma das sequencias invalidas abaixo
    //foi digitada, caso arfimativo, retorna falso
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;
    	//calcula os digitos verificadores para verificar se o cpf e valido
     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }
	}
}
/*
$cpf = new Documento();
$cpf->setNumero("12378030630");

var_dump($cpf->getNumero());

*/

var_dump(Documento::validaCPF("98296335000"));

?>