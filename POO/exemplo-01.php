<?php 

class Pessoa{//classe Pessoa

		public $nome; //class atributo

		public function falar(){// metodo

			return "O meu nome e ".$this->nome;

		}


}


$glaucio = new Pessoa();

$glaucio->nome = "Glaucio Daniel";

echo $glaucio->falar();




?>