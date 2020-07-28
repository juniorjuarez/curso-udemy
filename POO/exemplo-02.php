<?php 

class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){
		//metodo Get serve para pegar o valor do atributo

		return $this->modelo;
	}

	public function setModelo($modelo){
		//metodo Set serve para alterar o valor do atributo
		 $this->modelo = $modelo;

	}


	public function getMotor():float{

		return $this->motor;
	}


	public function setMotor($motor){

		$this->motor = $motor;
	}


	public function getAno():int{

		return $this->ano;

	}


	public function setAno($ano){


		$this->ano = $ano;
	}


	public function exibir(){

		return array(//inicio array

			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()

		);//fimArray

	}




}



$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");


print_r($gol->exibir());
echo "<br>";

var_dump($gol->exibir());
echo"<br>";


$exibir = $gol->exibir();


foreach ($exibir as $key => $value) {
	echo "o $key é:$value" ;
	echo"<br>";
}


?>