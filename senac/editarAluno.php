<?php

include "conexao.php";
if (isset($_GET['idAluno'])) {
    $idAluno = $_GET['idAluno'];

    $sql = "select * from alunos where id = $idAluno";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);
    $nome = $exibe['nome'];
    $endereco = $exibe['endereco'];
    $telefone = $exibe['telefone'];
    $email = $exibe['email'];
    $turma = $exibe['turma']; //colocando o vetor em variaveis


} else {
    $erro = 0;
    $erro++;
};

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Aluno </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container text-light pag" id="grad">
        <h1>Editar Aluno </h1>
        <hr>
        <?php
            $erro = 0;
            if($erro){
                echo "
                <p class='p-5'>
                Nenhum Aluno foi selecionado. Clique no botão voltar para selecionar o aluno que deseja editar.
                </p>";
            } 
            else{

            

        ?>

        <form method="post" action="updateAluno.php" name="form">
            <div class="mb-3">
                <label for="idAluno" class="form-label">ID</label>
                <input type="hidden" class="form-control" id="id" value="<?php echo $idAluno; ?>" name="idAluno" required>
            </div>
            <div class="mb-3">


                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" value="<?php echo $nome; ?>" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="nome@exemplo.com" required>
            </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $endereco; ?>" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>" required>
            </div>
            <div class="mb-3">
                <label for="turma" class="form-label">Turma</label>
                <input type="text" class="form-control" id="turma" name="turma" value="<?php echo $turma; ?>" required>
            </div>
            <?php
            }
            ?>

            <div class="row">
                <div class="col text-start">

                    <a href="listarAluno.php"><button type="button" class="btn btn-warning btn-sm">Voltar</button></a>

                </div>

                <div class="col text-end">
                    <button type="submit" class="btn btn-primary"> EDITAR DADOS</button></a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>