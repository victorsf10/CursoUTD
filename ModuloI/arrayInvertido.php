<?php

$nomes = array();
$i = 0;
//Digita o número referente a pessoa, se quiser acabar a sequência só digitar 0
while (trim(fgets(STDIN)) != 0) {
    echo "Digite o nome da pessoa: ";
    $nomes[$i] = trim(fgets(STDIN));
    $i++;
}
//Essa função mostra o array invertido

$nomesInvertidos = array_reverse($nomes);
print_r($nomesInvertidos);

//Eu tbm poderia imprimir o vetor invertido usando o while;
/**$i = count($nomes) - 1;
while ($i >= 0) {
    echo "O nome é : $nomes[$i]\n";
    $i--;
}*/
