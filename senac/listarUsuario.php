<?php

include "conexao.php";
$sql = "select * from usuario order by nome";
$seleciona = mysqli_query($conexao, $sql);


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container text-light  pag" id="grad">
        <div class="text-end">
            <a href="formularioUsuario.php"><button type="button" class="btn btn-success btn-sm" >CADASTRAR NOVO USUÁRIO</button></a>
        </div>
        <h1>Lista de Usuários</h1>
        <div class="container text-center">
            <div class="row bg-dark text-light">
                <div class="col-1">
                    ID
                </div>
                <div class="col-2">
                    NOME
                </div>
                <div class="col-3">
                    E-MAIL
                </div>
                <div class="col-2">
                    SENHA
                </div>
                
                <div class="col-3">
                    CONTROLE
                </div>
            </div>
            <?php
            while ($exibe = mysqli_fetch_array($seleciona)) { //armazena o banco de dados na variavel
                $login = $exibe['login']; //busca as informacoes do banco


            ?>
                <div class="row p-1 bg-gradient bg-opacity-50">
                    <div class="col-1">
                        <?php
                        echo $exibe['login'];

                        ?>
                    </div>
                    <div class="col-2">
                        <?php echo $exibe['nome']; ?>
                    </div>
                    <div class="col-3">
                        <?php
                        echo $exibe['email']; ?>
                    </div>
                    <div class="col-2">
                        <?php
                        echo $exibe['senha']; ?>
                    </div>
                                      
                 
                    <div class="col-3">
                    <a href="VisualizarUsuario.php?login=<?php echo $login;?>">
                    <button type="button" class="btn btn-success btn-sm">Visualizar</button></a>
                    <a href="editarUsuario.php?login=<?php echo $login;?>">
                    <button type="button" class="btn btn-primary btn-sm">Editar</button>
                    </a>
                    <a href="excluirUsuario.php?login=<?php echo $login;
                    ?>" onclick="return confirm('Confirma a exclusão do Usuário?')">
                    <button class="btn btn-danger btn-sm">Excluir</button>
                    </a>
                    </div>
                    
                </div>
            <?php
            }
            ?>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>