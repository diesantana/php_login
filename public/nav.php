<?php
// Define a navegação da aplicação

// Verifica se existe a variável de controle.
defined('CONTROL') or die("Acesso negado!");
?>
<hr>
<p>Usuário: <strong><?= $_SESSION['user']?></strong> </p>
<hr>

<nav>
    <a href="?route=home">Home</a>
    <a href="?route=home">Página 1</a>
    <a href="?route=home">Página 2</a>
    <a href="?route=home">Página 3</a>
    <a href="index.php?route=logout">Sair</a>
</nav>