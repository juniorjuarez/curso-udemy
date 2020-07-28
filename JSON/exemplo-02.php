<?php 

$jason ='[{"nome":"Jo\u00e3o","idade":25},{"nome":"Glaucio","idade":30}]';

$data = json_decode($jason, true);
//função json_decode serve para fazer o oposto

var_dump($data);



?>