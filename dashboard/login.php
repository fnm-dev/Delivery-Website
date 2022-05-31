<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - BrothersBurguers</title>
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="../../images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="../img/logob.png" alt="logo">
                </div>
                <h1>Bem vindo!</h1>
                <h4 class="font-weight-light">Acesse sua conta:</h4>
                <?php
                    if (isset($_GET['erro'])) {
                      $erro = $_GET['erro'];
                    } else {
                      $erro = 0;
                    }
                    if ($erro == 1) {
                      $msg = "Login e/ou Senha inválido(s)!";
                    } else {
                      if ($erro == 2) {
                        $msg = "Digite Login e Senha.";
                      } else {
                        $msg = "";
                      }
                    }
                    echo $msg;
                  ?>
                <form class="pt-3" action="validaLogin.php" method="post" id="form" name="form">
                  <div class="form-group">
                    <input type="login" class="form-control form-control-lg" name="login" id="login" placeholder="Digite seu login" >
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="senha" id="senha" placeholder="Senha">
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">LOGIN</button>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <a href="#" class="auth-link text-black">Esqueceu sua senha?</a>
                  </div>
                  <div class="text-center mt-4 font-weight-light">
                    Não tem uma conta? <a href="#" class="text-primary">Crie aqui.</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
  </body>
</html>
