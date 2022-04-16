<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $senha = $request->senha;
        $user = User::find(1);
        if($user->email == $email && Hash::check($senha, $user->password)){
            session([
                'login' => true
            ]);
            return redirect()->route('view.admin.home');
        }else{
            return redirect()->route('login')->with([
                'msg_login' => 'Email ou senha incorretos!'
            ]);
        }
    }

    public function logout(Request $request)
    {
        if(session()->has('login') && session('login')){
            session()->flush();
            return redirect()->route('login');
        }else{
            return redirect()->route('login')->with([
                'msg_login' => 'Logout negado, faça login primeiro!'
            ]);
        }
    }
}
