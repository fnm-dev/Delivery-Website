<?php
    session_start();
    if(!isset($_SESSION["logado"])){
         $_SESSION["logado"]=NULL;
    }
  
    if(isset($_SESSION["logado"]) || $_SESSION["logado"] == TRUE){
        $path="./dashboard/index.php";
        $status="Painel";
        $logout=TRUE;
    }else{
        $path="./dashboard/login.php";
        $status="Login";
        $logout=FALSE;
    }
?>