<?php include_once("./partials/verificaLogin.php") ?>
<!DOCTYPE html>
  <html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BrothersBurguers | Painel de Controle</title>
    <?php include_once("./partials/styles.php") ?>
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <?php include_once("./partials/header.php") ?>
      <div class="container-fluid page-body-wrapper">
        <?php include_once("./partials/sidebar.php") ?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title mb-0">Despesas</p>
                    <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th>Conta</th>
                            <th>Preço</th>
                            <th>Data</th>
                            <th>Status</th>
                          </tr>  
                        </thead>
                        <tbody>
                          <tr>
                            <td>Aluguel</td>
                            <td class="font-weight-bold">R$ 799,99</td>
                            <td>11/05/2022</td>
                            <td class="font-weight-medium"><div class="badge badge-danger">Atrasada</div></td>
                          </tr>
                          <tr>
                            <td>Desenvolvimento Site</td>
                            <td class="font-weight-bold">R$ 2.500,00</td>
                            <td>06/06/2022</td>
                            <td class="font-weight-medium"><div class="badge badge-warning">Pendente</div></td>
                          </tr>
                          <tr>
                            <td>Patrocínio Esportes</td>
                            <td class="font-weight-bold">R$ 1.000,00</td>
                            <td>30/06/2022</td>
                            <td class="font-weight-medium"><div class="badge badge-warning">Pendente</div></td>
                          </tr>
                          <tr>
                            <td>Funcionários</td>
                            <td class="font-weight-bold">R$ 10.000,00</td>
                            <td>05/05/2022</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Paga</div></td>
                          </tr>
                          <tr>
                            <td>Energia</td>
                            <td class="font-weight-bold">R$ 362,00</td>
                            <td>10/05/2022</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Paga</div></td>
                          </tr>
                          <tr>
                          <tr>
                            <td>Gás</td>
                            <td class="font-weight-bold">R$ 632,76</td>
                            <td>11/05/2022</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Paga</div></td>
                          </tr>
                            <td>Água</td>
                            <td class="font-weight-bold">R$ 282,00</td>
                            <td>13/05/2022</td>
                            <td class="font-weight-medium"><div class="badge badge-success">Paga</div></td>
                          </tr> 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lista de Afazeres</h4>
                    <div class="list-wrapper pt-2">
                      <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                        <li>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox">
                              Reunião com sócios
                            </label>
                          </div>
                          <i class="remove ti-close"></i>
                        </li>
                        <li class="completed">
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked>
                              Criar novos projetos
                            </label>
                          </div>
                          <i class="remove ti-close"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox">
                              Contratar entregadores
                            </label>
                          </div>
                          <i class="remove ti-close"></i>
                        </li>
                        <li class="completed">
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked>
                              Contratar cozinheiros
                            </label>
                          </div>
                          <i class="remove ti-close"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-flat">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox">
                              Analisar promoções de cargo
                            </label>
                          </div>
                          <i class="remove ti-close"></i>
                        </li>
                      </ul>
                    </div>
                    <div class="add-items d-flex mb-0 mt-2">
                      <input type="text" class="form-control todo-list-input"  placeholder="Adicionar nova tarefa">
                      <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="icon-circle-plus"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include_once("./partials/footer.php") ?>
      <?php include_once("./partials/scripts.php") ?>
    </body>
</html>

