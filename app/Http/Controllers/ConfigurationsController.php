<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
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

        // get role list
        $roles = Sentinel::getRoleRepository()->get();

        // return view with roles
        return View('configurations.register')->with('roles', $roles);
    }



    // POST
    // action: StoreRegister
    // es: Acción que registra un usuario
    // en: Action/Function that register an user
    public function StoreRegister(Request $request) {
        
        // save user
        $user = Sentinel::registerAndActivate($request->all());

        //find role
        $roles = Sentinel::findRoleBySlug($request->roles);

        //bind to role to user
        $roles->users()->attach($user);



        // return view result
        return View('configurations.register-result')->with('user', $user);
        //return dd($request->all());
    }

}
