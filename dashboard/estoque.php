<?php include_once("./partials/verificaLogin.php") ?>
<?php include 'conexao.php' ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BrothersBurguers | Estoque</title>
    <?php include_once("./partials/styles.php") ?>
    <link rel="shortcut icon" href="vendors/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <?php include_once("./partials/header.php") ?>
      <div class="container-fluid page-body-wrapper">
        <?php include_once("./partials/sidebar.php") ?>
        <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Estoque</h4>
              <p class="card-description">
                <code>Gestão de estoque <description>(cadastre, exclua ou atualize as informações)</description></code>
              </p>
              <a href="./edita/editaEstoque.php?acao=Incluir"><b>Cadastrar</b></a>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Nome
                          </th>
                          <th>
                            Quantidade
                          </th>
                          <th>
                            Peso
                          </th>
                          <th>
                            Alterar
                          </th>
                        </tr>
                      </thead>
                      <?php
                      // Fazendo uma consulta SQL
                      $sql = "SELECT * 
                                    FROM estoque 
                                    ORDER BY nome";
                      $tabela = mysqli_query($conexao, $sql);
                      while ($linha = mysqli_fetch_array($tabela)) {
                      ?>
                        <tbody>
                          <tr class="table-info">
                            <td>
                              <?php echo $linha['id']; ?>
                            </td>
                            <td>
                              <?php echo $linha['nome']; ?>
                            </td> 
                            <td>
                              <?php echo $linha['qtde']; ?>
                            </td>
                            <td>
                              <?php echo $linha['peso']; ?>
                            </td>
                            <td>
                              <a href="./edita/editaEstoque.php?acao=Alterar&id=<?php echo $linha['id']; ?>">
                                <img src="imagens/alterar.png" border="0">
                              </a>
                              <a href="./excluir/excluirEstoque.php?acao=Excluir&id=<?php echo $linha['id']; ?>">
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
            </div>
          </div>
          <?php mysqli_close($conexao) ?>
          <?php include_once("./partials/footer.php") ?>
        </div>
      </div>
    </div>
    <?php include_once("./partials/scripts.php") ?>
  </body>
</html>