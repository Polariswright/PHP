<?php

include "../adm/conexao.php";
if (isset($_POST['nome'])) {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $endereco = trim($_POST['endereco']);
    $telefone = trim($_POST['telefone']);
    $turma = trim($_POST['turma']);

    $sql = "insert into alunos(nome,email,endereco,telefone,turma) values('$nome','$email','$endereco','$telefone','$turma')";
    $incluir = mysqli_query($conexao, $sql);

    if ($incluir) {
        echo "
            <script>
            alert('usuário cadastrado com sucesso!');
            window,location = 'listarAluno.php';
            </script>
            ";
    }
    else{
        echo "
        <p> Sistema temporariamente fora do ar. Tente novamente mais tarde.</p>
        <p> Entre em contato com o administrador do Sistema.</p>
        
        
        ";
        echo mysqli_error($conexao);
    }
}
else{
    echo "<p> Esta é uma página de tratamento de dados. </p>
    <p> Clique <a href ='formularioAluno.php'>Aqui</a> para incluir um aluno </p> ";
}
