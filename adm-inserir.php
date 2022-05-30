<?php 

//Acesso restrito com autenticação
include('adm-autenticacao.php');

require_once("connections/conn_bd_ctec.php") ?>


                


<?php
    
    //Validando a existência de dados com isset

    if(isset($_POST['titulo']) && isset($_POST['subtitulo']) && isset($_POST['descricao']) && isset($_POST['publicoAlvo']) && isset($_POST['cargaHoraria']) && isset($_POST['preRequisito']) && isset($_POST['horario']) && isset($_POST['ead']) && isset($_POST['vagas']) && isset($_POST['certificacao']) && isset($_POST['valor']) && isset($_FILES['img1']) && isset($_FILES['img1Thumb']) && isset($_POST['video']) && isset($_POST['home']) && isset($_POST['ativo']) && isset($_POST['areaTi']) && isset($_POST['areaAdm'])){
    
    
    
    //variável Super global $_POST[] toda variável seguida de um underline, significa que ele engloba todo o projeto
    
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$descricao = $_POST['descricao'];
$publicoAlvo = $_POST['publicoAlvo'];
$cargaHoraria = $_POST['cargaHoraria'];
$preRequisito = $_POST['preRequisito'];
$horario = $_POST['horario'];
$ead = $_POST['ead'];
$vagas = $_POST['vagas'];
$certificacao = $_POST['certificacao'];
$valor = $_POST['valor'];
//$img1 = $_POST['img1'];
//$img1Thumb = $_POST['img1Thumb'];
$video = $_POST['video'];
$home = $_POST['home'];
$ativo = $_POST['ativo'];
$areaTi = $_POST['areaTi'];
$areaAdm = $_POST['areaAdm'];

    
//Gravando o nome do arquivo de imagem, anular $_POST['img1'], alterar o insert e && isset($_FILE['img1'])
        
$img1 = $_FILES['img1'];
$img1Nome = $img1['name'];
//FAZER ESSE MESMO PROCESSO C0M O THUB
$img1Thumb = $_FILES['img1Thumb'];
$img1ThumbNome = $img1Thumb['name'];
        
        
//Upload das imagens
set_time_limit(0); //Definido como zero, não é imposto nenhum limite para a execução
$diretorio = "imagens/upload";
        
$id_img1 = "img1";
$img1Nome = $_FILES[$id_img1]["name"];
$img1Temp = $_FILES[$id_img1]["tmp_name"];
move_uploaded_file($img1Temp, "$diretorio/$img1Nome");

        
$id_img1Thumb = "img1Thumb";
$img1ThumbNome = $_FILES[$id_img1Thumb]["name"];
$img1ThumbTemp = $_FILES[$id_img1Thumb]["tmp_name"];
move_uploaded_file($img1ThumbTemp, "$diretorio/$img1ThumbNome");
    
      
    
//inserindo dados no bd
//Sintaxe: INSERT INTO tabela (campos da tabela) VALUES (dados dos campos);
$inserir = "INSERT INTO tb_cursos (idCurso, titulo, subtitulo, descricao, publicoAlvo, cargaHoraria, preRequisito, horario, ead, vagas, certificacao, valor, img1, img1Thumb, video, home, ativo, areaTi, areaAdm) VALUES ('NULL', '$titulo', '$subtitulo', '$descricao', '$publicoAlvo', '$cargaHoraria', '$preRequisito', '$horario', '$ead', '$vagas', '$certificacao', '$valor', '$img1Nome', '$img1ThumbNome', '$video', '$home', '$ativo', '$areaTi', '$areaAdm');";

//executando a instrução de inserir dados

$resultado = mysqli_query($conn_bd_ctec, $inserir);


//verificando se deu certo o resultado de inserir e REDIRECIONANDO

if($resultado == true){
    echo('<script>alert("Dados inseridos com sucesso!");
    window.location.href="adm-lista.php";
    </script>');
} else{
    echo('<script>alert("Falha ao inserir dados!");</script>');
    
};

};

?>



<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Inserir Cursos - Administração do site</title>
</head>

<body>
	
<h1>Inserir Cursos - Administração do site</h1><br><br>
    
    <a href="adm-logout.php">Sair</a>
    <br>

    
<form method="post" enctype="multipart/form-data" id="form_inserir">
	
  <input name="idCurso" type="hidden" id="idCurso"><br>
        
	Título do curso:  <input name="titulo" type="text" required="required" id="titulo" size="100"><br><br>
        
	Subtitulo: <input name="subtitulo" type="text" id="subtitulo" size="100"><br><br>
        
	Descrição: <textarea name="descricao" cols="150" rows="10" id="descricao"></textarea><br><br>
        
	Público Alvo: <input name="publicoAlvo" type="text" id="publicoAlvo" size="100"><br><br>
        
	Carga Horária: <input name="cargaHoraria" type="number" id="cargaHoraria" max="999" min="0"><br><br>
        
	Pré-Requisito: <input name="preRequisito" type="text" id="preRequisito" size="100"><br><br>
        
	Horário: <input name="horario" type="text" id="horario"><br><br>
        
	EAD: <input name="ead" type="hidden" id="ead" value="0">
      <input name="ead" type="checkbox" id="ead" value="1">
      <br><br>
        
	Vagas: <input name="vagas" type="number" id="vagas" min="0"><br><br>
        
	Certificação: <input name="certificacao" type="hidden" id="certificacao" value="0">
        <input name="certificacao" type="checkbox" id="certificacao" value="1"><br><br>
        
    Valor: <input name="valor" type="text" id="valor" value="0.00"><br><br>
        
    Img1 G: <input name="img1" type="file" id="img1"><br><br>
        
    Img1 Thumb P: <input name="img1Thumb" type="file" id="img1Thumb"><br><br>
        
    Vídeo do YouTube: <input name="video" type="text" id="video" size="100"><br><br>
        
    Exibir na home: <input name="home" type="hidden" id="home" value="0">
                    <input name="home" type="checkbox" id="home" value="1">    
      <br><br>
        
    Curso Ativo: <input name="ativo" type="hidden" id="ativo" value="0">
                 <input name="ativo" type="checkbox" id="ativo" value="1">    
      <br><br>
        
    Exibir na página de TI: <input name="areaTi" type="hidden" id="areaTi" value="0">
      <input name="areaTi" type="checkbox" id="areaTi" value="1">
      <br><br>
        
    Exibir na página de Adm: <input name="areaAdm" type="hidden" id="areaAdm" value="0">
      <input name="areaAdm" type="checkbox" id="areaAdm" value="1">
      <br><br><br>
    
    <input type="submit">
    















	


	
	
	</form>
    
<br>
<br>
<br>
<br>

</body>
</html>