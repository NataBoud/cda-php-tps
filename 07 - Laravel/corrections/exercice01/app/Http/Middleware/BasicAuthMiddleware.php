<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BasicAuthMiddleware
{

    private const USER = 'admin';
    private const PASSWORD = 'P@ssword!Dang3rXx';

    public function handle(Request $request, Closure $next): Response
    {
        if($request->hasHeader('Authorization')) 
        {
            // 'Basic YXJ0aHVyOnRvdG8='
            // ['Basic', 'YXJ0aHVyOnRvdG8=']
            [, $authBase64] = explode(' ', $request->header('Authorization'));

            // user:motdepasse
            // ['user', 'motdepasse']
            [$user, $password] = explode(':', base64_decode($authBase64));

            // Vérification de l'utilisateur authentifié
            if($user === $this::USER && $password === $this::PASSWORD)
            {
                // On accède au middleware suivant
                return $next($request);
            }
        }

        abort(403);
    }
}
