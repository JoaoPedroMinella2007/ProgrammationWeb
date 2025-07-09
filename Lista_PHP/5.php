<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Sorteio de Número Aleatório</title>
</head>
<body>
    <h1>Sorteio de Número Aleatório</h1>

    <form method="post" action="">
        <label for="min">Valor mínimo:</label>
        <input type="number" id="min" name="min" required>

        <label for="max">Valor máximo:</label>
        <input type="number" id="max" name="max" required>

        <button type="submit">Sortear</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $min = intval($_POST['min']);
        $max = intval($_POST['max']);
        if ($min > $max) {
            echo "<p style='color:red;'>Erro: o valor mínimo deve ser menor ou igual ao máximo.</p>";
        } else {
            $sorteado = rand($min, $max);
            echo "<p>Número sorteado entre $min e $max: <strong>$sorteado</strong></p>";
        }
    }
    ?>
</body>
</html>