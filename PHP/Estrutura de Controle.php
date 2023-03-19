<?php

//IF ELSE
$notaFiscal = 9;

if ($notaFiscal == 10) {
    echo 'Valor igual a 10';
}else if ($notaFiscal < 10) {
    echo 'Valor menor que 10'; 
}else {
    echo 'Valor maior que 10';
}

//SWITCH CASE
$opcao = 1;
switch ($opcao) {
    case "1";
        echo 'Você escolheu a opção de número 1';
        break;
    case "2";
        echo 'Você escolheu a opção de número 2';
        break;
    case "3";
        echo 'Você escolheu a opção de número 2';
        break;
    default:
        echo 'Opção de escolha inválida.';
    break;

}

//FOR
$nomes = ["Argus", "Gudi", "José"];
$count = count($nomes);

/* for ($i=0; $i<$count; $i++) {
    echo "$nomes[$i]";
}

//FOREACH (substituir o for)
foreach ($nomes as $key => $nome) {
    echo "$key : $nome";
} */

//WHILE
$contador = 0; //contador fora do laço de repetição
while ($contador < $count) {
    echo "$nomes[$contador]";
    $contador++; //incremento dentro do  laço
}

//DO WHILE
$a = 0;
do {
    echo "$nomes[$a]";
    $a++;
}while ($a < $count);

?>