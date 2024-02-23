<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use Illuminate\Http\Request;

class CRUDNOTAS extends Controller
{
    public function create()
    {
        return view('CRUD.create');
    }

    public function edit($id)
    {
        $edit = Notas::find($id);
        $data = [
            'edit'=>$edit
        ];
        return view('CRUD.edit', $data);
    }

    public function destroy($id)
    {
        $eliminar = Notas::find($id);
        $eliminar->delete();
        return redirect()->route('CRUD.admin');
    }

    public function store(Request $request)
    {
        $nuevo = new Notas();
        $nuevo->id = $request->id;
        $nuevo->titulo = $request->titulo;
        $nuevo->fecha = $request->fecha;
        $nuevo->textouno = $request->textouno;
        $nuevo->textodos = $request->textodos;
        $nuevo->textotres = $request->textotres;
        $nuevo->textocuatro = $request->textocuatro;
        $nuevo->textocinco = $request->textocinco;
        $nuevo->textoseis = $request->textoseis;
        $nuevo->textosiete = $request->textosiete;
        $nuevo->imguno = $request->imguno;
        $nuevo->imgdos = $request->imgdos;
        $nuevo->save();
        return redirect()->route('CRUD.admin');
    }

    public function update(Request $request, $id)
    {
        $editado = Notas::find($id);
        $editado->id = $request->id;
        $editado->titulo = $request->titulo;
        $editado->fecha = $request->fecha;
        $editado->textouno = $request->textouno;
        $editado->textodos = $request->textodos;
        $editado->textotres = $request->textotres;
        $editado->textocuatro = $request->textocuatro;
        $editado->textocinco = $request->textocinco;
        $editado->textoseis = $request->textoseis;
        $editado->textosiete = $request->textosiete;
        $editado->imguno = $request->imguno;
        $editado->imgdos = $request->imgdos;
        $editado->save();
        return redirect()->route('CRUD.admin');
    }
}
