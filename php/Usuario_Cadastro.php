<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="Usuario_listar.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>


        <label for = "senha">Senha:</label><br>
        <input type="senha" id="senha" name="senha" required><br><br>

        <input type="submit" >
    </form>

</body>
</html>