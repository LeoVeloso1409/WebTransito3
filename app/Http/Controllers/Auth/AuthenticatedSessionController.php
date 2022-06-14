<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ait;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function index()
    {
        $user_id = Auth::user()->id;
        $aitsFalse = Ait::all()->where('user_id', $user_id )->where('status', false)->sortBy('cod_ait');
        $aitsTrue = Ait::all()->where('user_id', $user_id )->where('status', true)->sortBy('cod_ait');

        return view('index', compact('aitsFalse', 'aitsTrue'));
    }

    public function store(LoginRequest $request)
    {

        $request->authenticate();

        $request->session()->regenerate();

        //dd($aits);

        return redirect()->intended(RouteServiceProvider::HOME);
        //return view('home', compact('aits'));
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
