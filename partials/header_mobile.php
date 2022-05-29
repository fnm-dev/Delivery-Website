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