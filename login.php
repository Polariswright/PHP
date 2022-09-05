<?php

include "controle.php";

?>
<link rel="stylesheet" href="css/style.css">
    <div class="container mt-5 text-center">
        <h1> Area de login</h1>
        <div class="row pag text-light" id="grad">
            <form action="#" name="form" method="POST">
                <div class="mb-3">
                    <label for="login" required name="login" id="login">Login</label>
                    <input type="text" class="form-control" id="login" name="login" required>
                </div>
                <div class="mb-3">
                    <label for="senha" required name="senha" id="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn btn-primary">Ok</button>
                <p><a href="Usuario/formularioUsuario.php">Não possuo cadastro</a></p>
            </form>
            <div class="text-center text-danger">
                <?php 
                include "valida.php";
                ?>
            </div>
        </div>
    </div>
<?php

include "footer.php";

?>