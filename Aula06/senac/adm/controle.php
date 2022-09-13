
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-3 bg-dark text-light " >
        <div class="row">
            <div class="text-start">
                SENAC MADUREIRA
            </div>
            <div class="col text-end">
                <?php
                if(!isset($_SESSION)){
                    session_start();
                }
                if(isset($_SESSION['login'])){
                    $login = $_SESSION['login'];
                    $nome = $_SESSION['nome'];
                    $foto = $_SESSION['foto'];
                    echo "Bem vindo, $nome! | <a href='../adm/logout.php' class= 'text-light'>Logout</a>";
                }else{
                    echo
                    "<a href='../adm/login.php' class='text-light'>LOGIN</a> | 
                    <a href=''../Usuario/formularioUsuario.php' class='text-light'>Não possuo cadastro</a> " ;

                }
                
                ?>
                
            </div>
        </div>
    </div>
        

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>