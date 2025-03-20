<?php
// Função de soma
function soma($a, $b) {
    return $a + $b;
}

// Função de subtração
function subtracao($a, $b) {
    return $a - $b;
}

// Função de multiplicação
function multiplicacao($a, $b) {
    return $a * $b;
}

// Função de divisão
function divisao($a, $b) {
    if ($b == 0) {
        return "Erro: Divisão por zero não permitida!";
    }
    return $a / $b;
}

// Valores para operação
$num1 = 10;
$num2 = 5;

// Operações
echo "Soma: " . soma($num1, $num2) . "<br>";
echo "Subtração: " . subtracao($num1, $num2) . "<br>";
echo "Multiplicação: " . multiplicacao($num1, $num2) . "<br>";
echo "Divisão: " . divisao($num1, $num2) . "<br>";
?>
