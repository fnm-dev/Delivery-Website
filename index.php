<?php
  session_start();
  //Linha 135
  if(!isset($_SESSION["logado"])){
      $_SESSION["logado"]=NULL;
  }
  
  if(isset($_SESSION["logado"]) || $_SESSION["logado"] == TRUE){
    $path="./dashboard/index.php";
    $status="Painel";
    $logout=TRUE;
}else{
    $path="./dashboard/login.php";
    $status="Login";
    $logout=FALSE;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Loanday Template">
    <meta name="keywords" content="Loanday, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brothers | Peça já!</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__search">
            <i class="fa fa-search search-switch"></i>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/burgue.png" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="#colab">Colaboradores</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget">
            <li><i class="fa fa-map-marker"></i> <?php date_default_timezone_set('America/Sao_Paulo');echo nl2br("Av. Lanches, Nº1029 - Jundiaí/SP ");
                    
                    $numero_dia = date('w')*1;
                    $dia_mes = date('d');
                    $numero_mes = date('m')*1;
                    $ano = date('Y');
                    $dia = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');
                    $mes = array('', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
                    echo "<br>Jundiaí, ".$dia_mes . " de " . $mes[$numero_mes] . " de " . $ano . " Horário ".date('H:i', $_SESSION['hora']);
                ?></li>
            <li><i class="fa fa-phone"></i> (11) 4567-8910</li>
            <li><i class="fa fa-envelope"></i> brothersburgue@gmail.com</li>
        </ul>
        <div class="offcanvas__language">
            <img src="img/flag.png" alt="">
            <span>Portugues/BR</span>
            <i class="fa fa-angle-down"></i>
            <ul>
                <li><a href="#">Portugues/BR</a></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <ul class="header__top__widget">
                            <li><i class="fa fa-map-marker"></i> 
                    <?php date_default_timezone_set('America/Sao_Paulo');echo nl2br("Av. Lanches, Nº1029 - Jundiaí/SP <br>");
                    ?>
                    </li>
                            <li><i class="fa fa-phone"></i> (11) 4567-8910</li>
                            <li><i class="fa fa-envelope"></i> brothersburgue@gmail.com</li>
                            <li><i class="fa fa-calendar"></i>
                    <?php
                    $numero_dia = date('w')*1;
                    $dia_mes = date('d');
                    $numero_mes = date('m')*1;
                    $ano = date('Y');
                    $dia = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');
                    $mes = array('', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
                    echo "Jundiaí, ".$dia_mes . " de " . $mes[$numero_mes] . " de " . $ano . " - ".date('H:i');?>
                </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__top__language">
                            <img src="img/bra.png" alt="">
                            <span>Portugues/BR</span>
                            <i class="fa fa-angle-down"></i>
                            <ul>
                                <li><a href="index.php">Portugues/BR</a></li>                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logob.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.php">Início</a></li>
                                <li><a href="#colab">Colaboradores</a></li>
                                <li><a href="./cardapio.php">Cardápio</a></li>
                                <li><a href="fornecedores.php">Fornecedores</a></li>
                                <li><?php echo "<a href=".$path.">".$status."</a>" ?></li>
                            </ul>
                            
                        </nav>
                        <?php if($logout==TRUE) echo '<a href="./dashboard/logout.php"><div class="header__search"><i class="fa-solid fa-arrow-right-from-bracket"></i></div></a>' ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="header__search">
                            <i class="fa fa-search search-switch"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
  
    <section class="hero set-bg" data-setbg="img/hamb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hero__text">
                        <h2>Faça seu pedido:</h2>
                        <h5 style="color:white;"><b>Tempo de entrega aproximadamente: 25 minutos</b></h5><br>
                        <a href="#" class="primary-btn howit-btn">Faça seu pedido AGORA!</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <div class="hero__form">
                        <h3></h3>
                        <form action="#">
                            <div class="input-list">
                                <div class="input-list-item">
                                    <p>Nome:</p>
                                    <input type="text" name="nome">
                                </div>
                                <div class="input-list-item">
                                    <p>Telefone:</p>
                                    <input type="text" name="telefone">
                                </div>
                            </div>
                            <div class="input-full-width">
                                <p>Endereço:</p>
                                <input type="text" name="endereco">
                            </div>

                            <div class="input-full-width">
                                <p>Quantidade:</p>
                                <input type="text" name="quantidade">
                            </div>

                            <div class="select">
                                <p>Pedido:</p>
                                <!--<input type="text" name="pedido">-->

                                <select class="input-full-width" name="pedido">
                                    <option value="Hamburguer manos e minas">Hamburguer manos e minas</option>
                                    <option value="Hambúrguer misto">Hambúrguer misto</option>
                                    <option value="Hambúrguer de frango">Hambúrguer de frango</option>
                                    <option value="Hambúrguer de picanha">Hambúrguer de picanha</option>
                                    <option value="Hambúrguer de salmão">Hambúrguer de salmão</option>
                                </select>
                            </div>
                            <button type="submit" class="site-btn">Realizar Pedido!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Begin -->
    <a name="colab"></a><div class="testimonial spad set-bg" data-setbg="img/testimonial/testimonial-bg.jpg">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Colaboradores</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial__carousel">
        <div class="container">
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <img src="img/testimonial/higor.png" alt="" height="130" width="130">
                            <h5>Higor B. da Silva</h5>
                            <span>Full-Stack</span>
                            <p>“Não é a linguagem de programação que define o programador, mas sim sua lógica.” – David Ribeiro Guilherme</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <img src="img/testimonial/jp.png" alt="">
                            <h5>João Paulo C. da Silva</h5>
                            <span>Full-Stack</span>
                            <p>“Uma linguagem não faz seu código ser bom, programadores bons fazem seu código ser bom.” – Samuel Custódio</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <img src="img/testimonial/iam.png" alt="">
                            <h5>Lariany B. do Nascimento</h5>
                            <span>Full-Stack</span>
                            <p>“Inspecionar para prevenir defeitos é bom; Inspecionar para encontrar defeitos é desperdício.” – Shigeo Shingo</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <img src="img/testimonial/my.png" alt="">
                            <h5>Myrelle S. Santos</h5>
                            <span>Full-Stack</span>
                            <p>"Eu recomendo a todos que tentem programar pelo menos uma vez. Eu recomendo para todos, mas especialmente para as meninas" – Malala Yousafzai</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial__item">
                            <img src="img/testimonial/fnm.png" alt="">
                            <h5>Felipe N. Machado</h5>
                            <span>Full-Stack</span>
                            <p>“Um computador permite que você faça mais erros mais rapidamente do que qualquer outra invenção da história da humanidade, com exceção das mãos e da tequila.” - Mitch Ratcliffe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="./index.php"><img src="img/burgue.png" alt=""></a>
                        </div>
                        <p style="margin-top:-50px;">Aqui você encontra os melhores Burgues da região.</p>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5></h5>
                        <div class="footer__widget">
                            <ul>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Redes sociais</h5>
                        <div class="footer__widget footer__widget--social">
                            <ul>
                                <li><a href="https://pt-br.facebook.com/"><i class="fa fa-facebook"></i> Facebook</a></li>
                                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i> Instagram</a></li>
                                <li><a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp"></i> WhatsApp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget footer__widget--address">
                        <h5>Horário de funcionamento</h5>
                        <p>Trabalhamos todos os dias da semana!</p>
                        <ul>
                            <li>Segunda a sexta: 11h00 - 20h00</li>
                            <li>Sábado: 10h00 - 18h00</li>
                            <li>Domingo: 11h00 - 18h00</li>
                        </ul>
                    </div>
                </div>
            </div>
                    <div class="col-lg-6 col-md-6">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="https://kit.fontawesome.com/6f55bcb40e.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

<?php
error_reporting(0);
$nome=$_GET['nome'];
$telefone=$_GET['telefone'];
$endereco=$_GET['endereco'];
$quantidade=$_GET['quantidade'];
$pedido=$_GET['pedido'];
$pedidoN = rand();
$arquivo = fopen("./produtos.txt","a");
fwrite($arquivo,"****Guia de pedidos****\n\n-Nº pedido: $pedidoN\n-Nome:$nome\n-Telefone:$telefone\n-Endereço:$endereco\n-Qtd:$quantidade\n-Tipo de pedido:$pedido\n\n");
fclose($arquivo);
?>