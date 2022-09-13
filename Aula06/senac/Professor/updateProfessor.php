<?php

include "../adm/conexao.php";
if(isset($_POST['idProfessor'])){
    $idAluno = $_POST['idProfessor'];
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $endereco = trim($_POST['endereco']);
    $telefone = trim($_POST['telefone']);
   
    $sql = "update professores set nome = '$nome', email= '$email', endereco = '$endereco', telefone = '$telefone' where id = $idProfessor";
    $alterar = mysqli_query($conexao,$sql);

    if($alterar){
        echo "
        <script>
        alert('Professor Atualizado com Sucesso!');

        window.location = 'listarProfessor.php';
        </script>";
    }
    else{
        echo "
        <p>Sistema temporariamente fora do ar. Tente novamente mais tarde.</p>
        <p>Entre em contato com o administrador do site</p>
        ";
    }

    echo mysqli_error($conexao);

}
else{
    echo "<p>Esta é uma página de tratamento de dados.</p>
    <p>clique <a href = 'listarProfessor.php'>Aqui</a> para selecionar um aluno.</p>";
}

?>