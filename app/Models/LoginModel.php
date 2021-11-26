<?php namespace App\Models;


use CodeIgniter\Model;

class LoginModel extends Model{


    public $loginBD="mep";
    public $claveBD="1234";

    public function validarLogin($lf, $cf){

        if($lf==$this->loginBD and $cf==$this->claveBD){

            // echo "usted esta logueado dentro del sistema";
            return true;

        }else{

            return false;
            
        }
    }

}
