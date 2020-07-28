<?php

//array bi-dimensional
$carros[0][0] ="GM";
$carros[0][1] ="Camaro";
$carros[0][2] ="Onyx";
$carros[0][3] ="Cobalt";


$carros[1][0] ="Ford";
$carros[1][1] ="Fiesta";
$carros[1][2] ="Eco Esport";
$carros[1][3] ="Fusion";


echo $carros[0][2];

echo "<BR>";


//retorna o ultimo valor da posição atual do array bi-dimencional
echo end($carros[1]);