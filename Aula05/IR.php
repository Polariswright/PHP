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
                <input type="text" class="form-control" id="salario" name="salario" required>
                <button type="submit" class="btn-dark">Calcular Desconto</button>
            </div>
        </form>
        <?php

        if (isset($_POST['salario'])) {
            //entrada
            $val = $_POST['salario'];
            $percDesconto = $salario * 7.5 / 100;
            $percDesconto2 = $salario * 27.5 / 100;

            //processamento
            if ($salario <= 1710.78) {
                $perc = 0;
                $deduzir = 0;
            } elseif ($salario <= 2563.91) {
                $perc = 7.5;
                $deduzir = 128.31;
            } elseif ($salario <= 3418.59) {
                $perc = 15;
                $deduzir = 320.60;
            } elseif ($salario <= 4271.59) {
                $perc = 22.5;
                $deduzir = 577;
            } else {
                $perc = 27.5;
                $deduzir = 790.58;
            }
            $valorir = $salario * $perc/100;
            $ir = $valorir - $deduzir;
            $salarioLiquido = $salario - $ir;

            //saída

            echo "<hr> <h2>Salário Bruto: R$" . number_format($salario,2,",",".") . "</h2>";
            
        }

        ?>
    </div>
</body>

</html>