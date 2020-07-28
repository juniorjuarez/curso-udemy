<?php 


//TIMESTAMP: Um timestamp basicamente representa um instante único, um ponto específico na linha do tempo, e seu valor corresponde a uma determinada quantidade de tempo decorrida a partir de um instante inicial.

// a Função strtotime transforma uma data em um valor especifico de timestamp.

//ela aceitas interações como, dia, meses, anos, o agora, ontem, convertendo em timestamp, assim permitindo gerar um valor de data, hora, para qualquer fim especifico.
$ts = strtotime("2001-09-11");
$ts2 =strtotime("2020-07-12 + 5 Year");


echo date("l d/m/Y", $ts);


echo "<br>";

echo date("l d/m/Y", $ts2);


?>