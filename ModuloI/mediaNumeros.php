<?php

$valores = array();

//Digitar 10 números e calcular a média
for ($i = 0; $i < 10; $i++) {
    echo "Digite o $i numero: ";
    $numeros = trim(fgets(STDIN));
    $valores[$i] = $numeros;
}
$soma = 0;
$media = 0;
for ($i = 0; $i < 10; $i++) {
    $soma = $soma + $valores[$i];
}
    $media = $soma / 10;
    echo "A media é $media\n";
    echo "A soma é $soma";
