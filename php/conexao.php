<?php
    //variáveis

    $url = "localhost";
    $usuario = "me";
    $senha = "Su1S5nHa<>";
    $base = "api";

    //Conexão

    $conexao = mysqli_connect($url, $usuario, $senha, $base);
    
    //resolve problema de assentos
    mysqli_set_charset($conexao, "utf8");
?>
