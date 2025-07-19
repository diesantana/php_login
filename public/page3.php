<?php
// Verifica se existe a variável de controle.
defined('CONTROL') or die("Acesso negado!");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 03</title>
</head>
<body>
    <header>
        <?php require_once 'nav.php'?>
    </header>

    <h3>Página 3</h3>
    <p>[conteúdo]</p>
</body>
</html>