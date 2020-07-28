<?php

//serve para recuperar uma sessão
session_id('neugh0n1p27ng6q71b863rmat7');

require_once("config.php");

//serve para criar sessões sempre que atualziar a pagina
session_regenerate_id();

echo session_id();

echo '<br>';

var_dump($_SESSION);


 ?>