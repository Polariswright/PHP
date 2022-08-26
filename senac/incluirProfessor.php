<?php
include "conexao.php";
if (isset($_POST['nome'])) { //tratamento de erros
    $nome1 = trim($_POST['nome']);
    $email1 = trim($_POST['email']);
    $endereco1 = trim($_POST['endereco']);
    $telefone1 = trim($_POST['telefone']);
    $turno1 = trim($_POST['turno']); //o trim eh pra deixar um espaço em branco na variavel

    $sql = "insert into professores(nome,email,endereco,telefone,turno) values('$nome1','$email1','$endereco1','$telefone1','$turno1')"; //funcao com o sql
    $incluir = mysqli_query($conexao, $sql); //executar um comando no sql atraves do php


    if ($incluir) {
        echo "<script>
        alert('usuário cadastrado com sucesso!')
        window.location = 'listarProfessor.php'
        </script>";
    } else {
        echo "<p>Sistema temporariamente fora do ar. Tente novamente mais tarde.</p>
        <p>Entre em contato com o administrador do Sistema.</p>";
    };
    mysqli_error($conexao);
} else {
    echo "<p>Esta é uma página de tratamento de dados. </p>
    <p> Clique <a href = 'formularioProfessor.php'>Aqui</a> para incluir um professor.</p>";
}
