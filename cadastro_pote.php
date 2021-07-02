<?php 
    include "conexao.php";

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO `pessoas`(`nome`, `telefone`, `email`, `descricao`) VALUES ('nome', 'telefone', 'email', 'descricao')";
    

    if (mysqli_query($conn, $sql)) {
       echo "$nome cadastrado com sucesso!";
    } else
      echo "$nome NÃO cadastrado;"
?>