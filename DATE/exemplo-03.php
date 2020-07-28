<?php


//a função setlocale define informações locais

// abaixo esta sendo definido, para windows, linux e HTML5 que tudo seja traduzido para portugues.
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo strftime("%A %d de %B");

?>