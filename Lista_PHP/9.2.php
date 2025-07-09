<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
?>
<form action="9_3.php" method="post">
  <input type="hidden" name="nome" value="<?= $nome ?>">
  <input type="hidden" name="email" value="<?= $email ?>">
  Peso (kg): <input type="text" name="peso"><br>
  Altura (m): <input type="text" name="altura"><br>
  <input type="submit" value="Calcular IMC">
</form>