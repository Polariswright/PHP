<?php

include "../adm/conexao.php";
if(isset($_POST['login'])){
    $login = $_POST['login'];
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
   
    $sql = "update usuario set nome = '$nome', email= '$email' where login = '$login'";
    $alterar = mysqli_query($conexao,$sql);

    if($alterar){
        echo "
        <script>
        alert('Usuario Atualizado com Sucesso!');

        window.location = 'listarUsuario.php';
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
    <p>clique <a href = 'listarUsuario.php'>Aqui</a> para selecionar um aluno.</p>";
}

?>