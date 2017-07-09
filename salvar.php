<?php
$db = new PDO('mysql:host=localhost;dbname=logica_cd_cursos;charset=utf8mb4', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$nomeDoCurso = $_POST['nome'];
$db->query("insert into cursos (nome) values ('$nomeDoCurso')");
echo "curso criado com sucesso!";

?> 

