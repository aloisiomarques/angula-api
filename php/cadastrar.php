<?php
    //Incluir a conexao 
    include ("conexao.php");

    //Obter dados

    $obterDados = file_get_contents("php://input");

    //extrair os dados do Json

    $extrair = json_decode($obterDados);

    //separar  os dados Json

    $nomeCurso = $extrair->cursos->public_nomeCurso;
    $valorCurso = $extrair->cursos->public_valorCurso;

    //SQL

    $sql = "insert into cursos (public_nomeCurso, public_valorCurso) values ('$nomeCurso',$valorCurso)";

    //Exportar os dados cadastrados

    $cursos = [
        'nomeCurso' => $nomeCurso,
        'valorCurso' => $valorCurso
    ]

      json_encode(['cursos']=>$cursos);
?>
