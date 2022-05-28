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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<?php

 echo '<form class="row g-3">';
  echo '<div class="col">';
    $arquivo = file_get_contents('./json/cardapio.json');
    $json = json_decode($arquivo);

    $arquivo = file_get_contents('./json/cardapio.json');
    $json = json_decode($arquivo);
    foreach($json as $registro){
    echo "<b>Nome:</b> ". $registro->nome . '<br />';
    echo "<b>Valor:</b> ". $registro->valor . '<br />';
    echo "<b>Descrição:</b> ". $registro->descricao . '<br />';
    echo "<b>Disponível:</b> ". $registro->disponivel . '<br />';
    //echo "<img src='". $registro->imagem ."'>";
    echo "<br><br>";
    echo '</div></div>';
}
?>
</body>
</html>