<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;

class CRUDCATALOGO extends Controller
{
    public function storedos(Request $request)
    {
        $newproduct = new Catalogo();
        $newproduct->id = $request->id;
        $newproduct->nombre = $request->nombre;
        $newproduct->color = $request->color;
        $newproduct->categoria = $request->categoria;
        $newproduct->material = $request->material;
        $newproduct->descripcion = $request->descripcion;
        $newproduct->infoadicional = $request->infoadicional;

        if ($request->hasFile('imguno')) {
            $filename1 = time().'.'.$request->imguno->getClientOriginalName();
            $request->imguno->move(public_path('images/admin'), $filename1);
            $newproduct->imguno = $filename1;
        }else {
            $newproduct->imguno = '351X411.png';
        }

        if ($request->hasFile('imgdos')) {
            $filename2 = time().'.'.$request->imgdos->getClientOriginalName();
            $request->imgdos->move(public_path('/images/admin'), $filename2);
            $newproduct->imgdos = $filename2;
        }else {
            $newproduct->imgdos = '351X411.png';
        }

        if ($request->hasFile('imgtres')) {
            $filename3 = time().'.'.$request->imgtres->getClientOriginalName();
            $request->imgtres->move(public_path('/images/admin'), $filename3);
            $newproduct->imgtres = $filename3;
        }else {
            $newproduct->imgtres = '351X411.png';
        }

        if ($request->hasFile('imgcuatro')) {
            $filename4 = time().'.'.$request->imgcuatro->getClientOriginalName();
            $request->imgcuatro->move(public_path('/images/admin'), $filename4);
            $newproduct->imgcuatro = $filename4;
        }else {
            $newproduct->imgcuatro = '351X411.png';
        }

        if ($request->hasFile('imgcinco')) {
            $filename5 = time().'.'.$request->imgcinco->getClientOriginalName();
            $request->imgcinco->move(public_path('/images/admin'), $filename5);
            $newproduct->imgcinco = $filename5;
        }else {
            $newproduct->imgcinco = '351X411.png';
        }

        if ($request->hasFile('imgseis')) {
            $filename6 = time().'.'.$request->imgseis->getClientOriginalName();
            $request->imgseis->move(public_path('/images/admin'), $filename6);
            $newproduct->imgseis = $filename6;
        }else {    
            $newproduct->imgseis = '1280X1496.png';
        }

        if ($request->hasFile('imgsiete')) {
            $filename7 = time().'.'.$request->imgsiete->getClientOriginalName();
            $request->imgsiete->move(public_path('/images/admin'), $filename7);
            $newproduct->imgsiete = $filename7;
        }else {
            $newproduct->imgsiete = '1280X1496.png';
        }
        
        if ($request->hasFile('imgocho')) {
            $filename8 = time().'.'.$request->imgocho->getClientOriginalName();
            $request->imgocho->move(public_path('/images/admin'), $filename8);
            $newproduct->imgocho = $filename8;
        }else {
            $newproduct->imgocho = '1280X1496.png';
        }

        if ($request->hasFile('imgnueve')) {
            $filename9 = time().'.'.$request->imgnueve->getClientOriginalName();
            $request->imgnueve->move(public_path('/images/admin'), $filename9);
            $newproduct->imgnueve = $filename9;
        }else {
            $newproduct->imgnueve = '1280X1496.png';
        }
        
        if ($request->hasFile('imgdiez')) {
            $filename10 = time().'.'.$request->imgdiez->getClientOriginalName();
            $request->imgdiez->move(public_path('/images/admin'), $filename10);
            $newproduct->imgdiez = $filename10;
        }else {
            $newproduct->imgdiez = '1280X1496.png';
        }

        $newproduct->save();
        return redirect()->route('CATALOGO.secciondeproductos');
    }

    public function createdos()
    {
        return view('CATALOGO.createdos');
    }

    public function editdos($id)
    {
        $editardos = Catalogo::find($id);
        $data = [
            'editardos'=>$editardos
        ];
        return view('CATALOGO.editdos', $data);
    }

    public function updatedos(Request $request, $id)
    {
        $editarproduc = Catalogo::find($id);
        $editarproduc->id = $request->id;
        $editarproduc->nombre = $request->nombre;
        $editarproduc->color = $request->color;
        $editarproduc->categoria = $request->categoria;
        $editarproduc->material = $request->material;
        $editarproduc->descripcion = $request->descripcion;
        $editarproduc->infoadicional = $request->infoadicional;

        if ($request->hasFile('imguno')) {
            $filename1 = time().'.'.$request->imguno->getClientOriginalName();
            $request->imguno->move(public_path('images/admin'), $filename1);
            $editarproduc->imguno = $filename1;
        }else {
            $editarproduc->imguno = '351X411.png';
        }

        if ($request->hasFile('imgdos')) {
            $filename2 = time().'.'.$request->imgdos->getClientOriginalName();
            $request->imgdos->move(public_path('/images/admin'), $filename2);
            $editarproduc->imgdos = $filename2;
        }else {
            $editarproduc->imgdos = '351X411.png';
        }

        if ($request->hasFile('imgtres')) {
            $filename3 = time().'.'.$request->imgtres->getClientOriginalName();
            $request->imgtres->move(public_path('/images/admin'), $filename3);
            $editarproduc->imgtres = $filename3;
        }else {
            $editarproduc->imgtres = '351X411.png';
        }

        if ($request->hasFile('imgcuatro')) {
            $filename4 = time().'.'.$request->imgcuatro->getClientOriginalName();
            $request->imgcuatro->move(public_path('/images/admin'), $filename4);
            $editarproduc->imgcuatro = $filename4;
        }else {
            $editarproduc->imgcuatro = '351X411.png';
        }

        if ($request->hasFile('imgcinco')) {
            $filename5 = time().'.'.$request->imgcinco->getClientOriginalName();
            $request->imgcinco->move(public_path('/images/admin'), $filename5);
            $editarproduc->imgcinco = $filename5;
        }else {
            $editarproduc->imgcinco = '351X411.png';
        }

        if ($request->hasFile('imgseis')) {
            $filename6 = time().'.'.$request->imgseis->getClientOriginalName();
            $request->imgseis->move(public_path('/images/admin'), $filename6);
            $editarproduc->imgseis = $filename6;
        }else {    
            $editarproduc->imgseis = '1280X1496.png';
        }

        if ($request->hasFile('imgsiete')) {
            $filename7 = time().'.'.$request->imgsiete->getClientOriginalName();
            $request->imgsiete->move(public_path('/images/admin'), $filename7);
            $editarproduc->imgsiete = $filename7;
        }else {
            $editarproduc->imgsiete = '1280X1496.png';
        }
        
        if ($request->hasFile('imgocho')) {
            $filename8 = time().'.'.$request->imgocho->getClientOriginalName();
            $request->imgocho->move(public_path('/images/admin'), $filename8);
            $editarproduc->imgocho = $filename8;
        }else {
            $editarproduc->imgocho = '1280X1496.png';
        }

        if ($request->hasFile('imgnueve')) {
            $filename9 = time().'.'.$request->imgnueve->getClientOriginalName();
            $request->imgnueve->move(public_path('/images/admin'), $filename9);
            $editarproduc->imgnueve = $filename9;
        }else {
            $editarproduc->imgnueve = '1280X1496.png';
        }
        
        if ($request->hasFile('imgdiez')) {
            $filename10 = time().'.'.$request->imgdiez->getClientOriginalName();
            $request->imgdiez->move(public_path('/images/admin'), $filename10);
            $editarproduc->imgdiez = $filename10;
        }else {
            $editarproduc->imgdiez = '1280X1496.png';
        }

        $editarproduc->save();
        return redirect()->route('CATALOGO.secciondeproductos');
    }

    public function destroydos($id)
    {
        $eliminardos = Catalogo::find($id);
        $eliminardos->delete();
        return redirect()->route('CATALOGO.secciondeproductos');
    }
}
