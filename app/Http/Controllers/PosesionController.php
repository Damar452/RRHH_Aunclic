<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipodocumento;
use App\Tipoposesion;
use App\Paice;
use App\Departamento;
use App\Municipio;
use App\Estadocivil;
use App\Cargo;
use App\Codigo;
use App\Grado;
use App\Planta;
use App\Oficinaadscrita;
use App\Tipovinculacion;
use App\Tipoactoadministrativo;
use App\Salud;
use App\Pension;
use App\Arp;
use App\Banco;
use App\Persona;
use App\Novedadnomina;
use App\Posesion;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class PosesionController extends Controller
{

   


    public function ShowCreate(){

        $tipodocumentos = Tipodocumento::all();
        $tipoposesions = Tipoposesion::all();
        $paices = Paice::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $estadocivils = Estadocivil::all();
        $cargos = Cargo::all();
        $codigos = Codigo::all();
        $grados = Grado::all();
        $plantas = Planta::all();
        $oficinaadscritas = Oficinaadscrita::all();
        $tipovinculacions = Tipovinculacion::all();
        $tipoactoadministrativos = Tipoactoadministrativo::all();
        $saluds = Salud::all();
        $pensions = Pension::all();
        $arps = Arp::all();
        $bancos = Banco::all();
        
        
        return view('posesiones.create', compact(
            'tipoposesions',
            'tipodocumentos',
            'paices',
            'departamentos',
            'municipios',
            'estadocivils',
            'cargos',
            'codigos',
            'grados',
            'plantas',
            'oficinaadscritas',
            'tipovinculacions',
            'tipoactoadministrativos',
            'saluds',
            'pensions',
            'arps',
            'bancos'

        ));
    }

    public function Create(Request $request){

        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'tipodocumento_id' => 'required',
            'documento' => 'required',
            'expedicion_paice_id' => 'required',
            'expedicion_departamento_id' => 'required',
            'expedicion_municipio_id' => 'required',
            'fechanacimiento' => 'required',
            'residencia_paice_id' => 'required',
            'residencia_departamento_id' => 'required',
            'residencia_municipio_id' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'sexo' => 'required',
            'estadocivil_id' => 'required',
            'salud_id' => 'required',
            'pension_id' => 'required',
            'arp_id' => 'required',
            'banco_id' => 'required',
            'numerocuenta' => 'required',
            'tipoposesion_id' => 'required',
            'numero' => 'required',
            'consecutivo' => 'required',
            'fechaposesion' => 'required',
            'codigo_id' => 'required',
            'cargo_id' => 'required',
            'grado_id' => 'required',
            'planta_id' => 'required',
            'oficinaadscrita_id' => 'required',
            'tipovinculacion_id' => 'required',
            'fechaactoadministrativo' => 'required',
            'tipoactoadministrativo_id' => 'required',
            'actoadministrativo' => 'required',
            
            ]);

        try{
            DB::beginTransaction();

            $persona = new Persona();

            $persona->nombres = $request->nombres;
            $persona->apellidos = $request->apellidos;
            $persona->tipodocumento_id = $request->tipodocumento_id;
            $persona->documento = $request->documento;
            $persona->expedicion_paice_id = $request->expedicion_paice_id;
            $persona->expedicion_departamento_id = $request->expedicion_departamento_id;
            $persona->expedicion_municipio_id = $request->expedicion_municipio_id;
            $persona->fechanacimiento = $request->fechanacimiento;
            $persona->residencia_paice_id = $request->residencia_paice_id;
            $persona->residencia_departamento_id = $request->residencia_departamento_id;
            $persona->residencia_municipio_id = $request->residencia_municipio_id;
            $persona->direccion = $request->direccion;
            $persona->telefono = $request->telefono;
            $persona->sexo = $request->sexo;
            $persona->estadocivil_id = $request->estadocivil_id;
            $persona->save();

            $persona_id = Persona::pluck('id')->last(); 
            
            $novedadnomina = new Novedadnomina();

            $novedadnomina->persona_id = $persona_id;
            $novedadnomina->salud_id = $request->salud_id;
            $novedadnomina->pension_id = $request->pension_id;
            $novedadnomina->arp_id = $request->arp_id;
            $novedadnomina->banco_id = $request->banco_id;
            $novedadnomina->numerocuenta = $request->numerocuenta;
            $novedadnomina->save();

            $posesion = new Posesion();
            $hora= Carbon::now('America/Bogota');

            $posesion->tipoposesion_id = $request->tipoposesion_id;
            $posesion->persona_id = $persona_id;
            $posesion->numero = $request->numero;
            $posesion->consecutivo = $request->consecutivo;
            $posesion->fechaposesion = $request->fechaposesion;
            $posesion->codigo_id = $request->codigo_id;
            $posesion->cargo_id = $request->cargo_id;
            $posesion->grado_id = $request->grado_id;
            $posesion->planta_id = $request->planta_id;
            $posesion->oficinaadscrita_id = $request->oficinaadscrita_id;
            $posesion->tipovinculacion_id = $request->tipovinculacion_id;
            $posesion->fechaactoadministrativo = $request->fechaactoadministrativo;
            $posesion->tipoactoadministrativo_id = $request->tipoactoadministrativo_id;
            $posesion->actoadministrativo = $request->actoadministrativo;
            $posesion->user_id = auth()->user()->id;
            $posesion->fecha = $hora->toDateString();
            $posesion->save();
              
                
            DB::commit();

        } 
        catch(Exception $e)
        {
            DB::rollBack();
        }
 
        return redirect('posesion/todos');
    }
 

    public function getDepartamento(Request $request){
     
$departamentos = Departamento::where('paice_id','=',$request->search)->get();

return $departamentos;

    }

    public function getMunicipio(Request $request){
     
        $departamentos = Municipio::where('departamento_id','=',$request->search)->get();
        
        return $departamentos;
        
            }

            public function postvarios(Request $request){
     
               
            $datos = DB::table($request->tabla)->insert(
                    [ $request->columna => $request->dato]
                );


                if ($datos == 1){
                    $data =  DB::table($request->tabla)->find(DB::table($request->tabla)->max('id'));

                   return    json_encode($data);

                   }


            
                

                // return $datos;


                    }


   
    public function byPais($id){
        
    return Departamento::where('paice_id','=',$id)->get();
    
}

 public function Todos(){
        $personas = Persona::all();
        $posesions = Posesion::all();
        return view('posesiones.todos', ["personas"=>$personas,"posesions"=> $posesions]);
    }
    //
 public function pdf(Request $request,$id){
      
      $posesion = Posesion::all();
      $persona = Persona::all();
      $tipodo = Tipodocumento::all();
      $municipio = Municipio::all();
      $cargo = Cargo::all();
      $codigo = Codigo::all();
      $grado = Grado::all();
      $ofiadscrita= Oficinaadscrita::all();
      $vinculacion= Tipovinculacion::all();
      $tipoactoadmi= Tipoactoadministrativo::all();
     
      $pdf= \PDF::loadView('pdf.posesion',compact('posesion','persona','tipodo','municipio','cargo','codigo','grado','ofiadscrita','vinculacion','tipoactoadmi'));
    //return view('pdf.posesion',compact('posesion','persona','tipodo','municipio','cargo','cargo','codigo','grado','ofiadscrita','vinculacion','tipoactoadmi'));
     return $pdf->download('posesion-.pdf');
  }

  public function pdfT(Request $request,$id){
      
      $posesion = Posesion::all();
      $persona = Persona::all();
      $tipodo = Tipodocumento::all();
      $municipio = Municipio::all();
      $cargo = Cargo::all();
      $codigo = Codigo::all();
      $grado = Grado::all();
      $ofiadscrita= Oficinaadscrita::all();
      $vinculacion= Tipovinculacion::all();
      $tipoactoadmi= Tipoactoadministrativo::all();
      $planta = Planta::all();
     
      $pdf= \PDF::loadView('pdf.talento',compact('posesion','persona','tipodo','municipio','cargo','codigo','grado','ofiadscrita','vinculacion','tipoactoadmi','planta'));
    //return view('pdf.talento',compact('posesion','persona','tipodo','municipio','cargo','cargo','codigo','grado','ofiadscrita','vinculacion','tipoactoadmi','planta'));
     return $pdf->download('talento-.pdf');
  }
}
