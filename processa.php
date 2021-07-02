<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";

$result = "INSERT INTO pessoas (nome, telefone, email, descricao) VALUES ('$nome', '$telefone', '$email', '$descricao')";

$result = mysqli_query($conn, $result);

?>
<p>Mensagem enviada com sucesso! Clique no botão abaixo para voltar  ao site</p>
<a href="http://localhost/TCM_Site/"> ↩ </a>