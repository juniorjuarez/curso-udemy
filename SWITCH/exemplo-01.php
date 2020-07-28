<?php 


//função date define um valor para a data atual de acordo com o elemento dentro dos parenteses.
$diaDaSemana = date ("w");



echo $diaDaSemana."<BR>";
//switch define uma interação de reposta para cada situação dentro dos casos registraso.

	case 0:
		echo "Domingo";
	break;

	case 1:
		echo "Segunda-feira";
	break;

	case 2:
		echo "Terça-feira";
	break;
	
	case 3:
		echo "Quarta-feira";
	break;

	case 4:
		echo "Quinta-feira";
	break;

	case 5:
		echo "Sexta-feira";
	break;

	case 6:
		echo "Sabado";
	break;

	// serve para definir uma resposta para um caso não registrado.
	default:
		echo "Data invalida";
}


 ?>