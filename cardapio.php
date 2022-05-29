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
        <div style="text-align: center; font-size: 20px;">
            <?php
                $arquivo = file_get_contents('./json/cardapio.json');
                $json = json_decode($arquivo);
                $arquivo = file_get_contents('./json/cardapio.json');
                $json = json_decode($arquivo);
                foreach($json as $registro){
                echo "<h2>". $registro->nome . '</h2><br />';
                echo "<img src='". $registro->imagem ."' width= '500px'><br/>";
                echo "<b>Descrição:</b> ". $registro->descricao . '<br />';
                echo "<b>Valor:</b> ". $registro->valor . '<br />';
                echo "<br><br>";
                }
            ?>
        </div>
        <?php include_once("./partials/footer.php") ?>
        <?php include_once("./partials/search.php") ?>
        <?php include_once("./partials/scripts.php") ?>
    </body>
</html>