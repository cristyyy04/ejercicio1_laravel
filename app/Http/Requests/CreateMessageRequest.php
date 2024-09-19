<?php
namespace App\Http\Requests;
use Illuminate\Http\Request;
class CreateMessageRequest extends Request
{

public function authorize(){
    return true;
}
public function rules(){
return [
    'nombre' => 'required|alpha', // que nombre solo contenga letras
    'email' => 'nullable|email',  // el campo es opcional y ingresar email
    'mensaje' => 'required|string|min:10|max:200'
];
}
}
