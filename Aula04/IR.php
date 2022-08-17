<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class=" container bg-primary text-light" style="text-align: center;">
        <h2>Calculo de Imposto de Renda</h2>
        <hr>
        <h4>Salários até R$ 1710,78 - Sem Desconto</h4>
        <h4>Compras entre R$ 1710,78 e R$ 2563,91 - 7,5% de Desconto - R$ 128,31 (Parcela a Deduzir) </h4>
        <h4>Compras entre R$ 2563,92 e R$ 3418,59 - 7,5% de Desconto - R$ 320,60 (Parcela a Deduzir) </h4>
        <h4>Compras entre R$ 3418,60 e R$ 4271,59 - 7,5% de Desconto - R$ 577,31 (Parcela a Deduzir) </h4>
        <h4>Compras acima de R$ 4271,60 - 27,5% de Desconto - R$ 790,58</h4>
        <hr>
        <form action="#" method="post" name="form">
            <div class="mb-3">
                <label for="salario" class="form-label">Salários</label>
                <input type="text" class="form-control" id="Salario" name="salario">
                <button type="submit" class="btn-dark">Calcular Desconto</button>
            </div>
        </form>
        <?php

        if (isset($_POST['valor'])) {
            //entrada
            $val = $_POST['valor'];


            //processamento
            if ($val <= 50) {
                $valorDesconto = "Sem desconto";
                $valorPagar = $val - $valorDesconto;
            } elseif ($val >= 100) {
                $valorDesconto = $val * 10 / $val;
                $valorPagar = $val - $valorDesconto;
            } else {
                $valorDesconto = $val * 5 / $val;
                $valorPagar = $val - $valorDesconto;
                
            }

            echo "<hr>";
            

            echo "Sua compra foi o total de R$ $val, seu desconto é de $valorDesconto% , e você terá que pagar $valorPagar ";
          

        }

        ?>
    </div>
</body>

</html>