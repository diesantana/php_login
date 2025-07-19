<?php
/* 
    Vamos verificar se na execução do script existe a constante de controle. 
    Se não existir, significa que a execução não passou por index.php, ou seja, 
    este script não poderá ser executado. 
*/

// Verifica se existe a variável de controle.
defined('CONTROL') or die("Acesso negado!");

// Verifica se o formulário foi submetido (Enviado) corretamente
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Busca os dados enviados
    $user = $_POST['user'] ?? null;
    $password = $_POST['password'] ?? null;

    // Mensagens de erro
    $error = null;

    // valida os dados submetido pelo user
    if(empty($user) || empty($password)) {
        // dados inválido!
        $error = 'Usuário e senha são obrigatórios!'; 

    } else {
        // Os dados foram preenchidos corretamente!

        // Importa o script users.php (Base de dados) 
        $registeredUsers = require_once __DIR__ . '\..\inc\users.php';
        
        // Verifica se o usuário e senha são válidos
        foreach($registeredUsers as $registeredUser) {
           if($user == $registeredUser['user'] && password_verify($password, $registeredUser['password'])) {
                // Efetua o login
                $_SESSION['user'] = $user; 
    
                // redireciona para o index com a rota 'home'
                header('location: index.php?route=home');
            }
        }
    
        // Se chegou aqui, significa que o Login é inválido
        $error = 'Usuário e/ou senha inválidos!';
    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php?route=login" method="post">
        <h3>Login</h3>
        <div>
            <label for="user">Email</label>
            <input type="email" name="user" id="user">
        </div>
        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button type="submit">Entar</button>
        </div>
    </form>

    <!-- Apresenta possíveis erros -->
    <?php if(!empty($error)): ?>
        <p style="color: red;"><?= $error?></p>
    <?php endif; ?>
</body>
</html> 