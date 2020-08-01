<?php 

class Documento {

	private $numero;

	public function getNumero(){

		return $this->numero;

	}

	public function setNumero($n){

		$this->numero = $n;

	}
}

class CPF extends Documento {

	public function validar():bool{

		$numeroCPF = $this->getNumero();

		if(strlen($numeroCPF) == 10){
			return true;
		}

		else

		return false;

	}
}


$identidade = new CPF();

$identidade->setNumero("1234567841");

var_dump($identidade->validar());

 ?>