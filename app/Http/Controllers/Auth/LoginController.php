<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        $data = array('title' => 'Login');
        return view('auth.login', $data);
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'member') {
            return redirect('/cart');
        }
    
        return redirect('/admin');
    }
}