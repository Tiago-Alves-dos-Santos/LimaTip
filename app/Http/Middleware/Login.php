<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('login') == false || !session('login')) {
            //cria uma msg vazia ou null, nenhuma msg de aviso é criada
                session([
                    'msg_login' => 'Acesso negado a página. Faça login!'
                ]);
            //
            return redirect()->route('login');
        }
        return $next($request);
    }
}
