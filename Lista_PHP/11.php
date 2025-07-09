<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Triângulo</title>
</head>
<body>
  <form action="11.php" method="post">
    Lado 1: <input type="number" name="a"><br>
    Lado 2: <input type="number" name="b"><br>
    Lado 3: <input type="number" name="c"><br>
    <input type="submit" value="Classificar">
  </form>

  <?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
  if ($a == $b && $b == $c) {
    echo "Triângulo Equilátero";
  } elseif ($a == $b || $a == $c || $b == $c) {
    echo "Triângulo Isósceles";
  } else {
    echo "Triângulo Escaleno";
  }
} else {
  echo "Os valores não formam um triângulo.";
}
?>

</body>
</html>