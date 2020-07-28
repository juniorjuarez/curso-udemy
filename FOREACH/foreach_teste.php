<?php 
//FOREACH faz interações com arrays e e coleções em php

$arr = [1,2,3,4,5,6];


foreach ($arr as $chave => $valores) {
	echo $chave;
	echo "<br>";
}

$teste = [
		'nome' =>'Yoskos',
		'idade'=>50
		];


function trocaValor1(&$a){

	$a = 25;
	return $a;
}


foreach ($teste as $chave1 => &$valor1){
	if (gettype($valor1) ==='integer') trocaValor1($valor1);

	echo "<hr>$chave1: $valor1<br>";
	}
echo "<br>";
echo var_dump($teste)


?>