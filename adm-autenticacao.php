<?php
session_start();

//Se a sessão do usuário !Não existir 

if(!$_SESSION['email']){
    
    header('Location: index.php');
    exit();
};




?>