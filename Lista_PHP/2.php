<?php
//Variável em php
$nome = "João Pedro Minella";

// O servidor processa esse código e gera um HTML que será enviado para o navegador
echo "<p>Olá, $nome! Este texto foi gerado pelo PHP no servidor.</p>";
?>

<!-- Já este é um código JavaScript, que é executado no navegador do usuário -->

<script>
  // variável em JavaScript
  let nome = "João Pedro Minella";

  // JavaScript roda no navegador e altera o conteúdo da página
  document.write(`<p>Olá, ${nome}! Este texto foi gerado pelo JavaScript no navegador.</p>`);
</script>