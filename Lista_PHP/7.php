<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>

<h1>Calculadora de Tabuada</h1>

<form method="POST">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST['numero']);

    echo "<h2>Tabuada do $numero:</h2>";
    echo "<ul>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>$numero x $i = $resultado</li>";
    }

    echo "</ul>";
}
?>

</body>
</html>
