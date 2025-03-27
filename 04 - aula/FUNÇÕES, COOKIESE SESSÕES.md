# O que são funções em PHP?
Assim como em qualquer linguagem de programação, uma função é um bloco de código que pode ser executado várias vezes em diferentes partes do script, sem precisar repetir o mesmo código. 

Funções são úteis para:
1. **Reutilizar código**: Evita a repetição de código em diferentes partes do script.
2. **Organizar o código**: Ajuda a manter o código organizado e fácil de entender.
3. **Melhorar a legibilidade**: Torna o código mais legível, pois as funções têm nomes que indicam sua finalidade.
4. **Reduzir erros**: Reduz a chance de erros, pois o código é executado apenas uma vez.

Uma função em PHP é definida usando a palavra-chave `function` seguida do nome da função e dos parâmetros entre parênteses. Por exemplo:

```php
function soma($a, $b) {
  return $a + $b;
}
```

Nesse exemplo, a função `soma` recebe dois parâmetros `$a` e `$b` e retorna a soma deles.

**Componentes de uma função**

1. **Nome da função**: O nome da função é o identificador que é usado para chamar a função.
2. **Parâmetros**: São os valores que são passados para a função quando ela é chamada.
3. **Corpo da função**: É o bloco de código que é executado quando a função é chamada.
4. **Retorno**: É o valor que a função retorna após sua execução.

Uma função pode não ter nenhum parâmetro, pode ter um, ou muitos parâmetros.
Da mesma forma, a função pode retornar um valor, ou pode não retornar nenhum valor.

**Funções com tipagem**

A partir do PHP 7, é possível adicionar tipagem às funções, o que significa que você pode especificar o tipo de dado que os parâmetros e o retorno da função devem ter. Isso ajuda a prevenir erros e torna o código mais seguro.

Por exemplo:
```php
function soma(int $a, int $b): int {
  return $a + $b;
}
```
Nesse exemplo, a função `soma` recebe dois parâmetros `$a` e `$b` do tipo `int` e retorna um valor do tipo `int`.

**Funções anônimas**

Funções anônimas, também conhecidas como closures, são funções que não têm um nome. Elas são úteis quando você precisa criar uma função que será usada apenas uma vez ou em um contexto específico.

Por exemplo:
```php
$funcao = function($x) {
  return $x * 2;
};
```
Nesse exemplo, a função anônima recebe um parâmetro `$x` e retorna o valor de `$x` multiplicado por 2. A função anônima é armazenada na variável `$funcao` e pode ser chamada como uma função normal.

#### Exemplos de funções em PHP

1. Função que imprime um texto:
```php
function imprimeTexto(string $texto) {
  echo $texto;
}
```

2. Função que calcula a área de um retângulo:
```php
function areaRetangulo(int $largura, int $altura): int {
  return $largura * $altura;
}
```

3. Função que converte um texto para maiúsculas:
```php
function converteMaiusculas(string $texto): string {
  return strtoupper($texto);
}
```

4. Função anônima que soma dois números:
```php
$funcao = function(int $a, int $b): int {
  return $a + $b;
};
```

---

# Cookies v.s. Sessões

---

# COOKIES

Cookies são pequenos arquivos de texto que um site pode armazenar no navegador do usuário. 
Eles permitem que os dados sejam mantidos entre diferentes acessos ao site, facilitando, por exemplo, a personalização da experiência do usuário. 
O uso de cookies pode ser para lembrar preferências, sessões de login, ou outros dados entre visitas ao site. É importante lembrar que cookies têm um tempo de vida e podem ser configurados para expirar automaticamente.

 **CRIANDO UM COOKIE**

Quando o cookie é criado, o navegador armazena esse valor e o envia de volta ao servidor em cada requisição subsequente até que ele expire.

```php
<?php
setcookie("usuario", "João", time() + (86400 * 30));
?>
```

`setcookie()`
- Esta função é usada para criar ou atualizar um cookie.
- Ela deve ser chamada antes de qualquer saída HTML no script PHP, porque os cookies são enviados ao navegador no cabeçalho da resposta HTTP.
   
`"usuario"`
- Este é o nome do cookie. 
- Você pode dar ao cookie qualquer nome significativo. 
 
`"João"`
- Este é o valor associado ao cookie.
- Neste caso, o cookie `"usuario"` armazena o valor `"João"`.
- Este valor será salvo no navegador do usuário e pode ser acessado em futuras requisições.

`time() + (86400 * 30)`
- Isso define a data de expiração do cookie. 
- A função `time()` retorna o timestamp atual, e `86400` é o número de segundos em um dia (24 horas * 60 minutos * 60 segundos). Multiplicando isso por 30, definimos o cookie para expirar em 30 dias. Ou seja, o cookie `"usuario"` terá uma validade de 30 dias.


**RECUPERANDO UM COOKIE**

Recuperar o cookie permite o uso dos dados nas páginas seguintes. Por exemplo, permite personalizar a mensagem de boas-vindas com base no histórico de visitas do usuário,como a seguir.

```php
<?php
if (isset($_COOKIE['usuario'])) {
    echo "Bem-vindo de volta, " . $_COOKIE['usuario'];
} else {
    echo "Olá, visitante!";
}
?>
```


`$_COOKIE`
- Essa variável é uma superglobal no PHP.
- Ela armazena os cookies enviados pelo navegador do cliente ao servidor.
- Ela contém todos os cookies disponíveis para a página, organizados como um array associativo, onde o nome do cookie é a chave e seu valor é o valor associado.

`isset($_COOKIE['usuario'])`
- Aqui, estamos verificando se o cookie com o nome `"usuario"` existe.
- A função `isset()` retorna `true` se o cookie estiver definido e não for `null`, o que significa que o navegador enviou esse cookie ao servidor.

`$_COOKIE['usuario']`
- Se o cookie `"usuario"` existir, ele será acessado diretamente a partir da superglobal `$_COOKIE`.
- Nesse caso, estamos utilizando esse valor para exibir uma mensagem de boas-vindas ao usuário. O valor `"João"`, que foi armazenado no cookie anteriormente, será recuperado e exibido.

- `else`: Se o cookie `"usuario"` não estiver definido (por exemplo, se o usuário nunca visitou o site antes ou se o cookie expirou), o script exibe uma mensagem genérica de boas-vindas, como "Olá, visitante!".

**REMOVENDO UM COOKIE**

Ao remover o cookie, ele deixará de ser enviado nas requisições subsequentes, e o usuário será tratado como um visitante sem cookie até que um novo cookie seja criado.

```php
<?php
setcookie("usuario", "", time() - 3600); // Define o tempo de expiração no passado
?>
```

Para remover um cookie, a função `setcookie()` é usada novamente, mas com um truque: você define a data de expiração no passado. Isso força o navegador a excluir o cookie.

No primeiro parâmetro declara-se o nome do cookie que deseja-se remover. Neste caso,  `"usuario"`.

A seguir, o preenchimento da variável  `"usuario"` com valor vazio `""`.

 Por fim, a data de expiração do cookie é definida para uma hora atrás `time() - 3600` ( `3600` segundos = 1 hora).

## Atividade Prática

##### 1) Crie e registre um cookie no formulário criado anteriormente.
##### 2) Registre mais de uma variável.

Alguns exemplos para servir de inspiração.

```php
<?php
setcookie("usuario", "João", time() + (86400 * 30));
setcookie("email", "joao@example.com", time() + (86400 * 30));
setcookie("preferencias", "escuro", time() + (86400 * 30)); 
?>
```


```php
<?php
if (isset($_COOKIE['usuario']) && isset($_COOKIE['email']) && isset($_COOKIE['preferencias'])) {
    echo "Bem-vindo de volta, " . $_COOKIE['usuario'] . " (" . $_COOKIE['email'] . ").";
    echo " Sua preferência de tema é " . $_COOKIE['preferencias'] . ".";
} else {
    echo "Olá, visitante!";
}
?>
```

```php
<?php
setcookie("usuario", "", time() - 3600);
setcookie("email", "", time() - 3600); 
setcookie("preferencias", "", time() - 3600);
?>
```

---

# Sessões

Sessões permitem armazenar informações no servidor enquanto o usuário navega pelo site. Ao contrário dos cookies, as sessões não dependem do navegador para armazenamento e são mantidas no lado do servidor, enquanto o identificador da sessão é armazenado no navegador do cliente. As sessões são úteis para manter informações seguras e persistentes, como dados de login, carrinhos de compra, entre outras informações que precisam ser lembradas enquanto o usuário navega entre diferentes páginas.

**INICIANDO UMA SESSÃO**

Antes de usar sessões, você precisa iniciá-las com a função `session_start()`.

```php
<?php
session_start();
$_SESSION['nome'] = "Ana";
echo "Sessão iniciada para " . $_SESSION['nome'];
?>
```

`session_start()`
- Esta função deve ser chamada no início de cada script que utilizar sessões.
- Ela inicia ou retoma uma sessão existente com base no identificador de sessão enviado pelo navegador do cliente.
- Sem essa chamada, você não poderá ler ou escrever dados na variável `$_SESSION`.

`$_SESSION['nome'] = "Ana";`
- Aqui, estamos armazenando um valor na superglobal `$_SESSION`.
- A chave `'nome'` é usada para identificar a variável de sessão, e o valor `"Ana"` é atribuído a ela.
- O servidor armazenará essa informação, e ela poderá ser acessada em outras páginas enquanto a sessão estiver ativa.

`echo "Sessão iniciada para " . $_SESSION['nome'];`
- Esta linha exibe uma mensagem confirmando que a sessão foi iniciada com o nome "Ana". 

**RECUPERANDO DADOS DE UMA SESSÃO**

```php
<?php
session_start();
if (isset($_SESSION['nome'])) {
    echo "Bem-vinda, " . $_SESSION['nome'];
} else {
    echo "Nenhuma sessão encontrada.";
}
?>
```


`session_start()`
- Novamente, iniciamos ou retomamos a sessão existente.
- Sempre que você quiser acessar ou modificar dados de sessão, essa função precisa ser chamada.

`if (isset($_SESSION['nome']))`
- A função `isset()` verifica se a variável de sessão `'nome'` foi definida. 
- Se a variável existir, isso significa que a sessão foi iniciada e o valor associado está disponível.

`echo "Bem-vinda, " . $_SESSION['nome'];`
- Se a variável de sessão `'nome'` estiver definida, o script exibe uma mensagem de boas-vindas com o valor armazenado, neste caso, o nome do usuário.
   
`else`
- Se a variável de sessão `'nome'` não existir, isso indica que não há uma sessão ativa com essa variável, e o script exibe a mensagem `"Nenhuma sessão encontrada."`.   

**EXCLUINDO UMA SESSÃO**

```php
<?php
session_start();
session_unset(); 
session_destroy();
?>
```


`session_start()`
- Como nos exemplos anteriores, iniciamos ou retomamos a sessão existente.

`session_unset()`
- Esta função remove todas as variáveis de sessão definidas, mas não destrói a sessão em si. 
- Ou seja, os dados armazenados na variável `$_SESSION` são apagados, mas o identificador da sessão ainda existe.
    
`session_destroy()`
- Esta função destrói completamente a sessão ativa, incluindo a remoção do identificador da sessão.
- Após essa chamada, a sessão não existirá mais, e qualquer tentativa de acessar dados da sessão será inválida.

---

# Desafio

#### Crie um formulário post que salva os dados com cookies.

---

# Sistema de Login com Sessões
(baseado na apostila do curso)

Nesta atividade, criaremos um sistema de login simples. O formulário HTML envia o nome de usuário e a senha para um script PHP, que valida os dados e cria uma sessão para o usuário autenticado.

Você já sabe que deve organizar seus projetos. 
Crie uma pasta para o projeto em `htdocs` no Xampp. Crie dentro dela um arquivo HTML e outro arquivo para o PHP, como feito nos exemplos anteriores.

**No arquivo HTML, digite o seguinte código:**

```html
<!-- formulário de login -->
<form action="login.php" method="post">
  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome"><br><br>
  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha"><br><br>
  <input type="submit" value="Login">
</form>
```

**No arquivo PHP, digite o seguinte código:**

```php
<?php
// verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // verifica se as credenciais são válidas
  if ($_POST["nome"] == "joao" && $_POST["senha"] == "123") {
    // cria uma sessão para o usuário autenticado
    session_start();
    $_SESSION["nome"] = $_POST["nome"];
    echo "Login bem-sucedido!";
  } else {
    echo "Login recusado!";
  }
}
?>
```

**Explicação:**

1. O formulário de login envia os dados para o script `login.php` usando o método POST.
2. No script PHP, as credenciais enviadas pelo formulário são comparadas com os valores definidos no servidor.
3. Se as credenciais forem válidas, uma sessão é criada para armazenar o nome de usuário.
4. Caso contrário, uma mensagem de erro é exibida.