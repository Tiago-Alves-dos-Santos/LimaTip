<?php

namespace App\Http\Controllers;

use App\Models\Configuracao;
use Illuminate\Http\Request;
use App\Models\Disponibilidade;

class Home extends Controller
{
    public function index(Request $request)
    {
        $disponibilidade = Disponibilidade::find(1);
        $configuracao = Configuracao::find(1);
        return view('home', compact(
            'disponibilidade',
            'configuracao'
        ));
    }

    public function login(Request $request)
    {
        if(session()->has('login') && session('login')){
            return redirect()->route('view.admin.home');
        }else{
           return view('admin.auth.login');
        }
    }
}
