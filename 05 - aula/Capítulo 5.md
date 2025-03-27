**Capítulo 5: Banco de Dados e PHP**

Neste capítulo, vamos aprender a integrar o PHP com bancos de dados relacionais, especificamente o MySQL. Vamos abordar os conceitos fundamentais, configurar o ambiente no XAMPP, criar um banco de dados simples no MySQL Workbench e conectar um formulário HTML ao banco de dados usando PHP.

**5.1 Conceitos Fundamentais**

Um banco de dados relacional organiza dados em tabelas compostas por linhas e colunas. Cada tabela representa uma entidade, e as relações entre elas são definidas por chaves primárias e estrangeiras. Por exemplo, uma tabela de usuários pode ter colunas para id, nome e email, e uma relação com uma tabela de pedidos.

**5.2 Banco de Dados Relacional**

Para praticar os conhecimentos deste capítulo, devemos preparar um ambiente para integrar o banco de dados com o PHP. Para isso, o servidor local Xampp deve iniciar os serviços Apache e MySQL. Além disso, vamos utilizar a IDE Workbench para criar e gerenciar os bancos de dados de forma visual.

**Criando um Banco de Dados Simples**

Vamos criar um banco de dados simples para que possamos integrá-lo com um formulário de coleta de dados através do PHP. Abra o MySQL Workbench e execute o seguinte script para criar o banco de dados e uma tabela:

```
CREATE DATABASE formulario_db;
USE formulario_db;
CREATE TABLE usuarios (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL
);
```

Lembre-se de que a cada linha de comando, utilize Ctrl+Enter para executar o código.

**5.3 Conectando PHP ao Banco de Dados**

Agora, vamos criar um arquivo de conexão ao banco de dados. Lembre-se de organizar seus projetos. Você já sabe como criar uma pasta específica no htdocs do Xampp. É dentro dessa pasta que o arquivo PHP e o arquivo HTML devem ser criados. Vamos criar um arquivo `conexão.php` e utilizar o seguinte script:

```
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexão falhou: ". $conn->connect_error);
}
?>
```

Explicação:

- `new mysqli`: Cria uma nova conexão com o banco de dados.
- `die()`: Interrompe a execução caso a conexão falhe.

**5.4 Criando o Formulário HTML**

Crie um arquivo chamado `formulario.html` e execute o seguinte código:

```
<!DOCTYPE html>
<html>
<head>
  <title>Formulário</title>
</head>
<body>
  <h1>Formulário</h1>
  <form action="salvar_usuario.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha"><br><br>
    <input type="submit" value="Salvar">
  </form>
</body>
</html>
```

**5.5 Salvando os Dados no Banco de Dados**

Crie um arquivo chamado `salvar_usuario.php` e utilize o seguinte script:

```
<?php
require_once 'conexão.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$password_hash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?,?,?)");
$stmt->bind_param("sss", $nome, $email, $password_hash);
$stmt->execute();

header('Location: listar_usuarios.php');
exit;
?>
```

Explicação:

- `password_hash()`: Cria um hash seguro para a senha.
- `prepare()`: Prepara a consulta para evitar ataques de SQL Injection.
- `bind_param()`: Vincula os valores do formulário aos parâmetros da consulta.

**5.6 Visualizando os Dados Armazenados**

Crie um arquivo chamado `listar_usuarios.php` e