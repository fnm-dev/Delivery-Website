<?php include_once("./partials/verificaLogin.php") ?>
<?php include 'conexao.php' ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BrothersBurguers | Clientes</title>
    <?php include_once("./partials/styles.php") ?>
    <link rel="shortcut icon" href="vendors/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <?php include_once("./partials/header.php") ?>
      <div class="container-fluid page-body-wrapper">
        <?php include_once("./partials/sidebar.php") ?>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Clientes</h4>
              <p class="card-description">
                <code>Gestão de clientes <description>(cadastre, exclua ou atualize as informações)</description></code>
              </p>
              <a href="./edita/editaCliente.php?acao=Incluir"><b>Cadastrar</b></a>
              <div class="table-responsive">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                              ID
                          </th>
                          <th>
                              Nome
                          </th>
                          <th>
                              Endereço
                          </th>
                          <th>
                              Telefone
                          </th>
                          <th>
                            Alterar
                          </th>
                        </tr>
                      </thead>
                      <?php
                          $sql = "SELECT * 
                                  FROM cliente 
                                  ORDER BY nome";
                          $tabela = mysqli_query($conexao, $sql);
                          while ($linha = mysqli_fetch_array($tabela)){
                      ?>
                      <tbody>
                        <tr class="table table-striped">
                          <td>
                            <?php echo $linha['id']; ?>
                          </td>
                          <td>
                            <?php echo $linha['nome']; ?>
                          </td>
                          <td>
                            <?php echo $linha['endereco']; ?>
                          </td>
                          <td>
                            <?php echo $linha['telefone']; ?>
                          </td>
                          <td>
                              <a href="./edita/editaCliente.php?acao=Alterar&id=<?php echo $linha['id']; ?>">
                                <img src="imagens/alterar.png" border="0">
                              </a>
                              <a href="./excluir/excluirCliente.php?acao=Excluir&id=<?php echo $linha['id']; ?>">
                                <img src="imagens/excluir.png" border="0">
                              </a>
                            </td>
                        </tr>
                      </tbody>
                      <?php
                      }
                      ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <?php
              mysqli_close($conexao);
            ?>
          </div>
          <?php include_once("./partials/footer.php") ?>
        </div>
      </div>
      <?php include_once("./partials/scripts.php") ?>
  </body>
</html>