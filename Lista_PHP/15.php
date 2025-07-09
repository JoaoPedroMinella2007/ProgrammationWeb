<?php
$conn = new mysqli("localhost", "root", "", "seubanco");

if ($conn->connect_error) {
  die("Erro: " . $conn->connect_error);
}

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='1'>";
  echo "<tr><th>Nome</th><th>Email</th><th>Telefone</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['nome']}</td><td>{$row['email']}</td><td>{$row['telefone']}</td></tr>";
  }
  echo "</table>";
} else {
  echo "Nenhum dado encontrado.";
}

$conn->close();
?>