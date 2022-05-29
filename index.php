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
                                <p>“Um computador permite que você faça erros mais rapidamente do que qualquer outra invenção da história da humanidade, com exceção das mãos e da tequila.” - Mitch Ratcliffe</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once("./partials/footer.php") ?>
        <?php include_once("./partials/search.php") ?>
        <?php include_once("./partials/scripts.php") ?>
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