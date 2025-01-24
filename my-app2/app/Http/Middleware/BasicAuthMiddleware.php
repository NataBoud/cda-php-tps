<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BasicAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
      public function handle(Request $request, Closure $next): Response
    {
        $username = 'admin';
        $password = 'P@ssword!Dang3rXx';

        if ($request->hasHeader('Authorization')) {
            $authHeader = $request->header('Authorization');
            if (strpos($authHeader, 'Basic ') === 0) {
                $encodedCredentials = substr($authHeader, 6);
                $decodedCredentials = base64_decode($encodedCredentials);
                list($inputUsername, $inputPassword) = explode(':', $decodedCredentials, 2);

                if ($inputUsername === $username && $inputPassword === $password) {
                    return $next($request);
                }
            }
        }
        // return response('Unauthorized', 401)->header('WWW-Authenticate', 'Basic');
        abort(403);
    }
}
