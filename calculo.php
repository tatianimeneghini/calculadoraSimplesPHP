<?php
include ("./calculadora.php");

if($_POST){
    $valor1 = $_POST['txt1'];
    $valor2 = $_POST['txt2'];
    $operacao = $_POST['operacao'];
    
    if ($operacao == 'Soma') {
        $total = $valor1 + $valor2;
        echo $total;
    } elseif ($operacao == 'Subtração') {
        $total = $valor1 - $valor2;
        echo $total;
    } elseif ($operacao == 'Multiplicação') {
        $total = $valor1 * $valor2;
        echo $total;
    } elseif ($operacao == 'Divisão') {
        $total = $valor1 / $valor2;
        echo $total;
    }
    return;
}