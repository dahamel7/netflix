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
    public function handle(Request $request, Closure $next, ...$role): Response
    {
            $user = $request->user();

            if(!$user){
                if(!$request->is('usagers.show')){
                    return redirect()->route('usagers.show');
                }
            }else{
                if(!in_array($user->role,$role))
                {
                    return redirect()->route('usagers.show');
                }
            }


        return $next($request);
    }
}
