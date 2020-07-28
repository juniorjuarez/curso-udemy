<?php 

require_once("config.php");
echo $_SESSION["nome"];

//limpa o valor de uma sessão.
session_unset();
]//destroi uma sessão iniciada
session_destroy();



?>