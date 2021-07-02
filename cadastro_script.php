



<?php 
    include "conexao.php";

    $imagem = $_POST['imagem'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO `bolo`(`imagem`, `nome`, `descricao`) VALUES ( '$imagem', '$nome', '$descricao')";
    

    if (mysqli_query($conn, $sql)) {
       echo "$nome cadastrado com sucesso!";
    } else
      echo "$nome NÃO cadastrado;"
?>