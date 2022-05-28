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