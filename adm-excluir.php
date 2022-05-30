<?php 
//Acesso restrito com autenticação
include('adm-autenticacao.php');

require_once("connections/conn_bd_ctec.php")?>

<?php 
    
//Criando a consulta por ID para passagem de parâmetro

    
    
if(isset($_GET['idCurso'])){
$idCurso = $_GET['idCurso'];
    };
    
    
    
	// Criando a consulta
$query_rs_curso = "DELETE FROM tb_cursos WHERE tb_cursos.idCurso = $idCurso";

// mysqli::query -- mysqli_query — Performs a query on the database
$rs_curso = mysqli_query($conn_bd_ctec, $query_rs_curso) or die(mysqli_error($conn_bd_ctec));

//verificando se deu certo o resultado de excluir e redirecionar

if($rs_curso == TRUE){
    echo('<script>alert("Resgistro EXCLUÍDO com sucesso!!!");
    window.location.href="adm-lista.php";
    </script>');
    
} else{
    echo("Falha ao excluir dados!");
    
    
};

	

?>
<!--Php echo (tem a mesma função de print)-->
