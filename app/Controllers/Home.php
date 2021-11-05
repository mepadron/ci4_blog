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
        
        $userModel = new \App\Models\LoginModel();
        // var_dump($userModel->loginBD);
        
        $emailF=$this->request->getPost('email');

        $claveF=$this->request->getPost('clave');

        if($userModel->validarLogin($emailF,$claveF)){

            // echo "usted esta logueado dentro del sistema";
            $vistas= view('template/backend/header_back')
                    .view('dashboard')
                    .view('template/backend/footer_back');//pie
            return $vistas;

        }else{

            echo "usted NO PERETENCE AL sistema";
            
        }

    }
}
