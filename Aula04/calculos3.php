<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora2</title>
</head>

<body >
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <div class="container bg-dark text-light pag">
        <h1> Cálculos</h1>
        <form method="post" action="#">
            <div class="mb-3">
                <label for="n1"  class="form-label">Numero 1</label>
                <input type="text" name="n1"class="form-control" id="n1" required >
                <div id="" class="form-text"></div>

            <div class="form-group " method="post">
                <label for="operador">Operador</label>
                <select name="operador" id="operador" class="form-control">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>

                </select>
            </div>
            </div>
            <div class="mb-3">
                <label for="n2" class="form-label">Numero 2</label>
                <input type="text" name="n2" class="form-control" id="n2" required>
            </div>
           
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
            <?php 
            
            if(isset($_POST['n1'])){
                $num1 = $_POST['n1'];
                $num2 = $_POST['n2'];
                $operador = $_POST['operador'];

                switch($operador){
                    case "+" : $result = $num1 + $num2; break;
                    case "-" : $result = $num1 - $num2; break;
                    case "*" : $result = $num1 * $num2; break;
                    case "/" :
                        if($num2 == 0){
                            $result = "Não é possível dividir por 0";
                        }
                        else{
                            $result = $num1 / $num2;
                        }
                        break;
                    default: $result = "Operador Inexistente";
                   
                    

                }

                echo "<hr><p> $num1  $operador $num2 = $result </p>";

            };
            
            
            
            
            ?>



    </div>

</body>

</html>