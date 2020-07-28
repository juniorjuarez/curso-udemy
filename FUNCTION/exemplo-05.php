<?php

$a =10;
//quando se tem um e comercial (&), siginifica que esta fazendo passagem de parâmetro por referência
//quando não tem, o valor original da variavel permanece o mesmo.
function trocaValor(&$ca){

	$ca += 50;
	return $ca;

}

//echo "<br>";

echo $a.' informei primeiro mas ta aparecendo nao sei pq';
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
?>