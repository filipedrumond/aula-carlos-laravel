<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Model\Actor;

class APIController extends Controller
{
    public function ping()
    {
        return 'pong by controller';
    }
    public function listaAtores(){
        $lsAtores = Actor::all();
        return $lsAtores;
    }
}
