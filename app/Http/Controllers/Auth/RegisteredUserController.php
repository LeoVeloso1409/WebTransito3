<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Gate;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        if(Gate::denies('register_user')){
            abort(403, 'Acesso Negado');
        }
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required','confirmed', Rules\Password::defaults()],
            'matricula' => ['required', 'numeric', 'min:7', 'unique:users'],
            'orgao' => ['required'],
            'unidade' => ['required'],
            'funcao' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'matricula' => $request->matricula,
            'email' => $request->email,
            'orgao' => $request->orgao,
            'unidade' => $request->unidade,
            'funcao' => $request->funcao,
            'password' =>Hash::make($request->password),
        ]);

        event(new Registered($user));

        //Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
