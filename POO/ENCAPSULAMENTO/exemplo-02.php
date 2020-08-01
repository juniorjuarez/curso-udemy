<?php

class Pessoa{

	//qualuqer um pode acessar
	public $nome = "Rasmus Lerdof";
	//acessa apenas na propria classe ou an herança
	protected $idade = 48;
	//acessa apenas na prorpia classe
	private $senha = '123456casa';

	//função de ger, para pegar os dados e mostrar
	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";


	}
}

//classe filho
class Programador extends Pessoa {

//mesma função da classe pai
public function verDados(){

		echo get_class()."<BR>";

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";


	}
}







//a diferença ocorre na hora de chamar a função, os objetos privados so podem ser vistos na classe pai
//ou seja, a classe pessoa
$obejeto = new Programador();

//echo $obejeto->nome . "<br>";
$obejeto->verDados();

$senhor = new Carro();




?>