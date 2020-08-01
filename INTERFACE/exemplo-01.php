<?php 


//uma interfasce serve para definir padrões que serão utilizados em uma classe
interface Veiculo{

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMacha($marcha);

}



//essa e uma classe abstrata que herda os padrões da interface
//ELA NÃO E DECLARADA, SE CRIA UMA CLASSE FILHO ANTES
abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){

		echo "O veiculo acelerou ate a velocidade de ". $velocidade. "km/h<br>";
	}
	public function freiar($velocidade){

		echo "O veiculor ate a freiou ate a velocidade de". $velocidade. "km/h<br>";
	}

	public function trocarMacha($marcha){

		echo "O veiculo engatou a marcha:".$marcha."<br>";
	}

}

//clase que herda da classe ligada declarada a partir da interface
class Delrei extends Automovel{

	public function empurrar(){

	}
}

$carro = new Delrei();

$carro->acelerar(200);

$carro->trocarMacha(4);

?>