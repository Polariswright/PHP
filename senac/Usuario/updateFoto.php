<?php
include "../conexao.php";
include "../controle.php";

    if(isset($_POST['login'])){
        $login = trim($_POST['login']);

        //recebendo arquivos da imagem
        $nome = $_FILES['foto']['nome'];
        $temp = $_FILES['foto']['tmp_name']; //armazena num lugar temporario a foto
        $caminho = '../fotos/'; //mostra o caminho onde a foto será armazenada de verdade
        $foto = $caminho . $nome; 

        //update de imagem
        $upload = move_uploaded_file($temp,$foto);

        if($upload){
            $sql = "update usuarios set foto = $foto where login = '$login'";
            $alterar = mysqli_query($caminho,$sql);
        }
    }
    else{

    }
?>