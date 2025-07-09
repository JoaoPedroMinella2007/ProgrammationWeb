<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario === 'admin' && $senha === '1234') {
  $_SESSION['logado'] = true;
  echo "<h2>Bem-vindo, $usuario!</h2>";
  echo "<a href='13_logout.php'>Sair</a>";
} else {
  echo "Usuário ou senha incorretos.";
}
?>