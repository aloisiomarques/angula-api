<?php
    //Incluir a conexao
    include("conexao.php");
    // include("content.php");

    //sql
    $sql = "SELECT *FROM cursos order by public_nomeCurso asc";

    //executar
    $executar = mysqli_query($conexao, $sql);

    //vetor
    $cursos = [];

    //índice
    $i = 0;

    //laço
    while ($result = mysqli_fetch_assoc($executar)) {
      $cursos[$i]['public_idCurso'] = $result['public_idCurso'];
      $cursos[$i]['public_nomeCurso'] = $result['public_nomeCurso'];
      $cursos[$i]['public_valorCurso'] = $result['public_valorCurso'];

      $i++;
    }

    //JSON
    json_encode(['cursos' => $cursos]);
  //  var_dump($cursos);
?>
