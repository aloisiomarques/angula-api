<?php
    //Incluir a conexao 
    include ("conexao.php");

    //Obter dados

    $obterDados = file_get_contents("php://input");

    //extrair os dados do Json

    $extrair = json_decode($obterDados);

    //separar  os dados Json

    $public_idCurso = $extrair->cursos->public_idCurso;
    $public_nomeCurso = $extrair->cursos->public_nomeCurso;
    $public_valorCurso = $extrair->cursos->public_valorCurso;

    //SQL

    $sql = "update cursos set public_nomeCurso='$nomeCurso', public_valorCurso=$valorCurso where public_idCurso";
    mysqli_query($conexao,$sql);

    //Exportar os dados cadastrados

    $cursos = array (
        'nomeCurso' => $nomeCurso,
        'valorCurso' => $valorCurso
    );

      json_encode($cursos);
?>
