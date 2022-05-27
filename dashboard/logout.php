<?php 
    session_start();
    if(session_destroy()){
        $_SESSION="nlogado";
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Redirecionando...")';  
        echo '</script>';
        header ("Location: ../index.php");  
    } else{
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Não foi possível efetuar o lougout.")';  
        echo '</script>';
        header ("Location: index.php");
    }
?>