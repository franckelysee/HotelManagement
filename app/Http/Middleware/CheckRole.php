<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Supposons que vous ayez un champ 'role' dans votre table 'users'
        if ($request->user() && $request->user()->role === $role) {
            return $next($request);
        }

        // Si l'utilisateur n'est pas autorisé, on peut rediriger ou retourner une réponse d'erreur
        return redirect('/')->with('error', "Vous n'avez pas l'accès nécessaire.");
    }
}
