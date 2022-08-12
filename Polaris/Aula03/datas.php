<?php


    echo "<b>Hoje é dia  </b>";
    echo date("D/M/Y");
    echo "<b> e são </b>";
    echo date("h:a");
    echo "<hr>";

    /* função date
     D - dia da semana
     d- dia do mes
     m - mes em numeros
     M - mes por extenso 
     Y - ano com 4 digitos
     y - ano com 2 digitos

     h - 12 horas
     H - 24 horas
     i - minutos
     s - segundos
     a - am/pm 

    */
    echo date_default_timezone_set("America/Sao_Paulo");

    echo "<b>Hoje é </b>";
    echo date("D");
    echo ",";
    echo date("d/M");
    echo "<b> e são </b>";
    echo date("H:i");

    echo " - " . date_default_timezone_get();

    echo " - " . date_default_timezone_set("America/Sao_Paulo");

    echo "<hr>";
    date_default_timezone_set("America/Jamaica");
    echo date("H:i:s");
    echo " - " . date_default_timezone_get() . "<hr>"

?>
