<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $vistas= view('template/header.php')
                .view('welcome_message')
                .view('template/footer.php');//pie
                
        return $vistas;
    }

    public function nombre()
    {
        echo "Hola desde el controlador";
    }
}
