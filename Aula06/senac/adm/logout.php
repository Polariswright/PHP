<?php 
session_start();//inicia a sessao
$_SESSION = array(); // carrega o array de dados
session_destroy(); //destroi as sessoes iniciadas
header('location: ../adm/index.php');
?>