<?php

$arquivo = fopen("arquivos.txt",'w+');
fwrite($arquivo, 'Terceira Linha\n');
$arquivo = fopen("arquivos.txt",'r');
$conteudo = fread($arquivo, 1024);
fclose($arquivo);
echo $conteudo;