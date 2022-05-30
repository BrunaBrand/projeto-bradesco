<?php require_once("connections/conn_bd_ctec.php")?>

<?php
//inserindo dados no bd
//Sintaxe: INSERT INTO tabela (campos da tabela) VALUES (dados dos campos);
$inserir = "INSERT INTO tb_cursos (idCurso, titulo) VALUES ('NULL', 'Teste');";

//executando a instrução de inserir dados

//$resultado = mysqli_query($conn_bd_ctec, $inserir);


?>



<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Inserir Cursos - Administração do site</title>
</head>

<body>
	
<h1>Inserir Cursos - Administração do site</h1>
	

	<form method="post" enctype="multipart/form-data" id="form_inserir">
	
	idCurso: <input name="idCurso" type="text" id="idCurso"><br><br>
	titulo:  <input name="titulo" type="text" id="titulo"><br><br>
	subtitulo: <input name="subtitulo" type="text" id="subtitulo"><br><br>
	descricao: <br>
		<textarea name="descricao" cols="150" rows="10" id="descricao"></textarea><br><br>
	publicoAlvo: <input name="publicoAlvo" type="text" id="publicoAlvo"><br><br>
	cargaHoraria: <input name="cargaHoraria" type="number" id="cargaHoraria"><br><br>
	preRequisito: <input name="preRequisito" type="text" id="preRequisito"><br><br>
	horario: <input name="horario" type="text" id="horario"><br><br>
	ead: <input name="ead" type="checkbox" id="ead"><br><br>
	vagas: <input name="vagas" type="number" id="vagas"><br><br>
	certificacao: <input name="certificacao" type="checkbox" id="certificacao" checked="checked">






	


	
	
	</form>
</body>
</html>