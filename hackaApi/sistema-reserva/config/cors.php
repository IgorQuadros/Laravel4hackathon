<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Configuration
    |--------------------------------------------------------------------------
    |
    | This file is for configuring the CORS settings for your application.
    | CORS (Cross-Origin Resource Sharing) allows your application to define
    | which domains are allowed to communicate with the backend via HTTP.
    |
    */

    'defaults' => [
        'supports_credentials' => true, // Se a aplicação deve permitir credenciais (cookies ou tokens)
        'allowed_origins' => ['http://localhost:5173'], // Origem permitida (frontend)
        'allowed_origins_patterns' => [], // Pode usar expressões regulares para origens permitidas
        'allowed_methods' => ['*'], // Permite todos os métodos HTTP (GET, POST, PUT, DELETE, etc)
        'allowed_headers' => ['*'], // Permite todos os cabeçalhos HTTP
        'exposed_headers' => [], // Cabeçalhos expostos que podem ser lidos pelo frontend
        'max_age' => 0, // Tempo em segundos para cache da política de CORS
        'hosts' => [], // Restringir a requisição a hosts específicos
    ],

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    | Define the paths for which the CORS configuration should be applied.
    | This allows you to restrict CORS settings to only specific routes.
    |
    */

    'paths' => [
        'api/*', // Aplica CORS nas rotas que começam com /api/
        'sanctum/csrf-cookie', // Exemplo de configuração para Laravel Sanctum
    ],
];
