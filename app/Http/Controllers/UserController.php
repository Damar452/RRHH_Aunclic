<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function ShowCreate(){
        return view('usuarios.create');
    }
    
    public function Create(){
        $data = request()->validate([
        'nombres' => 'required|min:8',
        'sexo' => 'required',
        'usuario' => 'required',
        'password' => 'required|min:8',
        'email' => 'required',
        'estado' => 'required',
        'tipousuario' => 'required',
        ]);

        User::create([
        'nombres' => $data['nombres'],
        'sexo' => $data['sexo'],
        'usuario' => $data['usuario'],
        'password' => bcrypt($data['password']),
        'email' => $data['email'],
        'estado' => $data['estado'],
        'tipousuario' => $data['tipousuario'],
        ]);  
        return redirect('usuario/todos');
    }

    public function Todos(){
        $users = User::paginate(10);
        return view('usuarios.todos', ["users"=> $users]);
    }

    public function Editar(User $user){
        return view('usuarios.editar', ["user" => $user]);
    }

    public function Actualizar(User $user){
        $data = request()->all();

    if ($data["password"]==null) {
        unset($data["password"]);
    } 
    
    $user->update($data);
    return redirect('usuario/todos');    
    }

    public function Eliminar(User $user){
        $user->delete();
    return redirect('usuario/todos');    
    }
}
