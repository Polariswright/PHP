<?php

include "../conexao.php";
$sql = "select * from professores order by id";
$seleciona = mysqli_query($conexao, $sql);


?>




<?php
include "../controle.php";
?>

<body>
    <div class="container text-light  pag" id="grad">
        <div class="text-end">
            <a href="formularioProfessor.php"><button type="button" class="btn btn-success btn-sm">CADASTRAR NOVO ALUNO</button></a>
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
                        <a href="VisualizarProfessor.php?idProfessor=<?php echo $idProfessor; ?>">
                            <button type="button" class="btn btn-success btn-sm">Visualizar</button></a>
                        <a href="editarProfessor.php?idProfessor=<?php echo $idProfessor; ?>">
                            <button type="button" class="btn btn-primary btn-sm">Editar</button>
                        </a>
                        <a href="excluirProfessor.php?idProfessor=<?php echo $idProfessor;
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
        include "../footer.php";
        ?>

</html>