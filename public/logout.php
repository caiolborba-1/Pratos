<?php
// se eu me lembro é para que caso a pessoa copie o endereço e cole para entrar, o site leve a pessoa para a pagina de login.
    session_start();
    session_destroy();
    header("Location: ../index.php");
    exit();

?>