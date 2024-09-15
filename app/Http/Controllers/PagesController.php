<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
class PagesController extends Controller
{
    protected $request;
public function __construct(Request $request){
$this->request=$request;

}
    public function home(){
        return view('home');
    }
    public function contact(){
        return view('contactos');
    }
    public function mensaje(){
        $msj=$this->request->input('nombre').'Ingreso correctamente el mensaje';
      //  return $this->request->all();
      if (!$this->request->has('nombre')) {
       $msj='Debe ingresar nombre';
      }
      return $msj;
    }
    public function saludos($nombre="Invitado"){
        $html="<h2>contenido en html</h2>";
$script="<script>alert('problema')</script>";
$consolas=["Play Station 4",
"Xbox ONe",
"Wii U"
];
        return view('saludos', compact('nombre','html','script','consolas'));
    }
}
