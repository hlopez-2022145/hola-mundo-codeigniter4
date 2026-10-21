<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos = [
            'titulo' => 'Mi primer proyecto con CodeIgniter 4',
            'mensaje' => '¡Hola Mundo!',
            'descripcion' => 'Proyecto desarrollado con PHP, Composer y CodeIgniter 4.'
        ];

        return view('HolaMundo', $datos);
    }
}