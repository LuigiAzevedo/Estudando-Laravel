<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{  
    public function index()
    {
        return view('welcome');
   	}

   	/**
     * Retorna o nome e idate
     *
     * @return Response
     */
    public function sobre()
    {
                $eu = [
                               'nome' => 'Luigi',
                               'idade' => 21,
                               'home' => 'Contagem'
                ];
  
                return view('sobre', compact('eu'));
    }
}
