
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ($altura * $altura);

echo "Nome: $nome<br>";
echo "E-mail: $email<br>";
echo "Peso: $peso kg<br>";
echo "Altura: $altura m<br>";
echo "IMC: " . number_format($imc, 2);
?>
