<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Notas;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function secciondeproductos()
    {
        $catalogo = Catalogo::paginate(2);
        $data = [
            'catalogo'=>$catalogo
        ];
        return view('CATALOGO.secciondeproductos', $data);
    }

    public function admin()
    {
        $producto = Notas::all();
        $data = [
            'producto'=>$producto
        ];
        return view('CRUD.admin', $data);
    }
}
