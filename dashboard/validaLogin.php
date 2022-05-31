<?php
    session_start();
    $login = array("user01", "user02", "user03", "user04", "user05");
    $senha = array("senha01", "senha02", "senha03", "senha04", "senha05");
    $tamArray = count($login);
    $msg = FALSE;
    for ($i = 0; $i < $tamArray; $i++) {
        if ($_POST["login"] == $login[$i] && $_POST["senha"] == $senha[$i]) {
            $msg = TRUE;
            break;
        }
    }
    if ($msg) {
        $_SESSION["logado"] = TRUE;
        $_SESSION["user"] = $_POST["login"];
        header ("Location: index.php");
    }
    else {
        header ("Location: login.php?erro=1");
    }
?>
