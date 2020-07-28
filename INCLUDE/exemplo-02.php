<?php
 //include "exemplo-01.php";
 /*permite incluir um arquivo para utilizar funções especificas, caso o arquivo esteja com erro ou não exista o código continua funcionando, permite tbm utilizar o include_path, para pegar arquivos de um diretorio padrão e permite include dinamico*/


 //require "exemplo-01.php";
/*permite incluir um arquivo para utilizar funções especificas, caso o arquivo esteja com erro ou não exista o sistema retorna um erro fatal, tadiva o require é mais indicado para projetos PHP, a não ser em situações onde o projeto seja compartilhado e desenvolvido via intranet*/

/*include_once e require_once são as mesmas funções, porém abas oferecem o recurso de importar o arquivo apenas uma vez, evitando erros fatais*/

require_once "exemplo-01.php";		


 $resultado = somar(140,150 );

 echo $resultado;




?>