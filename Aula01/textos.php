<?php

echo "
    <h2 style= >Funções para String</h2>

";
$nome = "Polaris Lima";

echo " <b> Normal:</b>$nome<br>
";

//forma errada 
echo "<b> Maiúsculo: </b> strtoupper($nome) <br>";
//concatenação
echo "<b> Maiúsculo: </b>" . strtoupper($nome) . "<br>";
//outro jeito certo de fazer 
echo "<b> Normal:</b>";
echo $nome;
echo "<br>";

echo "<b>Maiúsculo:</b>";
echo strtoupper($nome);
echo "<br>";

echo "<b> Invertido:</b>";
echo strrev($nome);
echo "<br>";

echo "<b> Quantidade de Digitos:</b>";
echo strlen($nome);
echo "<br>";


echo "<b> Troca de caracteres:</b>";
echo strtr($nome,"o","_");
echo "<br>";
//substr(variavel,posicao inicial, quantidade de digitos)
echo "<b> Partes do Texto:</b>";
echo substr($nome,8,4);
echo "<br>";






?>