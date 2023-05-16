<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Testes extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Curso de como fazer um sistema',
            'subtitulo' => 'Muito massa'
        ];

        return view('Testes/index', $data);
    }

    public function novo() 
    {
        echo ' Esse é mais um método';
    }
}
