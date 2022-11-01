<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class solicitudController extends Controller
{
    public function Formulario(){
        return view('Vistas.FormularioUmi');
    }
}
