<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Notas;
use Illuminate\Http\Request;

class SofaController extends Controller
{
    
    public function index()
    {   
        $blog = Notas::all();
        $data = [
            'blog'=>$blog
        ];
        return view('index', $data);
    }

    public function catalogo()
    {
        $producto = Catalogo::all();
        $data = [
            'producto'=>$producto
        ];
        return view('catalogo', $data);
    }

    public function singleproducts($id)
    {
        $singleproduct = Catalogo::find($id);
        $producto = Catalogo::all();
        $data = [
            'singleproduct'=>$singleproduct,
            'producto'=>$producto
        ];
        
        return view('singleproducts', $data);
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        $notas = Notas::all();
        $data = [
            'nota'=>$notas
        ];
        return view('blog', $data);
    }

    public function singlepost($id)
    {
        $singlepost = Notas::find($id);
        $data = [
            'post'=>$singlepost
        ];
        return view('singlepost', $data);
    }

    public function contacto()
    {
        return view('contacto');    
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function wishlist()
    {
        return view('wishlist');
    }

    public function prueba()
    {
        return view('prueba');
    }
}
