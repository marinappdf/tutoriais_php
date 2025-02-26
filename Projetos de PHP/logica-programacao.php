<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão de PHP com HTML</title>

    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
        margin: 20px;
        line-height: 1.6;
        }
    h1, h2, h3 {
        margin-bottom: 20px;
        }   

    p,code {
        margin-bottom: 15px;
        margin-top: 15px;
        }

    </style>
</head>
<body >

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

<h3>1. Estrutura Condicional - if</h3>
<p>A estrutura condicional "if" permite executar um bloco de código com base em uma condição.</p>
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

<h3>2. Estrutura Condicional - else</h3>
<p>O "else" permite executar um código alternativo se a condição do "if" não for verdadeira.</p>
<code>
    if ($condicao) { 
        // código se a condição for verdadeira
    } else {
        // código se a condição for falsa
    }
</code>

<p>Exemplo com else:</p>
<?php
$valor = 15;
if ($valor > 10) {
    echo "Valor maior que 10.<br>";
} else {
    echo "Valor menor ou igual a 10.<br>";
}
?>

<h3>3. Estrutura Condicional - switch</h3>
<p>O "switch" é utilizado para verificar múltiplas condições em uma variável, de forma mais compacta.</p>
<code>
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
</code>

<p>Exemplo com switch:</p>
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
?>

<h3>4. Estrutura de Repetição - for</h3>
<p>O laço "for" é utilizado para repetir um bloco de código um número determinado de vezes.</p>
<code>
    for ($i = 0; $i < count($meuArray); $i++) {
        // código a ser repetido
    }
</code>

<p>Exemplo com for:</p>
<?php
echo "Laço for:<br>";
for ($i = 0; $i < count($meuArray); $i++) {
    echo $meuArray[$i] . "<br>";
}
?>

<h3>5. Estrutura de Repetição - while</h3>
<p>O laço "while" executa um bloco de código enquanto uma condição for verdadeira.</p>
<code>
    while ($condicao) {
        // código a ser repetido
    }
</code>

<p>Exemplo com while:</p>
<?php
echo "Laço while:<br>";
$i = 0;
while ($i < count($meuArray)) {
    echo $meuArray[$i] . "<br>";
    $i++;
}
?>

<h3>6. Estrutura de Repetição - foreach</h3>
<p>O laço "foreach" é usado para percorrer arrays de forma simplificada. Ele é ideal para iterar sobre todos os elementos de um array.</p>
<code>
    foreach ($meuArray as $item) {
        // código a ser repetido para cada item
    }
</code>

<p>Exemplo com foreach:</p>
<?php
echo "Laço foreach:<br>";
foreach ($meuArray as $item) {
    echo $item . "<br>";
}
?>

<h3>7. Verificando Existência de Elementos com in_array()</h3>
<p>Antes de tentar acessar ou operar em um valor dentro de um array, podemos verificar se o valor existe utilizando a função <code>in_array()</code>.</p>
<?php
if (in_array(30, $meuArray)) {
    echo "O valor 30 existe no array.<br>";
} else {
    echo "O valor 30 não existe no array.<br>";
}
?>

<h3>8. Adicionando e Removendo Elementos do Array</h3>
<p>É possível adicionar e remover elementos de um array utilizando funções como <code>array_push()</code> e <code>array_pop()</code>.</p>
<code>array_push($meuArray, 50);</code><br>
<code>array_pop($meuArray);</code><br>

<p>Exemplo de adição e remoção:</p>
<?php
array_push($meuArray, 50);  // Adiciona 50 ao final
print_r($meuArray);
echo "<br>";

array_pop($meuArray);  // Remove o último elemento
print_r($meuArray);
?>

<h3>9. Contando o Número de Elementos do Array</h3>
<p>Para contar os elementos de um array, utilizamos a função <code>count()</code>.</p>
<?php
echo "Número de elementos no array: " . count($meuArray) . "<br>";
?>

<p><strong>ATENÇÃO!</strong> Certifique-se de sempre verificar os dados dos arrays antes de fazer operações. A utilização de estruturas de controle adequadas pode evitar erros e melhorar a performance do seu código.</p>



</body>
</html>
