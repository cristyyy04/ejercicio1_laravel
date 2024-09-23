<?php
//PagesController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMessageRequest;
class PagesController extends Controller
{
    protected $request;
public function __construct(Request $request){
$this->request=$request;
$this->middleware('example',['except'=>['home','saludos','contact']]);
}
    public function home(){
        return view('home');
    }
    public function contact(){
        return view('contactos');
    }
    public function mensaje(CreateMessageRequest $request) {
      $data = $request->validated(); // This should work now

    // You can do something with the validated data, e.g., save to the database, etc.

    return redirect()->route('contactos')->with('info', 'Tu mensaje ha sido enviado');
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
