<?php
    session_start();
    $login = array("admin");
    $senha = array("admin");
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
