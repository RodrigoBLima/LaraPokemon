<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Http\Controllers\Controller;

class PruebaController extends Controller {

    public function pruba($param){
        return "Estou dentro do pruebaController e recebi esse parametro". $param;
    }

}

