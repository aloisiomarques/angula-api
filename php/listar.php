<?php

      //Incluir a conexao
      include("conexao.php");

      //sql
      $sql = "SELECT *FROM cursos";

      //executar
      $executar = mysqli_query($conexao, $sql);

      //vetor
      $cursos = [];

      //índice
      $indice = 0;

      //laço
      while ($linha = mysqli_fetch_assoc($executar)) {
        $cursos[$indice]['public_idCurso'] = $linha['public_idCurso'];
        $cursos[$indice]['public_nomeCurso'] = $linha['public_nomeCurso'];
        $cursos[$indice]['public_valorCurso'] = $linha['public_valorCurso'];

        $indice++;
      }

      //JSON
      json_encode(['cursos' => $cursos]);
  ?>