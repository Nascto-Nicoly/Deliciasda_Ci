<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bdname = "contato";

   if ( $conn = mysqli_connect($servidor, $usuario, $senha, $bdname) ) {
    //   echo "Conectado!" ;
   } else
      echo "Erro!";
?>