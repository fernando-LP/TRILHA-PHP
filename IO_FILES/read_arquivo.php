<?php


$file = fopen("arquivos.txt",'r');

$conteudo = fread($file, filesize('arquivos.txt'));
fclose($file);
echo $conteudo;