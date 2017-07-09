<?php
$db = new PDO('mysql:host=localhost;dbname=logica_cd_cursos;charset=utf8mb4', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>
<a href="criar.php">Criar Curso</a> <br/>
<h1><font color = "red"> "Flamengo" </font></h1>
<a href="http://colunadoflamengo.com/wp-content/uploads/2017/07/diego-everton-ribeiro.gif">Maior do Brasil</a> <br/>

<?php
foreach($db->query('SELECT * FROM logica_cd_cursos.cursos;') as $row) {
	$idDoCurso = $row['id'];
	$nomeDoCurso = $row['nome'];
	
    echo $idDoCurso.' '.$nomeDoCurso;
	echo "<br>";
	
}