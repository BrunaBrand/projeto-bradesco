<?php
session_start();

require_once("connections/conn_bd_ctec.php");
    
//passagem de parâmetro para verificação do usuário e senha no banco de dados
//o ideal seria a senha estar criptografada com md5
//a nossa verificação está progetida contra ataque MySql injection

$usuario = mysqli_real_escape_string($conn_bd_ctec, $_POST['email']);
$senha = mysqli_real_escape_string($conn_bd_ctec, $_POST['senha']);
    

//consulta de usuário

    $query = "SELECT * FROM tb_login WHERE email = '{$usuario}' AND senha = '{$senha}'";

    //echo $query;

//Executar a consulta no BD

$result = mysqli_query($conn_bd_ctec, $query);

//Verificando se o conteúdo da consulta está correto
$row = mysqli_num_rows($result);
    //echo $row;

//Condicional para autenticar uma sessão de login

if($row == 1){
    $_SESSION['email'] = $usuario; //Para passar a sessão inicie o php com session_start();
    header('Location: adm-lista.php');
    exit();
    
} else{
    header('Location: adm-erro.php');
    exit();
};







?>