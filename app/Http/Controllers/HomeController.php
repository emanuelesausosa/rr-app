<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Inicio()
    {
        return View('home.inicio');
    }

    public function Other()
    {
        return View('home.other');
    }
}
