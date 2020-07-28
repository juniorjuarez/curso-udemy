<?php

// foreach significa, para cada, faça.
// ou seja, para cada comando informado, faça

$meses = array(
	"janeiro", "fevereiro", "marco",
	"abril", "maio", "junho", "julho",
	"agosto", "setembro", "outubro",
	"novembro", "dezembro"
	);

foreach ($meses as $index => $mes) {
	
	echo "o indice:".$index."<BR>";
	echo "o mes é:".$mes. "<BR>";
}

?>