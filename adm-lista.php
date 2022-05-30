<?php 
//Acesso restrito com autenticação
include('adm-autenticacao.php');

require_once("connections/conn_bd_ctec.php")?>

<?php 
// Criando a consulta
$query_rs_curso = "SELECT * FROM tb_cursos ORDER BY idCurso DESC";

// mysqli::query -- mysqli_query — Performs a query on the database
$rs_curso = mysqli_query($conn_bd_ctec, $query_rs_curso) or die(mysqli_error($conn_bd_ctec));

$row_rs_curso = mysqli_fetch_assoc($rs_curso); //busca uma linha de resultado, no caso a primeira.
	

$totalRow_rs_curso = mysqli_num_rows($rs_curso); //mysqli_num_rows - Obtém o número de linhas "total" no resultado.

?>
<!--Php echo (tem a mesma função de print)-->


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lista de Cursos - Adm. do site</title>
    
    
<!--Confirmação de excluir-->    
    
<script>
function confirmDelete(delUrl){
    if(confirm("Deseja realmente EXCLUIR???")){
        document.location=delUrl;
    };
};        
</script>
    
<!--FIM Confirmação de excluir-->       
    
    
</head>

<body>
    
<h1>Lista de Cursos - Adm. do site</h1>
    
<a href="adm-logout.php">Sair</a>
    
    <table width="100%" border="0">
  <tbody>
    <tr>
      <td align="center"><strong>Inserir</strong></td>
      <td align="center"><strong>Excluir</strong></td>
      <td align="center">&nbsp;</td>
      <td align="center"><strong>Id</strong></td>
      <td><strong>Titulo</strong></td>
      <td align="center"><strong>Ativo</strong></td>
      <td align="center"><strong>Home</strong></td>
      <td align="center"><strong>Area TI</strong></td>
      <td align="center"><strong>Area Adm</strong></td>
      <td align="center"><strong>Img</strong></td>
    </tr>
      
      <!--inicio do loop de registro-->
				 <?php do { ?>
      
      
    <tr>
      <td colspan="10"><hr></td>
    </tr>
    <tr>
      <td align="center"><a href="adm-inserir.php"><img src="imagens/inserir.png" width="20" height="20" alt=""/></a></td>
      <td align="center"><a href="adm-excluir.php?idCurso=<?php echo($row_rs_curso['idCurso']); ?>" onClick="return confirm('Deseja realmente EXCLUIR???')"><img src="imagens/delete.gif" width="16" height="15" alt=""/></a></td>
      <td align="center">&nbsp;</td>
      <td align="center"><?php echo($row_rs_curso['idCurso']); ?></td>
      <td align="left"><?php echo($row_rs_curso['titulo']); ?></td>
      <td align="center"><?php echo($row_rs_curso['ativo']); ?></td>
      <td align="center"><?php echo($row_rs_curso['home']); ?></td>
      <td align="center"><?php echo($row_rs_curso['areaTi']); ?></td>
      <td align="center"><?php echo($row_rs_curso['areaAdm']); ?></td>
      <td align="center"><img src="imagens/upload/<?php echo($row_rs_curso['img1Thumb']); ?>" alt="" width="50"/></td>
    </tr>
    <tr>
      <td colspan="10"><hr></td>
    </tr>
      
      <?php } while ($row_rs_curso = mysqli_fetch_assoc($rs_curso)); ?>

                <!--Fim do loop-->
  </tbody>
</table>

</body>
</html>