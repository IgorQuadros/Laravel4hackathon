<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Definindo os cabeçalhos CORS manualmente

        // Origem permitida, altere de acordo com o seu frontend (pode ser um wildcard '*' se permitir qualquer origem)
        $response->headers->set('Access-Control-Allow-Origin', env('CORS_ALLOWED_ORIGINS', '*'));

        // Métodos permitidos (pode ser qualquer um dos métodos HTTP ou '*' para permitir todos)
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

        // Cabeçalhos permitidos (pode ser qualquer cabeçalho ou '*' para permitir todos)
        $response->headers->set('Access-Control-Allow-Headers', 'Origin, Content-Type, Accept, Authorization, X-Requested-With, Application');

        // Se a requisição usar credenciais (cookies ou autenticação), deve ser habilitado
        if (env('CORS_SUPPORTS_CREDENTIALS', false)) {
            $response->headers->set('Access-Control-Allow-Credentials', 'true');
        }

        // Habilitando cache de CORS para preflight requests, se necessário
        $response->headers->set('Access-Control-Max-Age', '3600');

        return $response;
    }
}
