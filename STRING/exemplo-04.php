<?php 

$frase ="Tudo o que um sonho precisa para ser realizado é alguém que acredite que ele possa ser realizado.";


$palavra = "precisaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";

//strpos retorna a posição de um conteudo especifico da string
$q = strpos($frase, $palavra);


//captura informação de uma variavel a partir de uma posição definida
$texto = substr($frase,0,$q);

//strlen serve para contar a quantidade de posições de uma variavel
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto);

?>