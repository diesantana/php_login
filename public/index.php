<?php
/*
    Todo fluxo da aplicação deve passar pelo index.php, ou seja cada request ou response vai passar por aqui.
    - Para evitar a quebra desta regra, vamos definir uma constante de controle ('CONTROL').

    O controle de acesso às páginas será feito por meio do parâmetro 'route', passado na URL. 
*/

// Inicia a seção
session_start();

// define uma constante de controle
define('CONTROL', true);

// verifica se existe um usuario logado
$loggedUser = $_SESSION['user'] ?? null;

// Verifica qual é a rota na URL
if (empty($loggedUser)) {
    // Usuário não está logado;
    // Se o usuário não estiver logado, a rota será 'login'
    $route = 'login';
} else {
    // Usuário Logado; 
    // Verifica qual a rota na URL, se não existir, é definido como home. 
    $route = $_GET['route'] ?? 'home';
}

// Se usuário logado acessar a rota 'login', redireciona para 'home'
if(!empty($loggedUser) && $route == 'login') {
    $route = 'home';
}

// Define as rotas da aplicação
$routes = [
    'login' => 'login.php',
    'home' => 'home.php',
    'logout' => 'logout.php'
];

// Verifica se a rota existe
if (!key_exists($route, $routes)) {
    // Rota não existe
    die('Acesso negado'); // Interrompe a execução do script 
} else {
    // Rota existe
    require_once $routes[$route]; // Importa o arquivo php referente a rota atual. 
}
