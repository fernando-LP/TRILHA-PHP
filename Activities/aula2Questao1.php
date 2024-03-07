<?php
/*
 *Crie um algoritimo com uso de um for, que solicite a entrada de um numero e exiba a tabiada de 0 a 10 de acordo com o número solicitado
 */


echo "Digite o numero: ";
$numeroInformado = trim(fgets(STDIN));

for ($i=0; $i<11; $i++){
    $tabuada = $numeroInformado * $i;
    echo "$numeroInformado x $i = $tabuada" . PHP_EOL;
}
