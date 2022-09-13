<?php

include "../adm/conexao.php";
if(isset($_POST['login'])){
    $login = $_POST['login'];
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $nome = trim($_POST['nome']);
    $senha = trim($_POST['senha']);
    $nivel = 'usu';
    $foto = '../fotos/semfoto.jpg';

    $sql = "insert into usuario(login,senha,nome,email,nivel,foto) values('$login','$senha','$nome','$email','$nivel','$foto')";
    $incluir = mysqli_query($conexao,$sql);

    if($incluir){

        echo "<script>
        alert('usuário cadastrado com sucesso!')
        window.location = 'listarUsuario.php'
        </script>";
    } else {
        echo "<p>Sistema temporariamente fora do ar. Tente novamente mais tarde.</p>
        <p>Entre em contato com o administrador do Sistema.</p>";
    };
    mysqli_error($conexao);
}
else {
    echo "<p>Esta é uma página de tratamento de dados. </p>
    <p> Clique <a href = 'formularioUsuario.php'>Aqui</a> para incluir um professor.</p>";

}




    
    

    


?>