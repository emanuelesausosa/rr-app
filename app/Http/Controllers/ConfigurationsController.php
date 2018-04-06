<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

// Author: Emanuel Sosa
// Crated at: 05-Apr-2018
// es: este controller provee las fucionalidades básicas para configurar y administrar la app
// en: this controller provides the basic functionalities to configure and manage the app
class ConfigurationsController extends Controller
{
    // GET
    // action: Register
    // es: Acción que registra un usuario
    // en: Action/Function that register an user
    public function Register() {
        return View('configurations.register');
    }

    // POST
    // action: StoreRegister
    // es: Acción que registra un usuario
    // en: Action/Function that register an user
    public function StoreRegister(Request $request) {
        
        $user = Sentinel::registerAndActivate($request->all());
        
        return View('configurations.register-result')->with('user', $user);
    }   

}
