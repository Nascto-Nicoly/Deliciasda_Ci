<?php

include("conexao.php");

$consulta = "SELECT * FROM bolo";


?>

<html>
     <head>
         <meta charset="utf8">
     </head>
     <body>
         <table>
             <tr>
                <td>Código</td>
                <td>Imagem</td>
                <td>Nome</td>
                <td>Descrição</td>
             </tr>
             <?php while($dado = $con->fetch_array()){ ?>
             <tr>
                <td><?php echo $dado["id"]; ?></td>
                <td><?php echo $dado["imagem"]; ?></td>
                <td><?php echo $dado["nome"]; ?></td>
                <td><?php echo $dado["descricao"]; ?></td>
             </tr>
             <?php } ?>
         </table>


     </body>
  
</html>