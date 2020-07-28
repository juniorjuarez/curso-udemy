<?php 



$pessoas = array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>25
));

array_push($pessoas, array(
	'nome'=>'Glaucio',
	'idade'=>30));
print_r($pessoas);

echo '<br>';

//json é uma função que serve para converter um array assim permitindo a transferencia e reaproveiveitamento dos dados 
//outros programas, banco de dasdos, e similar ao XML todavia e mais basico e rapido
echo json_encode($pessoas);

// a função json_encode serve para transformar uma array em jason


?>