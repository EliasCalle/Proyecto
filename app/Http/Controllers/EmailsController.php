<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{

    public function index()
    {
        // Aquí deberías colocar la lógica para mostrar la página de emails
        return view('email.index'); // Esto asume que tienes una vista llamada 'index.blade.php' en la carpeta 'emails'
    }
    public function enviarcorreo(Request $request){
        $nombre = $request->input('nombre');
        $asunto = $request->input('asunto');
        $email = $request->input('email');
        $mensaje = $request->input('mensaje');
        $para = 'Nosotros@gmail.com';
    
        Mail::send('correo.email', [
            'nombre' => $nombre,
            'email' => $email,
            'asunto' => $asunto,
            'mensaje' => $mensaje
        ], function($msg) use($asunto, $nombre, $email, $para){
            $msg->from($email, $nombre);
            $msg->subject($asunto);
            $msg->to($para);
        });
    
        return view('email.index'); // Redirigir a la vista de emails o cualquier otra vista deseada
    }

}
    