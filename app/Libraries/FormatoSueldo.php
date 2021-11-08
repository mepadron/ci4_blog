<?php
namespace App\Libraries;

class FormatoSueldo{

    public $SPD = ","; 
    public $SPM = ".";
    public $TPM = "Bs. ";

    public function formatDinero($cant){
        $cantidad = $this->TPM.number_format($cant,2,$this->SPD,$this->SPM);
        return $cantidad;
    }

}