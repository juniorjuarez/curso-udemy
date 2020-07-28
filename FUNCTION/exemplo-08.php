<?php 

function soma( int ...$valores):string{

	return array_sum($valores);

}

echo var_dump(soma(2,2));
echo "<br>";
echo soma(25,40);
echo "<br>";
echo soma(2.5,2.4);
echo "<br>";

?>