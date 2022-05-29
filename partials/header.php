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
                    <li><i class="fa fa-envelope"></i> brothersburguers@gmail.com</li>
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
                            <li><a href="index.php">Português/BR</a></li>                
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
                            <li><a href="./index.php#colab">Colaboradores</a></li>
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