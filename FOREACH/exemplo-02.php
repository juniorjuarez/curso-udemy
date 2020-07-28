<form method="POST">
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="ok">
</form>

<?php 

if(isset($_POST)){

	foreach ($_POST as $key => $value) {
		
		echo "Nome do campo: " .$key. "<br>";
		echo "valor do campo: ". $value;
		echo "<HR>"; 

	}


}

 ?>