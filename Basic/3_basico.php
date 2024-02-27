<?php
    function calcularIdade($anoNascimento) {
        $idade = date("Y") - $anoNascimento;
        return $idade;
    }


    $anoDeNasscimento = 2001;
    $idadeAtual = calcularIdade($anoDeNasscimento);

    echo "Você tem $idadeAtual anos de idade";