<?php
    $frase = "O PHP é uma linguagem poderosa.";

    //Obtendo o omprimento da string
    $comprimento = strlen($frase);

    //Transformando para maiusculas
    $maiusulas = strtoupper($frase);

    // Substituindo parte da string
    $novaFrase = str_replace("poderosa", "incrivel", $frase);

    echo "Comprimento da frase: $comprimento\n";
    echo "Frase em maiuculas: $maiusulas\n";
    echo "Nova Frase: $novaFrase\n";