<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Cadastro</title>
    </head>
    <body>
            <div class="container">
                <div class="row">
                    <div class="col">
                    <h1>Cadastro<h1>
                    <form action="cadastro_pote.php" method="POST">
                    <div class="form-group">
                      <label for="imagem">Insira a imagem do produto</label><br>
                      <input type="file" class="form-control-file" name="imagem"><br><br>
                    </div>
                    <div class="form-group">
                      <label for="nome">Nome</label><br>
                      <input type="text" class="form-control" name="nome" placeholder="Digite o nome do produto"><br><br>
                    </div>
                    <div class="form-group">
                      <label for="descricao">Descrição</label><br>
                      <input type="text" class="form-control" name="descricao" placeholder="Coloque a descrição do produto"><br><br>
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                </div>
            </div>
    </body>
</html>