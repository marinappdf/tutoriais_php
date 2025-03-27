<?php
// Captura os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Exibe os dados enviados
echo "<h1>Dados Recebidos</h1>";
echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>E-mail:</strong> $email </p>";

// Exemplo com $_REQUEST
if (isset($_REQUEST['nome']) && isset($_REQUEST['email'])) {
    echo "<p><em>(Capturado via \$_REQUEST)</em></p>";
}
?>