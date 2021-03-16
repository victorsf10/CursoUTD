<?php

$maiorNumero = array();

for ($i = 0; $i <= 4; $i++) {
    echo "Digite o $i numero: ";
    $numeros = trim(fgets(STDIN));
    $maiorNumero[$i] = $numeros;
}

for ($i = 0; $i <= 4; $i++) {
    if ($maiorNumero[0] <= $maiorNumero[$i]) {
        $maiorNumero[0] = $maiorNumero[$i];
    }
}
echo "O maior é $maiorNumero[0]\n";
