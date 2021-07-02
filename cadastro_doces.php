
<?php 
    include ("conexao.php");

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $descricao = $_POST['descricao'];

    $result_msg_contato = "INSERT INTO `pessoas`( nome, telefone, email, descricao) VALUES ('$nome', '$telefone', '$email, '$descricao')";
    
    $result_msg_contato= mysqli_query($conn, $result_msg_contato)

  
?>

<a href="formulario_doces.php" class="">Voltar</a>