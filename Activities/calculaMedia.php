<?php
/*
 ● Crie uma função chamada calculaMedia que recebe três números como
parâmetros e retorna a média desses números.
● Use a função calculaMedia para calcular a média de 10, 15 e 20, e exiba o
resultado.
 */
    function calculaMedia($primeiro, $segundo, $terceiro) {
        $soma = ($primeiro + $segundo + $terceiro) / 3;
        return $soma;
    }

    $media = calculaMedia(10, 5,9);
    echo $media;
