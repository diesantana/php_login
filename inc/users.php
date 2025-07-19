<?php
// Usuários
/* 
    Este arquivo vai servir de base de dados para realizar a autenticação dos usuários 
*/
return [
    [
        'user' => 'usuario1@gmail.com',
        'password' => password_hash('usuario001', PASSWORD_DEFAULT) 
    ],
    [
        'user' => 'usuario2@gmail.com',
        'password' => password_hash('usuario002', PASSWORD_DEFAULT) 
    ],
    [
        'user' => 'usuario3@gmail.com',
        'password' => password_hash('usuario003', PASSWORD_DEFAULT) 
    ]
];