<?php

echo "Digite uma data no formato DD/MM/AAAA: ";
$dataCompleta = trim(fgets(STDIN));

/**Utilizando como padrão DD/MM/AAAA, se for usar "." invés das "/" precisa alterar dentro
da função explode
*/
$data = (explode("/", $dataCompleta));

//Cria as 3 variáveis dia, mês e ano
list($dia, $mes, $ano) = $data;

echo "Dia $dia\n";
echo "Mes $mes\n";
echo "Ano $ano\n";
