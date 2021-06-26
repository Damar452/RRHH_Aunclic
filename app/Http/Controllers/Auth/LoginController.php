<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\User;

class LoginController extends Controller
{
    
      
    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request){

        $this->validateLogin($request);  

         if (Auth::attempt([$this->usuario() => $request->usuario,'password' => $request->password,'estado'=>'Activo'])){
             return redirect('principal');
         }

         return back()->withErrors([$this->usuario() => trans('auth.failed')])
         ->withInput(request([$this->usuario()]));
     }
    protected function validateLogin(Request $request){
        $this->validate($request,[
            $this->usuario() => 'string',
            'password' => 'required|string'
        ]);

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
    
    public function usuario(){
        return 'usuario';
    }

}
