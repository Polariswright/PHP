<?php
//RECEBAAAAA
$age = 11;

    if($age < 18){
        $sit = "Jovem";
    }
    
    elseif($age <= 60 ){
        $sit = "Adulto";
    }
    else{
        $sit = "Idoso";
    }

    echo "A pessoa tem $age e é $sit";

    echo "<hr>";



    // Categoria de base

    if ($age < 7){
        $classe = "Não pode participar";

    }
    elseif($age <= 11){
        $classe = "SUB11";

    }
    elseif($age < 15){
        $classe = "SUB15";
    }
    elseif($age < 18){
        $classe = "SUB18";
    }
    else{
        $classe = "Profissional";
    }

    echo "tem $age e $classe";



?>