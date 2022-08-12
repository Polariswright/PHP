<?php
    //entrada
    $num = 6;
    //processamento
    if($num > 0){
        $sit = "positivo";
    }
    elseif($num<0){
        $sit = "negativo";
    }
    else{
        $sit = "neutro";
    }

    //saída
    echo "$num é $sit";
    echo "<p></p>";

    

    //par ou impar

    if($num % 2 == 0 ){
        $sit = "par";
    }
    else{
        $sit = "Ímpar";
    }

    echo "$num é $sit";
    echo "<hr>";

    //operador ternário
    ($num % 2 == 0)?($sit = "Par"):($sit = "Ímpar");
    echo "$num é $sit";
    echo "<hr>";

    // receba a idade

    

?>