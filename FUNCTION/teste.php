<?php 

$teste  =['nome' =>'Yoskos',
		'idade'=>'Menos de 1000 anos'];




function trocaValor1($a){

	$a = 50;
	return $a;
}

echo '<br>';
echo trocaValor1($teste['idade']);
echo '<br>';

var_dump($teste);
echo '<br>';

function trocaValor2(&$b){

	$b = 50;
	return $b;
}

echo '<br>';
echo trocaValor2($teste['idade']);
echo '<br>';
	
var_dump($teste);


?>