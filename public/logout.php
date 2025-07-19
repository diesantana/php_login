<?php
// Define a lógica de logout

// Verifica se existe a variável de controle.
defined('CONTROL') or die("Acesso negado!");

// Efetua o logout
session_destroy();

// Redireciona para a página de login
header('Location: index.php?route=login');
