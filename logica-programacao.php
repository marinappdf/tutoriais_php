<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão de PHP com HTML</title>

    <link rel="stylesheet" href="estilo.css">
</head>
< >

    <h1>Revisando a lógica de programação</h1>

    <p> O objetivo dessa aula, e dessa página, é revisarmos estruturas básicas de lógica de programação e entendermos como elas funcionam em PHP.</p>
<p> Vocês podem seguir o conteúdo pela seção 2.20, na página 32, da apostila.</p>
<p>Acompanhem também a aula pelo código fornecido pela prof.</p>


<h2> Tipos de Dados Primitivos </h2>
 <p> Em PHP, as variáveis são declaradas com o siímbolo $ . Qualquer palavra que siga o $ é uma variável. Não é preciso determinar o tipo (inteiro, string, boolean), mas é preciso adicionar aspas sempre que for uma string.</p>

 <code> 
    $variavel1 = 42;
    <br>
    $variavel2 = "Olá, Mundo!";
    <br>
    $variavel3 = 3.14;
    <br>
    $variavel4 = true;
    <br>
 </code>
  <br>
    <?php
    $variavel1 = 42;
    $variavel2 = "Olá, Mundo!";
    $variavel3 = 3.14;
    $variavel4 = true;

    echo "A variável 1 é " .gettype($variavel1); 
    echo "<br>";
    echo "A variável 1 é " .gettype($variavel2);  
    echo "<br>";
    echo "A variável 1 é " .gettype($variavel3);  
    echo "<br>";
    echo "A variável 1 é " .gettype($variavel4);  
    ?>

<h3>Constantes</h3>

<p>Constantes são identificadores para valores simples. O seu conteúdo não muda durante a execução do código. Sua criação segue a sintaxe: <code>define ("CONSTANTE";"Valor")</code> </p>


<h2> Array: listas</h2>

<p>Arrays são tipos de dados mais complexos do que os mencionados anteriormente. Arrays são conjuntos de dados, são listas de dados. Por isso, podemos ter um array que é uma lista de números inteiros, ou uma lista de strings, ou, ainda, uma mistura de vários tipos de dados.</p>
<p>Os arrays são uma entidade só dividida em vários itens. Como se fosse uma caixa cheio de caixas dentro. Cada caixa guarda um valor, uma variável, ou, ainda, outras caix (arrays).</p>

<h3>Criar e visualizar um array</h3>

<p> Para criar um array, usa-se a estrutura "array()". Seus itens vão dentro do parênteses, separados por vírgulas. A seguir, um array de números inteiros.</p>
<code>  
    $meuArray = array(10, 20, 30, 40);
</code>
<p> Um array de string:</p>
<code>  
    $meuArray = array("Fábio", "Marcos","Cláudia", "Susana");
</code>
<p>Um array com diferentes tipos de elementos:</p>
<code>  
    $meuArray = array("Marcos", 45, 1.87, true);
    </code>

<p> A exibição do array não ocorre da mesma maneira das outras variáveis. Veja bem, quando <code>echo</code> ou <code>print</code> são usados em um array, o PHP tenta tratar o array como uma string. Como os arrays não podem ser convertidos diretamente em uma string, o PHP exibe "Array" para indicar que a variável é um array, mas não exibe seus elementos.</p>
<p> Por isso, o <code>print_r()</code> foi criado para exibir informações sobre arrays e objetos de forma mais detalhada e legível, mostrando os índices e valores dos elementos do array.</p>
<?php
echo "Os elementos de cada array são: <br>";
$meuArray1 = array(10, 20, 30, 40);
print_r($meuArray1);
echo "<br>";
$meuArray2 = array("Fábio", "Marcos","Cláudia", "Susana");
print_r( $meuArray2);
echo "<br>";
$meuArray3 = array("Marcos", 45, 1.87, true);
print_r( $meuArray3);
echo "<br><br>";
?>

<?php
echo $meuArray1;
?>

<br><p>Se eu tentar concatenar o array a um texto, não funciona porque a variável é transformada em texto: <code>print_r($meuArray1."< br >")</code>, veja o que acontece: <br>

<?php
print_r($meuArray1."<br>");
?>

<br><p><strong>ATENÇÃO! Esse tipo de problema é comum no PHP, é preciso estar atento ao fato de que a exibição de valores com echo e print tentam sempre transformar os valores em String. Nem sempre esse processo é bem sucedido, ocasionando erros.</strong>  </p> 

<h3>Acessar elementos do Arrray</h3><br>

<br><p>O acesso a cada elemento funciona de maneira similar a maioria das linguagens de programação: o índice começa do 0 e segue até o  último elementos. Isso siginifica que o primeiro elemento de um array sempre tem índice zero, o segundo sempre tem índice um, o teceiro sempre tem índice dois, etc.</p>
<p>Repare como, no PHP, o índice do array já é destacado:</p>

<?php
print_r($meuArray1);
?>

<br><p>Para acessar cada elemento, o índice é colocado entre colchetes assim: <code>$meuArray1[0]</code></p><br>
<?php
echo "Índice Zero: ";
print_r($meuArray1[0]);
echo "<br>Índice Um: ";
print_r($meuArray1[1]);
echo "<br>Índice Dois: ";
print_r($meuArray1[2]);
echo "<br>Índice Três: ";
print_r($meuArray1[3]);
?>

<br><p>Bom lembrar que o acesso a cada elemento não é só para bonito, podemos fazer operações matemáticas com esses elementos:</p>
<p> A multiplicação do primeiro e do segundo número do array: <code>$resultado=$meuArray[0]*$meuArray[1]</code> </p>

<?php

print_r($meuArray1[0]*$meuArray1[1]);
?>


<br><br><h3>Obtendo informações sobre o array.</h3>

<p> Para descobrir qual o tipo de da variável do <code>$meuArray</code>, usa-se o método <code>gettype()</code>, com o array como argumento:</p>
<code>gettype($meuArray);</code> <br> 
<?php
echo gettype($meuArray1);
?>
<br><p>Note que esse método pode ser usado com qualquer tipo de variável.</p>

<h3>Contando o número de elementos no array</h3>
<p> Para contar o número de elementos de <code>$meuArray</code>, usa-se o método <code>count()</code>, com o array como argumento:</p>
<code>count($meuArray);</code> 
<?php echo count($meuArray1); ?><br>

<p>Pode-se usar o <code>foreach</code> para exibir o array de forma organizada:</p>
<code> foreach ($meuArray as $item) { echo $item;  } </code><br>
<?php
    foreach ($meuArray1 as $item) {
        echo $item . "<br>";
    }
?>

<h3>Adicionar e Remover elemento do array</h3>

<>Para adicionar um novo elemento, usa-se o método <code>array_push()</code>, com dois argumentos, o array e o valor do novo elemento: <code> array_push($meuArray, 80);  </code><br>
<?php
  array_push($meuArray1,80);
  print_r($meuArray1);
 ?>

<br>Para remover o último elemento, usa-se o método <code>array_pop($meuArray1):</code><br>

<?php
    array_pop($meuArray1);
    print_r($meuArray1);
?>
</p>
<h3>Verificando se um valor existe no array</h3>
<br><p> Para verificar se determinado valor está no array, usa-se o método <code>inarray()</code> com dois argumentos, sendo o primeiro o valor que se está procurando e o segundo o array. O retorno pode ser 1 (true) ou vazio (false).
<br><code>in_array(40, $meuArray)</code><br>
<?php
print_r(in_array(40, $meuArray1));
?>
</p>


<h1> Estrutura de controle</h1>


<p>Estruturas de controle são fundamentais na programação para tomar decisões e repetir processos. Vamos aprender sobre as principais estruturas de controle em PHP, como condicionais (if/else/switch) e laços de repetição (for/while/foreach).</p>

<h3>Estrutura Condicional - if</h3>
<p>A estrutura condicional <code>if</code> permite executar um bloco de código com base em uma condição.</p>
<code>
    if ($condicao) { 
        // código a ser executado
    }
</code>

<p>Exemplo usando um array:</p>

<?php
$meuArray = array(10, 20, 30, 40);

if (in_array(20, $meuArray)) {
    echo "O valor 20 está no array.<br>";
} else {
    echo "O valor 20 não está no array.<br>";
}
?>
<br>

<h3>Estrutura Condicional - else</h3>
<p>O <code>else</code> permite executar um código alternativo se a condição do  <code>if</code>  não for verdadeira.</p>
<code>
    if ($condicao) { <br>
        // código se a condição for verdadeira<br>
    } else {<br>
        // código se a condição for falsa <br>
    }
</code>

<p>Exemplo com else:</p>

<p?php
$valor = 15;
if ($valor > 10) {
    echo "Valor maior que 10.<br>";
} else {
    echo "Valor menor ou igual a 10.<br>";
}
?></p>


<code><pre>
$valor = 15; 
if ($valor > 10) { 
    echo "Valor maior que 10.< br >"; 
} else {
    echo "Valor menor ou igual a 10.< br >"; 
}</pre> </code>
<br>
<h3>Estrutura Condicional - switch</h3>
<br>
<p>O <code>switch</code> é utilizado para verificar múltiplas condições em uma variável, de forma mais compacta.</p>
<code><pre>
    switch ($variavel) {
        case 'valor1':
            // código para valor1
            break;
        case 'valor2':
            // código para valor2
            break;
        default:
            // código padrão se nenhum case for atendido
    }
</pre></code>

<p>Exemplo com switch:
<?php
$dia = 3;
switch ($dia) {
    case 1:
        echo "Domingo<br>";
        break;
    case 2:
        echo "Segunda-feira<br>";
        break;
    case 3:
        echo "Terça-feira<br>";
        break;
    default:
        echo "Dia inválido<br>";
}
?></p>

<code><pre>
    $dia = 3;
    switch ($dia) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda-feira";
            break;
        case 3:
            echo "Terça-feira";
            break;
        default:
            echo "Dia inválido";
}</pre></code>

<h3> Estrutura Condicional - Operador Ternário</h3>

<p>O operador ternário é uma forma compacta de escrever uma estrutura condicional <code>if-else</code>. Ele é utilizado para realizar verificações e retornar um valor com base em uma condição, tudo em uma única linha.</p>

<code><pre>
    $resultado = (condição) ? valor_se_verdadeiro : valor_se_falso;
</pre></code>

<p>Exemplo de uso do operador ternário:</p>
<?php
$idade = 20;
$mensagem = ($idade >= 18) ? "Você é maior de idade." : "Você é menor de idade.";
echo $mensagem;
?>
<code><pre>

    $idade = 20;
    $mensagem = ($idade >= 18) ? "Você é maior de idade." : "Você é menor de idade.";
    echo $mensagem;

</pre></code>


<h3>Estrutura de Repetição - for</h3>
<p>O laço <code>for</code> é utilizado para repetir um bloco de código um número determinado de vezes.</p>
<code><pre>
    for ($i = 0; $i < count($meuArray); $i++) {
        // código a ser repetido
    }
</pre></code>

<p>Exemplo com for:</p>
<?php
echo "Laço for:<br>";
for ($i = 0; $i < count($meuArray); $i++) {
    echo $meuArray[$i] . "<br>";
}
?>

<code><pre>
    echo "Laço for:< br >";
    for ($i = 0; $i < count($meuArray); $i++) {
        echo $meuArray[$i] . "< br >";
    }

</pre></code>

<h3>Estrutura de Repetição - while</h3>
<p>O laço <code>while</code>  executa um bloco de código enquanto uma condição for verdadeira.</p>
<code><pre>
    while ($condicao) {
        // código a ser repetido
    }
</pre></code>

<p>Exemplo com while:</p>
<?php
echo "Laço while:<br>";
$i = 0;
while ($i < count($meuArray)) {
    echo $meuArray[$i] . "<br>";
    $i++;
}
?>
<code><pre>

    echo "Laço while:< br >";
    $i = 0;
    while ($i < count($meuArray)) {
        echo $meuArray[$i] . "< br >";
        $i++;
    }
</pre></code>

<h3>Estrutura de Repetição - foreach</h3>
<p>O laço <code>foreach</code> é usado para percorrer arrays de forma simplificada. Ele é ideal para iterar sobre todos os elementos de um array.</p>
<code><pre>
    foreach ($meuArray as $item) {
        // código a ser repetido para cada item
    }
</pre></code>

<p>Exemplo com foreach:</p>
<?php
echo "Laço foreach:<br>";
foreach ($meuArray as $item) {
    echo $item . "<br>";
}
?>
<code><pre>

    echo "Laço foreach:< br >";
    foreach ($meuArray as $item) {
        echo $item . "< br >";
    }
</pre></code>
<br>

<h1> Exercicios</h1>

<strong>Lembre-se, ainda não aprendemos a fazer entradas do usuário, por isso os programas não precisam ter interação com o usuário, eles podem conter no próprio código os valores necessários para o programa.</strong>

<h3>1. Verdadeiro/Falso</h3>
<p>Usando um operador ternário, crie um programa que realiza comparações entre valores e exibe "Verdadeiro" quando a saida de uma comparação for verdadeira, e "Falso" quando a saída for falsa.</p>

<h3>2. Validação de Idade</h3>
<p>Crie um programa que leia a idade de uma pessoa e verifique se ela é maior de idade (18 anos ou mais). Use uma estrutura condicional para exibir uma mensagem apropriada de acordo com a idade.</p>

<h3>3. Busca em Array</h3>
<p>Crie um programa que leia 5 números e os armazene em um array. Após armazenar os números, escolha um número e verifique se ele existe no array. Use o <code>in_array()</code> para realizar a verificação.</p>

<h3>4. Sequência de Fibonacci</h3>
<p>Crie um programa que gere os primeiros <strong>n</strong> números da sequência de Fibonacci, onde <strong>n</strong> é um número inteiro positivo fornecido pelo usuário. Utilize um laço <code>for</code> para gerar os números da sequência.</p>

<h3>5. Média de Números</h3>
<p>Crie um programa que leia <strong>n</strong> números inteiros e calcule a média aritmética desses números. Use um laço <code>for</code> para somar os números e calcular a média.</p>

<h3>6. Verificação de Números Pares e Ímpares</h3>
<p>Crie um programa que percorra um array de 10 números inteiros e verifique se cada número é par ou ímpar. Utilize a estrutura de repetição <code>for</code> e a estrutura condicional <code>if</code> para verificar se o número é par ou ímpar. Exiba uma mensagem para cada número indicando se é par ou ímpar.</p>

<h3>7. Maior e Menor Número de um Array</h3>
<p>Crie um programa que tenha um array de números e determine qual é o maior e o menor número do array. Utilize a estrutura de repetição <code>foreach</code> para percorrer os elementos do array e a estrutura condicional <code>if</code> para determinar o maior e o menor valor.</p>

<h3>8. Reversão de Array</h3>
<p>Crie um programa que tenha um array de 10 números inteiros e inverta a ordem dos elementos do array. Utilize a estrutura de repetição <code>for</code> para percorrer o array de trás para frente e armazenar o resultado em um novo array.</p>

<h3>9. Soma de Elementos de um Array</h3>
<p>Crie um programa que tenha um array de números inteiros e calcule a soma de todos os seus elementos. Utilize a estrutura de repetição <code>foreach</code> para iterar sobre o array e somar os valores.</p>

<h3>10. Substituição de Valores em um Array</h3>
<p>Crie um programa que percorra um array de 10 números e substitua todos os valores menores que 5 por 0. Utilize a estrutura de repetição <code>foreach</code> e a estrutura condicional <code>if</code> para realizar a substituição.</p>

</body>
</html>
