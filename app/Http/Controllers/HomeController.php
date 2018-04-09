<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class HomeController extends Controller
{
    public function Inicio()
    {
        if(Sentinel::check()) {
            return View('home.inicio');
        }else{
            return redirect('/login');
        }
    }

    public function Other()
    {
        if(Sentinel::check()) {
            return View('home.other');
        }else{
            return redirect('/login');
        }
    }
}
