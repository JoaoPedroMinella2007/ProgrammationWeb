<form action="2.php">
    <input type="number" name="A">
    <input type="number" name="B">

    <input type="submit">
</form>

<?php
/* Programa que imprime a soma de dois números informados pelo usuário via get*/

/* Verifica se um parâmetro foi passado*/ 
$A = 0;
$B = 0;


if(isset($_GET["A"])){
    $A = $_GET["A"];
}

if(isset($_GET["B"])){
    $B = $_GET["B"];
}

echo "A soma de A e B é: ";
echo $A." + ".$B." = ".$A+$B;
?>