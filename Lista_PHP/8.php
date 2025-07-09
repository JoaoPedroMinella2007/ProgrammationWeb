<?php
$texto = strtolower($_POST['texto']);
$tamanho = strlen($texto);
$palindromo = ($texto == strrev($texto)) ? "Sim" : "Não";
$vogais = preg_match_all('/[aeiou]/i', $texto);
$consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $texto);

echo "Texto informado: <strong>$texto</strong><br>";
echo "Tamanho: $tamanho<br>";
echo "É palíndromo? $palindromo<br>";
echo "Número de vogais: $vogais<br>";
echo "Número de consoantes: $consoantes<br>";
?>