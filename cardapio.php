<?php
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
}
?>