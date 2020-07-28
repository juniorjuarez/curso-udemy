<?php 

//função com a possibilidade de passar mais de um prâmetro
//OBS:parâmetros obrigatorios devem ser colocados no lado esquerdo, ou sendo os promeiros
function ola($texto, $periodo ="bom dia"){

	return "Ola $texto! $periodo <br>";

}

echo ola("Mundo", "Bom dia");
echo ola ("gente","");
echo ola("Junior", "boa tarde");
echo ola("Hello");

?>