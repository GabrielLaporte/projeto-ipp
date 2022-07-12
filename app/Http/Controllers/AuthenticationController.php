<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthenticationController extends Controller
{

    public function showLogin()
    {
        $pageConfigs = ['blankPage' => true];

        return view('/content/authentication/auth-login-cover', ['pageConfigs' => $pageConfigs]);
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(),[
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()
                    ->route('auth-login')
                    ->withErrors($validator)
                    ->withInput();
        }

        $credentials = $request->only('email', 'password', 'remember');

        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            $user->last_login = Carbon::now()->format('Y-m-d');
            $user->save();

            return redirect()
                ->route('index')
                ->withSuccess('Bem vindo ao Painel de Controle!');
        }

        return redirect()
            ->route('auth-login')
            ->withErrors('Informações incorretas! Confira o email e senha, e tente novamente.')
            ->withInput();
    }
}
