<?php
session_start();
session_destroy(); // Destruir todas as sessões logadas
header('Location: index.php');
exit();








?>