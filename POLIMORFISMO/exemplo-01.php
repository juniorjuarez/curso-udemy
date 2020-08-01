<?php 

abstract class Animal{

	public function falar(){
		return "Som";
	}

	public function mover(){

		return "Anda";
	}
}

class Cachorro extends Animal{

	public function falar(){

		return "Late";
	}
}


class Gato extends Animal{

public function falar(){

		return "Miar";
	}
}


class Passaro extends Animal{

	public function falar(){

		return "Canta";
	}

	public function mover(){

		return "Voar e " .parent::mover();
	}

}




$pluto = new Cachorro();

$garfield = new Gato();

$piupiu = new Passaro();


echo $pluto->falar()."<br>";

echo $pluto->mover()."<br>";

echo $garfield->falar()."<br>";

echo "<hr>";

echo $piupiu->mover()."<br>";

echo $piupiu->falar()."<br>";