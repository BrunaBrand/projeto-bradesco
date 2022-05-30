<?php require_once("connections/conn_bd_ctec.php")?>

<?php 
    
//Criando a consulta por ID para passagem de parâmetro

    
    
if(isset($_GET['idCurso'])){
$idCurso = $_GET['idCurso'];
    };
    
    
    
	// Criando a consulta
$query_rs_curso = "SELECT * FROM tb_cursos WHERE ativo = 1 AND idCurso = $idCurso";

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
<title><?php echo($row_rs_curso['subtitulo']); ?>- CTEC Curso de Tecnologia</title>
<meta name="description" content="blablabla">
<meta name="keywords" content="curso, ti, tecnologia, informação, treinamento, escola, web, programação, php, html5, css3, javascript, logica, administração, gestão, responsivo, banco, dados, sql, mysql, xampp, w3c, bootstrap, semântico, site, website, desenvolvimento, criação, front-end, back-end, full-stack, conexão, mysqli, Bruna">


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
	<h1 class="fonte-zero"><?php echo($row_rs_curso['titulo']); ?> - CTEC Curso de Tecnologia</h1>
 <header>
<!--Topo site-->
	 <?php include("_topo.php")?>
<!--Menu-->	
	 <?php include("_menu.php")?>

</header>
	
	<!--Galeria de imagens BANNER-->

		<div class="alert alert-dark text-center" role="alert"><a href="#" class="alert-link"></a>
		<h2><?php echo($row_rs_curso['titulo']); ?></h2>
			</div>
	
    <!--FIM Galeria de imagens BANNER-->
	
	
	
	
	<!--Contéudo do banco de dados-->
	<div class="container-fluid">
		<div class="container">
		 <section>
		   <h2 class="fonte-zero">Conteúdo do site</h2>
	
			 <div class="row">
				 
				 
			 	<div class="col-xl-12">
					
					<h5><?php //echo($row_rs_curso['idCurso']); ?> - <?php echo($row_rs_curso['subtitulo']); ?></h5>
					
				 
				 </div>
				 
				 <div class="col-xl-8">
					
				 <?php echo($row_rs_curso['descricao']); ?><br><br>
					 <!--<button type="button" class="btn btn-dark">+Detalhes</button><br><br>-->



				 
				 </div>
				 
				  <div class="col-xl-4"> 
					  
					  <a href="imagens/upload/<?php echo($row_rs_curso['img1']); ?>" title="<?php echo($row_rs_curso['titulo']); ?>" data-lightbox="example-1"> <img src="imagens/upload/<?php echo($row_rs_curso['img1Thumb']); ?>" alt="<?php echo($row_rs_curso['titulo']); ?>" title="<?php echo($row_rs_curso['titulo']); ?>" class="img-fluid"></a>

			     </div>
				 <div class="col-xl-12"><strong>Público Alvo: </strong> <?php echo($row_rs_curso['publicoAlvo']); ?></div>
				 <div class="col-xl-12"><strong>Carga Horária: </strong> <?php echo($row_rs_curso['cargaHoraria']); ?> horas.</div>
                 <div class="col-xl-12"><strong>Pré-requisito: </strong> <?php echo($row_rs_curso['preRequisito']); ?></div>
                  <div class="col-xl-12"><strong>Horário: </strong> <?php echo($row_rs_curso['horario']); ?></div>
                  <div class="col-xl-12"><strong>Curso presencial/On-line: </strong> 
                      <?php if($row_rs_curso['ead'] == 0){echo("Presencial");} else{echo("On-line");}; ?>
                 </div>
                 <div class="col-xl-12"><strong>Vagas: </strong> <?php echo($row_rs_curso['vagas']); ?></div>
                  <div class="col-xl-12"><strong>Certificação: </strong> 
                      <?php if($row_rs_curso['certificacao'] == 1){echo("Sim, receba certificado no final do curso.");} else{echo("Treinamento não certificado.");}; ?>
                 </div>
                 <span <?php if(empty($row_rs_curso['video'])){echo("style='display: none'");};  ?>
                 <div class="col-xl-12"><strong>Valor do curso: </strong> R$ <?php echo(number_format($row_rs_curso['valor'], 2, ',','.')); ?></div>
             </span>
                 
                 <div class="col-xl-12"><strong>Vídeo </strong>: <br>
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo($row_rs_curso['video']); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 </div>
                </span>




			 </div>

			
			</section>
		</div>
	</div>
	
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