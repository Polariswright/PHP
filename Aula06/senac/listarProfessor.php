<?php

include "conexao.php";
$sql = "select * from alunos order by nome";
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
            <a href="formularioProfessor.php"><button type="button" class="btn btn-success btn-sm" >CADASTRAR NOVO PROFESSOR</button></a>
        </div>
        <h1>Lista de Alunos </h1>
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
                    TELEFONE
                </div>
                <div class="col-3">
                    CONTROLE
                </div>
            </div>
            <?php
            while ($exibe = mysqli_fetch_array($seleciona)) { //armazena o banco de dados na variavel
                $idProfessor = $exibe['id']; //busca as informacoes do banco


            ?>
                <div class="row p-1 bg-gradient bg-opacity-50">
                    <div class="col-1">
                        <?php
                        echo $exibe['id'];

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
                        echo $exibe['telefone']; ?>
                    </div>
                               
                 
                    <div class="col-3">
                    <button type="button" class="btn btn-success btn-sm">Visualizar</button>
                    <button type="button" class="btn btn-primary btn-sm">Editar</button>
                    <a href="excluirAluno.php?idAluno=<?php echo $idProfessor;
                    ?>" onclick="return confirm('Confirma a exclusão do Aluno?')">
                    <button class="btn btn-danger btn-sm">Excluir</button>
                    </a>
                    </div>
                    
                </div>
            <?php
            }
            ?>

        </div>