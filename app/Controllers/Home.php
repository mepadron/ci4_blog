<?php

namespace App\Controllers;

// use CodeIgniter\HTTP\IncomingRequest;
use App\Libraries\FormatoSueldo;

class Home extends BaseController
{
    public $lb;
    public $userModel;
    public $personasModel;

    // private $session;

    public function __construct()
    {
        // $this->session = \Config\Services::session();
        // $request = service('request');
        $this->userModel = new \App\Models\LoginModel();
        $this->personasModel = new \App\Models\PersonasModel();
        $this->lb = new FormatoSueldo();
    }

    public function index()
    {
        $datos[] = array();
        $datos['nombre'] = "Miguel Padrón";
        $datos['sueldo'] = 45000;
        $datos['sueldo'] = $this->lb->formatDinero($datos['sueldo']);

        $vistas = view('template/header.php')
        . view('welcome_message', $datos)
        . view('template/footer.php'); //pie

        return $vistas;
    }

    public function login()
    {

        helper(['form', 'url']);
        $vistas = view('template/backend/header_back')
        . view('Login_usuario')
        . view('template/backend/footer_back'); //pie

        return $vistas;
    }

    public function obtenerDatos()
    {

        // var_dump($userModel->loginBD);
        helper(['form', 'url']);

        $reglas = $this->validate([
            'email' => 'required|exact_length[3]',
            'clave' => 'required',
        ]);

        if (!$reglas) {
            // echo "Hay un problema con los campos del login";
            $validacion= $this->validator;
            $vistas = view('template/backend/header_back')
                . view('Login_usuario', [$validacion])
                . view('template/backend/footer_back'); //pie
                return $vistas;
        } else {
            // echo "los campos del login estan completo";
            $emailF = $this->request->getPost('email');

            $claveF = $this->request->getPost('clave');

            if ($this->userModel->validarLogin($emailF, $claveF)) {

                $data = [
                    'cedulaPersona' => $this->personasModel->cedulaUser,
                    'nombrePersona' => $this->personasModel->nombreUser,
                    'apellidoPersona' => $this->personasModel->apellidoUser,
                ];
                $datosSesion=[
                    'login'=> $emailF,
                    'nombreCliente'=> $this->personasModel->nombreUser,
                    'apellidoCliente'=> $this->personasModel->apellidoUser,

                ];

                $this->session->set($datosSesion);

                // echo "usted esta logueado dentro del sistema";
                $vistas = view('template/backend/header_back')
                . view('dashboard', $data)
                . view('template/backend/footer_back'); //pie
                return $vistas;

            } else {

                echo "usted NO PERETENCE AL sistema";

            }

        }

    }

    public function datosFormulario()
    {
        echo "datos del formulario";
    }


    public function sesiones()
    {
        
        // echo "estoy en el metodo session";
        $valorLogeo = [
            'login'=>'mep',
            'role'=> 'Admin'
        ];
        $this->session->set($valorLogeo);
        
    }
    
    public function obtenerSesion()
    {
        // $session = \Config\Services::session();
        echo $this->session->get('login');
        echo "  ".$this->session->get('role');
        echo "  ".session_id();
    }
    
    public function borrarSesion()
    {
        // $session = \Config\Services::session();
        $this->session->remove('login');
    }
    
    public function eliminarTodaSesion()
    {
        $session = \Config\Services::session();
        session_destroy();
    }


}
