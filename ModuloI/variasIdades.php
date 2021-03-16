<?php

$conjuntoIdades = array();
$maiorIdade = 0;
$menorIdade = 0;
for ($i = 0; $i <= 7; $i++) {
    echo "Digite a $i idade: ";
    $idade = trim(fgets(STDIN));
    $conjuntoIdades[$i] = $idade;
    if ($idade >= 18) {
        $maiorIdade++;
    } else {
        $menorIdade++;
    }
}

for ($i = 0; $i <= 7; $i++) {
    echo "As idades são: $conjuntoIdades[$i]\n";
}

echo "Existem $maiorIdade maior de idade\n";
echo "Existem $menorIdade menor de idade\n";
