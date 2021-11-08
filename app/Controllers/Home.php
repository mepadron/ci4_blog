<?php

namespace App\Controllers;
// use CodeIgniter\HTTP\IncomingRequest;
use App\Libraries\FormatoSueldo;

class Home extends BaseController
{
    public $lb;
    public $userModel;
    public $personasModel;
    
    public function __construct(){
        // $request = service('request');
        $this->userModel = new \App\Models\LoginModel();
        $this->personasModel = new \App\Models\PersonasModel();
        $this->lb = new FormatoSueldo();
    }


    public function index()
    {
        $datos[]= Array();
        $datos['nombre'] = "Miguel Padrón";
        $datos['sueldo'] = 45000;
        $datos['sueldo'] = $this->lb->formatDinero($datos['sueldo']);

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
        
        // var_dump($userModel->loginBD);
        
        $emailF=$this->request->getPost('email');

        $claveF=$this->request->getPost('clave');

        if($this->userModel->validarLogin($emailF,$claveF)){

            $data=[
                'cedulaPersona'=>$this->personasModel->cedulaUser,
                'nombrePersona'=>$this->personasModel->nombreUser,
                'apellidoPersona'=>$this->personasModel->apellidoUser,
            ];

            // echo "usted esta logueado dentro del sistema";
            $vistas= view('template/backend/header_back')
                    .view('dashboard', $data)
                    .view('template/backend/footer_back');//pie
            return $vistas;

        }else{

            echo "usted NO PERETENCE AL sistema";
            
        }

    }
}
