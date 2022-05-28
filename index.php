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
<?php
    //include 'enviaWhatsapp.php';
?>
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
                <li><a href="./cardapio.php">Cardápio</a></li>
                <li><a href="fornecedores.php">Fornecedores</a></li>
                <li><?php echo "<a href=".$path.">".$status."</a>" ?></li>
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
                    echo "<br>Jundiaí, ".$dia_mes . " de " . $mes[$numero_mes] . " de " . $ano . " Horário ".date('H:i');
                ?></li>
            <li><i class="fa fa-phone"></i> (11) 4567-8910</li>
            <li><i class="fa fa-envelope"></i> brothersburgue@gmail.com</li>
        </ul>
        <div class="offcanvas__language">
            <img src="img/bra.png" alt="">
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
                        <form>
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
                            <div class="form-group mb-2">
                            <label>Enviar</label>
                            <div class="col px-0">
                                <button id="by-link" type="button" class="btn btn-info">Link</button>
                                <button id="by-popup" type="button" class="btn btn-info">PopUp</button>
                                <hidden id="phone" value="5511942036449"></hidden>
                                <hidden id="message" value="abc"></hidden>
                            </div>
                        </div>
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
                                <li><a href="whatsapp-send.html">aaaaa</a></li>
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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>
    <script>
        let phone = document.getElementById('phone')
        let message = document.getElementById('message')        

        // buttons
        let linkHandler = document.getElementById('by-link')
        let popUpHandler = document.getElementById('by-popup')        

        // font: https://detectmobilebrowsers.com
        let isMobile = (function(a) {
            if ( /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)) ) {
                return true
            } else {
                return false
            }
        })(navigator.userAgent || navigator.vendor || window.opera)


        const makeLink = function(mode) {        

            let mount = function() {
                if ( isMobile ) {
                    let target = `whatsapp://send?`
                    if ( !!phone && phone.value !== '' ) {
                        target += `phone=${encodeURIComponent(phone.value)}&`
                    }
                    if ( !!message && message.value !== '' ) {
                        target += `text=${encodeURIComponent(message.value)}`
                    }
                    return target
                } else {
                    let target = `https://api.whatsapp.com/send?`
                    if ( !!phone && phone.value !== '' ) {
                        target += `phone=${encodeURIComponent(phone.value)}&`
                    }
                    if ( !!message && message.value !== '' ) {
                        target += `text=${encodeURIComponent(message.value)}`
                    }
                    return target
                }
            
            }        

            let openLink = function() {
                let a = document.createElement('a')
                a.target = '_blank'
                a.href = mount()
                a.click()
                console.log('By Link')
            }        

            let openPopUp = function() {
                let h = 650,
                    w = 550,
                    l = Math.floor(((screen.availWidth || 1024) - w) / 2),
                    t = Math.floor(((screen.availHeight || 700) - h) / 2)
                // open popup
                let options = `height=600,width=550,top=${t},left=${l},location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=0`
                let popup = window.open(mount(), 'self', options)
                if ( popup ) {
                    popup.focus()
                }
                console.log('By PopUp')
            }
            
            switch (mode) {
                case 'link':
                    openLink()
                break
                case 'popup':
                    openPopUp()
                break
            }
        } 

        // events handler(s)
        linkHandler.addEventListener('click', function(e) {
            makeLink('link')
        }, false)
        popUpHandler.addEventListener('click', function(e) {
            makeLink('popup')
        }, false)
    </script>
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