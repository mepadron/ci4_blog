<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PersonasController extends BaseController
{
    public function index($n="lolo")
    {
        echo "Estoy en contorller persona me llamo una ruta ${n}";
    }
}
