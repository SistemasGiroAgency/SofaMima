<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EMAILController extends Controller
{
    public function correo(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $celular = $request->input('celular');
        $mensaje = $request->input('mensaje');
        $para = 'contacto@sofamima.com';

        Mail::send('CORREO.contacto', $request->all(), function($msg) use($nombre, $email, $celular, $mensaje, $para){
            $msg->from($email,$nombre,$celular,$mensaje);
            $msg->subject('Un cliente quiere contactarnos');
            $msg->to($para);
        });
        
        return redirect('/contacto')->with('flash_message_success','El correo fue enviado');
    }

    public function preguntas(Request $request)
    {
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $celular = $request->input('celular');
        $pregunta = $request->input('pregunta');
        $para = 'contacto@sofamima.com';

        Mail::send('CORREO.preguntas', $request->all(), function($msg) use($nombre, $email, $celular, $pregunta, $para){
            $msg->from($email, $nombre, $celular, $pregunta);
            $msg->subject('Un cliente tiene una pregunta');
            $msg->to($para);
        });
        
        return redirect('/faqs')->with('flash_message_success','La pregunta fue enviada');
    }
}
