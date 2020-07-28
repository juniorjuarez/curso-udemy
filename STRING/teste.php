<?php 


$name = 'Hcode Treinamentos';
 
$replace = 'Cursos';
 
//SUBSTR RETORNA UAM PARTE DA STRING PRE DEFINIDA
//strpos retorna a numeração de uma string
$new_name = substr($name, 0, strpos($name, 'T')) .$replace;

echo $new_name;

echo '<BR>';
//echo strpos($replace, '');

?>

