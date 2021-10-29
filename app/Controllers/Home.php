<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos[]= Array();
        $datos['nombre'] = "Miguel Padrón";
        $datos['sueldo'] = "45,000 $";

        $vistas= view('template/header.php')
                .view('welcome_message', $datos)
                .view('template/footer.php');//pie

        return $vistas;
    }

    public function login()
    {
        $vistas= view('template/header.php')
                .view('Login_usuario')
                .view('template/footer.php');//pie

        return $vistas;
    }
}
