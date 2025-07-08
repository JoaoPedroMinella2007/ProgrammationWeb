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
        // Gera um número aleatório entre 1 e 100
        echo rand(1, 100);
    }

    // Chama a função para exibir o número
    randomize();
    ?>
</p>

</body>
</html>
