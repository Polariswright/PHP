<?php

if(isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['login'])){
    echo "<script>
    alert('Area restrita a usuários logados. Informe seu login e sua senha.')
    window.location = 'login.php';
    </script>";
}
else{
    $nivel = $_SESSION['nivel'];
    $nome = $_SESSION['nome'];
    if($nivel != 'adm'){
        echo "
        <script>
        alert ('$nome, Área restrita a administradores.')
        window.location = 'index.php';
        </script>";
    }
}

?>