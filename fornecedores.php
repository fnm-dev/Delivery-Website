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
            $link = "./xml/fornecedores.xml"; 
            $xml = simplexml_load_file($link) -> fornecedores;

            foreach($xml -> fornecedor1 as $fornecedor1){ 
                echo "<strong>Nome:</strong> ".utf8_decode($fornecedor1 -> nome)."<br />"; 
                echo "<strong>Telefone:</strong> ".utf8_decode($fornecedor1 -> telefone1)."<br />";
                echo "<strong>Telefone:</strong> ".utf8_decode($fornecedor1 -> telefone2)."<br />";
                echo "<strong>E-mail:</strong> ".utf8_decode($fornecedor1 -> email1)."<br />";
                echo "<strong>E-mail:</strong> ".utf8_decode($fornecedor1 -> email2)."<br />";
                echo "<br />"; 
            } 
                foreach($xml -> fornecedor2 as $fornecedor2){ 
                echo "<strong>Nome:</strong> ".utf8_decode($fornecedor2 -> nome)."<br />"; 
                echo "<strong>Telefone:</strong> ".utf8_decode($fornecedor2 -> telefone1)."<br />";
                echo "<strong>Telefone:</strong> ".utf8_decode($fornecedor2 -> telefone2)."<br />";
                echo "<strong>E-mail:</strong> ".utf8_decode($fornecedor2 -> email1)."<br />";
                echo "<strong>E-mail:</strong> ".utf8_decode($fornecedor2 -> email2)."<br />";
                echo "<br />"; 
            } 
        ?>
        </div>
        <?php include_once("./partials/footer.php") ?>
        <?php include_once("./partials/search.php") ?>
        <?php include_once("./partials/scripts.php") ?>
    </body>
</html>