<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){// se usa cuando el controlado solo tiene 1 metodo
        return "Primer Controlador en Laravel";
    }
    
        
    
}
