<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
    }
    public function logout()
    {
    }
    public function register()
    {
        return view('User.Account.register');
    }
}
