<!DOCTYPE html>
<html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BrothersBurguers | Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
    <body style="min-height: 100vh; overflow: hidden" >

        <?php
        include '../conexao.php'; 

        $acao=$_GET["acao"];

        if ($acao == "Excluir")
        {
            $id=$_GET["id"];
            
            $sql = "SELECT * 
            FROM cliente
            WHERE id=".$id;
            $tabela = mysqli_query($conexao,$sql);
            $linha = mysqli_fetch_array($tabela);
            
            $nome=$linha['nome'];
        }
        else
        {
            header('Location: ../clientes.php');
        }
        ?>

        <div class="container" style="position: relative; min-height: 100vh;">
            <form style="position: absolute; top: 50%; left: 50%; transform: translateY(-50%) translateX(-50%);" name="dados" method="post" action="../cadastro/cadastroCliente.php?id=<?php echo $id; ?>">
                <legend>Aviso</legend>
                <label for="aviso" class="form-label">Tem certeza que deseja remover o cliente <?php echo $nome ?>?</label>
                <br><button type="submit" class="btn btn-primary" name="acao" value="<?php echo $acao; ?>">Confirmar</button>
                <a class="btn btn-primary" href="../clientes.php">Cancelar</a>
            </form>
        </div>
    </body>
</html>
<?php
    mysqli_close($conexao);
?>