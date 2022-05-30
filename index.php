<?php include_once("./partials/verificaLogin.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Loanday Template">
        <meta name="keywords" content="Loanday, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Brothers | Peça já!</title>
        <?php include_once("./partials/styles.php") ?>
    </head>
    <body>
        <?php include_once("./partials/header_mobile.php") ?>
        <?php include_once("./partials/header.php") ?>
        <section class="hero set-bg" data-setbg="img/hamb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="hero__text" style="margin-bottom: 10rem;">
                            <h2>Retire seu pedido na loja ou peça para receber em casa</h2>
                            <h3 style="color:white;">Tempo de entrega aproximadamente: 25 minutos</h3><br>
                            
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2">
                        <button onclick="window.location.href='./cardapio.php'" class="btn btn-success" style="margin-top: 15rem; width:20rem; height:4rem; font-size:25px; text-align:center;">VER CARDÁPIO</button>
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
                                <p>“Um computador permite que você faça erros mais rapidamente do que qualquer outra invenção da história da humanidade, com exceção das mãos e da tequila.” - Mitch Ratcliffe</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><center><img src="./img/testimonial/hand.png" /></center><br>
        </div>
        <?php include_once("./partials/footer.php") ?>
        <?php include_once("./partials/search.php") ?>
        <?php include_once("./partials/scripts.php") ?>
    </body>
</html>