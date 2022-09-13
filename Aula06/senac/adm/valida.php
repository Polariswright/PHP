<?php
 
    include "conexao.php";

    if(isset($_POST['login'])){
        $login = trim($_POST['login']);
        $senha = trim($_POST['senha']);

        $sql = "select * from usuario where login = '$login' and senha = '$senha'";
        $testeLogin = mysqli_query($conexao,$sql);
        $existe = mysqli_num_rows($testeLogin); //conta o numero de linhas do usuario e da senha 

        $msg = "";
        if($existe){
            $dados = mysqli_fetch_array($testeLogin); 
            $nome = $dados ['nome'];
            $nivel = $dados['nivel'];
            $email = $dados['email'];
            $foto = $dados['foto'];

        
            if(!isset($_SESSION)){ //tratamento de erro de sessao aberta
                session_start(); //abre uma variavel em qualquer pagina sem precisar ficar passando dados em cada uma pagina ate a sessao ser destruida
            }
            $_SESSION['login'] = $login;
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['nivel'] = $nivel;
            $_SESSION['foto'] = $foto;
            if($nivel == 'adm'){
                header('location: adm.php');
            }
            else{
                header('location: index.php');
            }

        }
        else{
            echo "Usuário ou senha inválidos.";
            
        }
    }
?>