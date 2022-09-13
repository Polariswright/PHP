<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <! -- submit é o botaozinho do formulário -->
        <form name="form" method="post" action="#">
            <input type="text" name="num" required>
            <input type="submit" value="Verificar">

        </form>


        <?php

        //o if faz com que o $_post nao apareca o erro todo cagado na pagina

        if(isset($_POST['num'])){

        
            //entrada
            $num = $_POST['num'];

            //processamento 
            ($num % 2 == 0) ? ($sit = "Par") : ($sit = "Ímpar");
            //saída
            echo "$num é $sit";
         }
        else{ //deixa bonitinho pra nao aparecer so a cagada la 
            echo " Digite um numero qualquer e clique em verificar   ";
        }
      
      ?>
</body>

</html>