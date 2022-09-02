<?php

include "../conexao.php";
if (isset($_GET['login'])) {
    $login = $_GET['login'];

    $sql = "select * from usuario where login ='$login'";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);
    $nome = $exibe['nome'];
    $email = $exibe['email'];
    //colocando o vetor em variaveis


} else {
    $erro = 0;
    $erro++;
};

?>


<?php
include "../controle.php";
?>

<body>
    <div class="container text-light pag" id="grad">
        <h1>Editar Usuário </h1>
        <hr>
        <?php
        $erro = 0;
        if ($erro) {
            echo "
                <p class='p-5'>
                Nenhum Professor foi selecionado. Clique no botão voltar para selecionar o professor que deseja editar.
                </p>";
        } else {



        ?>

            <form method="post" action="updateProfessor.php" name="form">
                <div class="mb-3">
                    <label for="idProfessor" class="form-label">ID</label>
                    <input type="hidden" class="form-control" id="id" value="<?php echo $login; ?>" name="login" required>
                </div>
                <div class="mb-3">


                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" value="<?php echo $nome; ?>" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="nome@exemplo.com" required>
                </div>
                

            <?php
        }
            ?>

            <div class="row">
                <div class="col text-start">

                    <a href="listarUsuario.php"><button type="button" class="btn btn-warning btn-sm">Voltar</button></a>

                </div>

                <div class="col text-end">
                    <button type="submit" class="btn btn-primary"> EDITAR DADOS</button></a>
                </div>
            </div>
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <?php
    include "../footer.php";
    ?>