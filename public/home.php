<?php
/*
    - Está é a página inicial para usuário logados.
    - Vamos verificar se a execução passou pelo script index.php,
    evitando que o usuário não logado acesse esta rota. 
*/

// Verifica se existe a variável de controle.
defined('CONTROL') or die("Acesso negado!");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2>Bem vindo!</h2>
    <hr>
    <p>
        Usuário: <strong><?= $_SESSION['user']?></strong>
        <span>
            <a href="index.php?route=logout">Sair</a>
        </span>
    </p>
    <hr>
</body>
</html>