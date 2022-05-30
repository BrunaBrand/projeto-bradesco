<?php require_once("connections/conn_bd_ctec.php")?>

<?php 
	// Criando a consulta
$query_rs_curso = "SELECT * FROM tb_cursos WHERE ativo = 1 AND areaTi = 1 ORDER BY idCurso DESC";

// mysqli::query -- mysqli_query — Performs a query on the database
$rs_curso = mysqli_query($conn_bd_ctec, $query_rs_curso) or die(mysqli_error($conn_bd_ctec));

$row_rs_curso = mysqli_fetch_assoc($rs_curso); //busca uma linha de resultado, no caso a primeira.
	

$totalRow_rs_curso = mysqli_num_rows($rs_curso); //mysqli_num_rows - Obtém o número de linhas "total" no resultado.

?>
<!--Php echo (tem a mesma função de print)-->

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no">
<title>Tecnologia da Informação - CTec- Curso de Tecnologia</title>
    
    <!-- CSS Bootstrap -->
<link href="bootstrap-4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="meus_estilos.css" rel="stylesheet" type="text/css">
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="galeria/engine1/style.css" />
<script src="galeria/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<link href="fontewesome/css/all.css" rel="stylesheet" type="text/css">
<script src="fontewesome/js/all.js"></script>
	<!--Ícone-->
	<link rel="shortcut icon" href="favicon.gif">
	<!--Efeito de trasição da imagem pequena para imagem grande-->
	<link href="lightbox2/dist/css/lightbox.min.css" rel="stylesheet" type="text/css">

</head>

<body>
<main>
	<h1 class="fonte-zero">Tecnologia da Informação - CTec- Curso de Tecnologia</h1>
 <header>
<!--Topo site-->
	 <?php include("_topo.php")?>
<!--Menu-->	
	 <?php include("_menu.php")?>
	 
	
</header>
	
	<!--Galeria de imagens BANNER-->
	
 	<?php include("_galeria.php")?>
	<div class="alert alert-dark text-center" role="alert"><a href="#" class="alert-link"></a>
		<h2>Tecnologia da Informação</h2>
		
</div>
	
	<!--FIM Galeria de imagens BANNER-->
	
	
	
	
	<!--Contéudo do banco de dados-->
	
	<?php include("_conteudo.php")?>
	
	
	<!--FIM Contéudo do banco de dados-->
	
	<!--Rodapé do site-->
	
	<?php include("_rodape.php")?>

	<!--FIM Rodapé do site-->
</main>
    
<!-- JS Bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>

   </body>
	

</html>

<?php
	//Libera  a memória associada ao resultado
	mysqli_free_result($rs_curso); 
?> 