<?php
//Incluir a conexao 
include("conexao.php");

//Obter dados do input

$obterDados = file_get_contents("php://input");

//extrair os dados do Json_decode

$extrair = json_decode($obterDados);

//separar  os dados Json

$public_nomeCurso = $extrair->cursos->public_nomeCurso;
$public_valorCurso = $extrair->cursos->public_valorCurso;

//SQL

$sql = "insert into cursos (public_nomeCurso, public_valorCurso) values ('$nomeCurso',$valorCurso)";

//Exportar os dados cadastrados

$cursos = array(
  'nomeCurso' => $nomeCurso,
  'valorCurso' => $valorCurso
);

json_encode($cursos);
?>
