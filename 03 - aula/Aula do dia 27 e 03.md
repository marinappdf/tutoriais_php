
### 1) Apresentar introdução a entrada de dados com formulários

A Superglobal `$_GET`
- Coleta dados enviados através da URL (método GET).
- Os dados ficam visíveis na barra de endereço.
- É ideal para buscas ou envio de dados não sensíveis.
- Melhor usado para casos onde os dados precisam ser visíveis ou compartilhados por meio de URLs, como em sistemas de busca ou filtros de páginas. É menos seguro, pois expõe os dados na barra de endereço.

A Superglobal `$_POST`
- Coleta dados enviados de forma oculta (método POST).
- Não exibe os dados na URL, sendo mais seguro para informações sensíveis como senhas.
- Ideal para informações sensíveis, como credenciais, ou quando grandes volumes de dados precisam ser enviados. 
- Oferece mais segurança, já que os dados não são exibidos na URL.

A Superglobal `$_REQUEST`
- Combina dados de `$_GET` e `$_POST.
- É útil para aplicações simples, mas não é recomendada em sistemas que exigem maior segurança, pois não distingue os métodos de envio.
- Útil em situações rápidas ou scripts pequenos que aceitam múltiplos métodos, mas não recomendado para aplicações maiores devido à falta de controle sobre a origem dos dados.

### 2) Mostrar brevemente como é um Formulário em HTML

-> Formulário em HTML

### 3) Colocar o PHP no Formulário

```php
<?php
if (isset($_GET['nome'])) {
echo "Nome informado: " . $_GET['nome'];
}
?>
```

```php
<?php
$lista_tarefas = array();
if (isset($_GET['nome'])) {
$lista_tarefas[] = $_GET['nome'];
}
?>
```

```html
<table>
		<tr>
			<th>Tarefas</th>
		</tr>
			<?php foreach ($lista_tarefas as $tarefa) : ?>
		<tr>
			<td><?php echo $tarefa; ?> </td>
		</tr>
			<?php endforeach; ?>
	</table>
</body>
```


```php
<?php foreach ($lista_tarefas as $tarefa) { ?>
	<tr>
		<td>
			<?php echo $tarefa; ?> </td>
	</tr>
<?php } ?>
```

```php
<?php

if (isset($_GET['nome'])) {
	$_SESSION['lista_tarefas'][] = $_GET['nome'];
}

$lista_tarefas = array();

if (isset($_SESSION['lista_tarefas'])) {
	$lista_tarefas = $_SESSION['lista_tarefas'];
}

?>
```

### Fazer o Capítulo 4 do outro livro de PHP.
Seguindo cada etapa, fazer cada linha.