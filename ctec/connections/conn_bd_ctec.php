<?php 

// Conexão LocalHost com Dreamwever
$hostname_conn_bd_ctec = "localhost";
$database_conn_bd_ctec = "bd_ctec";
$username_conn_bd_ctec = "root";
$password_conn_bd_ctec = "";

// Criando a conexão com a variável
$conn_bd_ctec = mysqli_connect($hostname_conn_bd_ctec,$username_conn_bd_ctec,$password_conn_bd_ctec, $database_conn_bd_ctec) or trigger_error(mysqli_connect_errno(), e_user_error);
// Verificando os caracteres do bd(banco de dados)
mysqli_set_charset($conn_bd_ctec, "utf8");



?>