<?php

/*
 Crie uma função chamada calculaSalario que recebe o número de horas
trabalhadas e o valor da hora como parâmetros, e retorna o salário total.
 */

function calculaSalario($horasTrabalhadas, $valorHora,$bonus,$imposto)
{
    $total = (($horasTrabalhadas*$valorHora) + $bonus);
   echo $valorFinal =  $total - ($total / 100 * $imposto);
}


calculaSalario(40,15,50,10);
