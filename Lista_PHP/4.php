<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Randomize PHP</title>
</head>
<body>

<h1>Número Aleatório</h1>

<p>
    <?php
    function randomize() {
        echo rand(1, 100);
    }
    randomize();
    ?>
</p>

</body>
</html>
