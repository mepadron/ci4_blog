<?php

namespace App\Controllers;
// use CodeIgniter\HTTP\IncomingRequest;

class Home extends BaseController
{
    // public function __costruct(){
    //     $request = service('request');
    // }


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
        $vistas= view('template/backend/header_back')
                .view('Login_usuario')
                .view('template/backend/footer_back');//pie

        return $vistas;
    }

    public function obtenerDatos(){

        // print_r($_POST['email']);
        // print_r($request->getPost('email'));
        // echo "Hola ";
        var_dump($this->request->getPost('email'));
    }
}
