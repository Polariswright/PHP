<?php
    //loop com while
    $cont = 1; // inicializar o contador
    while ( $cont <= 10 ){ //delimitar o loop
        echo " $cont - ";
        $cont++; //incrementar o loop
    }

    echo "<hr>";

    for($cont=1;$cont<=10;$cont++ ){
        echo " $cont-";
    };

    echo "<hr>";

    echo "Data de Nascimento:";
    echo "<select>";
    for ($cont=1;$cont <=31; $cont++){
        echo "<option> $cont </option>";

    }
    echo "</select>";
    
    echo "<select>";
    for($cont=1;$cont<=12;$cont++){
        echo "<option> $cont </option>";
    }
    echo "</select>";

    $ano = 2022;

     
    echo "<select>";
    for($cont=$ano;$cont>=1900;$cont--){
        echo "<option> $cont </option>";
    }
    echo "</select>";


?>