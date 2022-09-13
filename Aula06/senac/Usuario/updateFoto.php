<?php
include "../adm/conexao.php";
include "../adm/controle.php";

    if(isset($_POST['login'])){
        $login = trim($_POST['login']);

        //recebendo arquivos da imagem
        $nome = $_FILES['foto']['name'];
        $temp = $_FILES['foto']['tmp_name']; //armazena num lugar temporario a foto
        $caminho = '../fotos/'; //mostra o caminho onde a foto será armazenada de verdade
        $foto = $caminho . $nome; 

        //update de imagem
        $upload = move_uploaded_file($temp,$foto);

        if($upload){
            $sql = "update usuario set foto = '$foto' where login = '$login'";
            $alterar = mysqli_query($conexao,$sql);
        }
        if($alterar){
            echo "
            <script>
            alert('Foto Atualizada com sucesso!')
            </script>";
        }
        else{
            echo "
            <p> Sistema temporariamente fora do ar. Tente novamente mais tarde.</p>
            <p>Entre em contato com o administrador do Sistema.</p>
            ";
            mysqli_error($conexao);
        }
    }
    else{
        echo "
        <p> Esta é uma página de tratamento de dados.</p>
        <p>Clique <a href='listarUsuario.php'> aqui </a> para selecionar um usuário.</p>
        ";

    }
?>