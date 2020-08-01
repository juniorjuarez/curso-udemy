<?php

class Pessoa{

	public $nome = "Rasmus Lerdof";
	protected $idade = 48;
	private $senha = '123456casa';

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";


	}
}

$obejeto = new Pessoa();

//echo $obejeto->nome . "<br>";
$obejeto->verDados();


?>