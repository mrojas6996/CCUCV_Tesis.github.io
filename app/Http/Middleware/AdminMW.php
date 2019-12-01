<?php

namespace App\Http\Middleware;

use Closure;

class AdminMW
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //CONTROL DE USUARIOS: VALIDADOR PARA SABER QUIEN ES ADMIN, MOD O USUARIO

        $roles = array_slice(func_get_args(),2)

        if(auth()->check() && auth()->user()->is_Admin OR auth()->user()->hasRoles($roles)){
            return $next($request); //siga de largo
        }

        return redirect('/');
    }
}
