<?php
include "../adm/conexao.php";
include "../adm/controle.php";

    if(isset($_GET['login'])){
        $login = $_GET['login'];
        $sql = "select * from usuario where login = '$login'";
        $seleciona = mysqli_query($conexao, $sql);
        $exibe = mysqli_fetch_array($seleciona);
    }
?>
<div class="container pag" id="grad">
    <h1>Alterar Foto</h1>
    <hr>
    <div class="row">
        <div class="col-2">
          
        </div>
        <div class="col-8 text-light">
            <form name="" action="updateFoto.php" method="post" enctype="multipart/form-data"> <!--enctype para carregar os dados de fotos!-->
                <input type="hidden" name="login" value="<?php echo $login;  ?>">
                <div class="form-group">
                    <input type="file" id="foto" name="foto">
                    <button type="submit" class="btn btn-success btn-sm mt-5 text-center">Alterar</button>
                </div>
                <div class="row mt-5 ">
                    <div class="col text-start mt-5">
                        <button type="button" class="btn btn-warning btn-sm" onclick="window.history.go(-1)">
                        <!-- onclick para voltar paginas
                        window.history.go() vai para qualquer lado
                        forward para frente
                        back para trás  
                        !-->
                            VOLTAR
                        </button>
                    </div>
                    <div class="col  text-end mt-5">
                        <button type="button" class="btn btn-primary botao">ENVIAR FOTO</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-2">

        </div>
    </div>
</div>