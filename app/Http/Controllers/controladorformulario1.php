<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorformulario1 extends Controller
{
    public function store(Request $request){
        return  "Nombre: ".$request ->get('usuario'). "<br> apellido:" .$request ->get('apellido '). "<br> cedula:" .$request ->get('cedula')."<br> correo:" .$request ->get('correo ')."<br> contraseña:" .$request ->get('contraseña');
    }
}
