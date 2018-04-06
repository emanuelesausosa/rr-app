<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

// Author: Emanuel Sosa
// Created at: 05-Apr-2018
// Controlador que gestiona la sesión del usuario
// Controller that manages the user's session
class AuthController extends Controller
{

    // GET
    // método que gestiona el inicio de sesión
    // method that manages the login
    public function Login() {
        return View('auth.login');
    }

    // POST
    // método que gestiona el inicio de sesión
    // method that manages the login
    public function PostLogin(Request $request) {
       
        Sentinel::authenticate($request->all());

        if(Sentinel::check()){
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    // POST
    // método que realiza el fin de la sesión
    // method that performs the end of the session 
    public function Logout(Request $request) {
        Sentinel::logout();

        return redirect('/login');
    }
}
