<?php

echo "Exibir com echo";
echo "<p> Exibir com echo com elementos html </p>";
print "Usanto o print e elemento html <br>";
printf ("Marina");

$nome = "Esse valor é uma variável.";

echo "<p> $nome </p>";

$valor = 100;
$formato = "R$ %.2f";

echo "Usando o printf:  ";
printf($formato, $valor);

echo "<br> <h2> Operadores Matemáticos </h2>";

$a = 10;
$b = 5;
$c = 2;


echo "<strong> Adição + </strong> <ul> 
<li> $a + $b =  " . ($a + $b) . " </li> </li>
</ul>";

echo "<strong> Subtração - </strong> <ul> 
<li> $a - $b =  " . ($a - $b) . " </li> </li>
</ul>";

echo "<strong> Multiplicação * </strong> <ul> 
<li> $a x $c =  " . ($a*$c) . " </li> </li>
</ul>";

echo "<strong> Divisão </strong> <ul> 
<li> $a/$c =  " . ($a/$c) . " </li> </li>
</ul>";

echo "<strong> Resto da divisão % </strong> <ul> 
<li> $b%$c =  " . ($b%$c) . " </li> </li>
</ul>";

($a++);
echo "<strong> Incremento </strong> <ul> 
<li> 10++ =  " .( $a++) . " </li> </li>
</ul>";
$c--;
echo "<strong> Decremento </strong> <ul> 
<li> 2-- =  " . ($c--) . " </li> </li>
</ul>";

echo "<br> <h2> Operadores de atribuição </h2>";

$a = 20;
echo "<strong> Atribuição </strong> <ul> 
<li> a = 20</li>
<li> variável a recebe o valor da esquerda: $a </li> </li>
</ul>";

$a += 20;
echo "<strong> Atribuição com adição </strong> <ul>
<li> a += 20</li> 
<li> variável a recebe o valor antigo mais o valor da esquerda $a
</li> </li>
</ul>";

$a -= 20;
echo "<strong> Atribuição com Subtração </strong> <ul>
<li> a -= 20</li> 
<li> variável a recebe o valor antigo menos o valor da esquerda $a
</li> </li>
</ul>";

$a *= 3;
echo "<strong> Atribuição com multiplicação </strong> <ul>
<li> a *= 3 </li> 
<li> variável a recebe o valor antigo vezes o valor da esquerda $a
</li> </li>
</ul>";


$a /= 3;
echo "<strong> Atribuição com divisão </strong> <ul>
<li> a /= 20</li> 
<li> variável a recebe o valor antigo dividido pelo valor da esquerda $a
</li> </li>
</ul>";

$a .= "Texto";
echo "<strong> Atribuição com concatenação </strong> <ul>
<li> a .= 'Texto'</li> 
<li> variável a recebe o valor antigo concatenado ao valor da esquerda $a
</li> </li>
</ul>";

$b %= 3;
echo "<strong> Atribuição com adição </strong> <ul>
<li> b %= 3</li> 
<li> variável a recebe o resto da divisão do valor antigo pelo valor da esquerda $b
</li> </li>
</ul>";

echo "<br> <h2> Operadores de comparação </h2>";

echo "<strong> A comparação pode ter dois resultados: verdadeiro ou falso.
<br>
Quando o resultado é verdadeiro, pode aparecer como: true ou 1.
<br>
Quando o resultado é falso, pode aparecer como: false ou ' '.
 </strong>";

echo "<strong> Comparação de igualdade </strong> <ul>
<li> A variável da esquerda é igual a variável da direita?
<li> 10 == 10 é verdadeiro: ".(10 == 10).".
<li> 10 == 2 é falso: ".(10 == 2).".  
</li> </li> </li> </ul>";

echo "<strong> Comparação de diferença </strong> <ul>
<li> A variável da esquerda é igual a variável da direita?
<li> 10 != 10 é falso: ".(10 != 10).".
<li> 10 != 2 é vedadeiro: ".(10 != 2).".
<li> 10 <> 10 é falso: ".(10 <> 10).".
<li> 10 <> 2 é vedadeiro: ".(10 <> 2).". 
</li> </li> </li> </ul>";

echo "<strong> Comparação de é menor que </strong> <ul>
<li> A variável da esquerda é menor que a variável da direita?
<li> 10 < 20 é verdadeiro: ".(10 < 20).".
<li> 10 < 2 é falso: ".(10 < 2).".  
</li> </li> </li> </ul>";

echo "<strong> Comparação de é menor igual que </strong> <ul>
<li> A variável da esquerda é menor igual que a variável da direita?
<li> 10 <= 20 é verdadeiro: ".(10 <= 20).".
<li> 10 <= 10 é verdadeiro: ".(10 <= 20).".
<li> 10 <= 2 é falso: ".(10 <= 2).".  
</li> </li> </li> </ul>";


echo "<strong> Comparação de é maior que </strong> <ul>
<li> A variável da esquerda é maior que a variável da direita?
<li> 10 > 20 é falso: ".(10 > 20).".
<li> 10 > 2 é verdadeiro: ".(10 > 2).".  
</li> </li> </li> </ul>";

echo "<strong> Comparação de é maior igual que </strong> <ul>
<li> A variável da esquerda é maior igual que a variável da direita?
<li> 10 >= 20 é falso: ".(10 >= 20).".
<li> 10 >= 10 é verdadeiro: ".(10 >= 20).".
<li> 10 >= 2 é verdadeiro: ".(10 >= 2).".  
</li> </li> </li> </ul>";

echo "<h2>Operadores Lógicos</h2>
    <table>
        <tr>
            <th>Operador</th>
            <th>Descrição</th>
            <th>Exemplo</th>
        </tr>
        <tr>
            <td>AND (&&)</td>
            <td>Retorna verdadeiro se ambas as expressões forem verdadeiras.</td>
            <td>Exemplo: (10 == 10 && 5 == 5) resulta em verdadeiro.</td>
        </tr>
        <tr>
            <td>OR (||)</td>
            <td>Retorna verdadeiro se pelo menos uma das expressões for verdadeira.</td>
            <td>Exemplo: (10 == 10 || 5 == 6) resulta em verdadeiro.</td>
        </tr>
        <tr>
            <td>NOT (!)</td>
            <td>Inverte o valor lógico de uma expressão. Retorna verdadeiro se a expressão for falsa e vice-versa.</td>
            <td>Exemplo: !(10 == 5) resulta em verdadeiro.</td>
        </tr>
        <tr>
            <td>XOR</td>
            <td>Retorna verdadeiro se uma das expressões for verdadeira, mas não ambas.</td>
            <td>Exemplo: (10 == 10 XOR 5 == 6) resulta em verdadeiro.</td>
        </tr>
    </table>";

echo "<h2> Mistura de operações </h2> 
<ul>
<li> 2*10 == 10+10 é verdadeiro
<li> 2+10/2 != (2+10)/2  
</li></li></ul>"

?>

