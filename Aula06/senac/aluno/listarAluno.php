<?php

include "../adm/conexao.php";
$sql = "select * from alunos order by nome";
$seleciona = mysqli_query($conexao, $sql);


?>

<!doctype html>
<html lang="en">


<?php
include "../controle.php";
?>

<body>
    <div class="container text-light  pag" id="grad">
        <div class="text-end">
            <a href="formularioAluno.php"><button type="button" class="btn btn-success btn-sm">CADASTRAR NOVO ALUNO</button></a>
        </div>
        <h1>Lista de Usuários</h1>
        <div class="container text-center">
            <div class="row bg-dark text-light">
                <div class="col-1">
                    FOTO
                </div>

                <div class="col-1">
                    ID
                </div>
                <div class="col-2">
                    LOGIN
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
                $id = $exibe['id']; //busca as informacoes do banco


            ?>
                <div class="row p-1 bg-gradient bg-opacity-50">

                    <div class="col-1">
                        <img src="<?php echo $exibe['foto'] ?>" class="foto" alt="">
                    </div>

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
                        ******** 
                    </div>


                    <div class="col-3">
                        <a href="VisualizarAluno.php?login=<?php echo $id; ?>">
                            <button type="button" class="btn btn-success btn-sm">Visualizar</button></a>
                        <a href="editarUsuario.php?login=<?php echo $id; ?>">
                            <button type="button" class="btn btn-primary btn-sm">Editar</button>
                        </a>
                        <a href="excluirUsuario.php?login=<?php echo $id;
                                                            ?>" onclick="return confirm('Confirma a exclusão do Aluno?')">
                            <button class="btn btn-danger btn-sm">Excluir</button>
                        </a>
                    </div>

                </div>
            <?php
            }
            ?>

        </div>

        <?php
        include "../adm/footer.php";
        ?>

</html>