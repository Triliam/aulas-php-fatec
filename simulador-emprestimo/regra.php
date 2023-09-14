<?php

$nome = $_POST['nome'];
$cliente = $_POST['cliente']; //retorna o valor: Sim ou Não
$score = $_POST['score'];
$valor = $_POST['valor'];
$parcelas = $_POST['parcelas'];
$seguro = $_POST['seguro']; //quando selecionado retorna: on

echo $seguro;
var_dump($seguro);

$iof = 0.38;
$tarifaNCliente;
$juros;
$valorJuros;
$valorJurosIOF;
$valorComIOF;
$valorEmprestimo;
$valorParcelas;

if($score >=0 && $score <= 299){
    $juros = 0.2;
} elseif($score >=300 && $score <= 499) {
    $juros = 0.15;
} elseif($score >=500 && $score <= 699) {
    $juros = 0.1;
} elseif($score >=700 && $score <= 1000) {
    $juros = 0.05;
};

// if($seguro == 'on'){
//     $seguro = 49.90;
// }else {
//     $seguro = 0;
// };

if($seguro != null) {
    $seguro = 49.90;
} else {
    $seguro = 0;
}

if($cliente == 'Sim') {
    $juros = 0.03;

    $valorJuros = ($valor * $juros);
    $valorJurosIOF = ($valor + $valorJuros) * $iof;
    $valorComIOF = $valor + $valorJuros + $valorJurosIOF;
    $valorEmprestimo = $valorComIOF + $seguro;

    $valorParcelas = $valorEmprestimo/$parcelas;

    echo "Valor das parcelas: R$ $valorParcelas";
    echo "Quantidade de parcelas: $parcelas";
    echo "Taxa de Juros: $juros %";
    echo "Custo Efetivo Total: R$ $valorEmprestimo";
    echo $seguro;


} else {
    $tarifaNCliente = 35.00;

    $valorJuros = ($valor * $juros);
    $valorJurosIOF = ($valor + $valorJuros) * $iof;
    $valorComIOF = $valor + $valorJuros + $valorJurosIOF;
    $valorEmprestimo = $valorComIOF + $seguro + $tarifaNCliente;

    $valorParcelas = $valorEmprestimo/$parcelas;

    echo "Valor das parcelas: R$ $valorParcelas";
    echo "Quantidade de parcelas: $parcelas";
    echo "Taxa de Juros: $juros %";
    echo "Custo Efetivo Total: R$ $valorEmprestimo";
    echo $seguro;
}; 

