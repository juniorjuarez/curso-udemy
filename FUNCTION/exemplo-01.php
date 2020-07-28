<?php 

function ola1(){

	echo "Olá Mundo! <br>";
}

function ola2(){

	return "olá Mundo (com return)";
}

ola1();


$frase = ola2();
echo strlen($frase);


?>