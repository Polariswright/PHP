<?php 
$local = "localhost";
$usuario = "root";
$senha = "";
$banco = "senac";

$conexao = mysqli_connect($local,$usuario,$senha,$banco);

echo "banco de dados ok!!";
header("Content-Type: text/html; charset=utf-8");
mysqli_query($conexao, "SET NAMES 'utf8'" );

?>