<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// permite llamar a un metodo como si fuera una fuction


class WelcomeUserController extends Controller
{
    public function __invoke($name,$nickname = null){

    	 if ($nickname) {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {
        return "Bienvenido {$name}, no tienes apodo";
    }
    }
}

