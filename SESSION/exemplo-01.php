<?php 

//importa um arquivo com a função de criação de sessões, ou session
require_once("config.php");

//atribui um valor a sessão criada
$_SESSION["nome"] = "HCODE";

//imprime detalhes de uma variavel
var_dump($_SESSION);

?>