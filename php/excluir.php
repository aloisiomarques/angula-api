<?php
    //Incluir a conexao 
    include ("conexao.php");

    //Obter dados

    $obterDados = file_get_contents("php://input");

    //extrair os dados do Json

    $extrair = json_decode($obterDados);

    //separar  os dados Json

    $public_idCurso = $extrair->cursos->public_idCurso;

    //SQL

    $sql = "delete from cursos where public_idCurso = $public_idCurso";
    mysqli_query($conexao,$sql);
?>
