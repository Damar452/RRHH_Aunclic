<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipodocumento;

class TipodocumentoController extends Controller
{
    public function Create(){
        $data = request()->validate([
        'tipodocumento' => 'required',
        ]);
        

        Tipodocumento::create([
        'tipodocumento' => $data['tipodocumento'],
        ]);
        return 'tipodocumento';
    }
}
