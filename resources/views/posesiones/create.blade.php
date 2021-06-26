@extends('layout.principal')
@section('contenido')



<link href="{{asset('css/wizard.css')}}" rel="stylesheet">


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Registro de Posesiones  </h6>
        <small class="text-danger" style="display:none;" id="mensaje" role="alert">
         Por favor llene todos los campos!!!
        </small>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left">
                <form id="myForm" action="{{url('posesion/crear')}}" method="POST">
                    @csrf
                    <!-- One "tab" for each step in the form: -->

                    <!--PRIMERA SECCION-->
                    <div class="form-group">
                        <div class="tab col-sm-12 mb-3 mb-sm-0">
                            <label for="tipoposesion_id">Tipo de posesion:</label>
                            <select class="custom-select" name="tipoposesion_id" id="tipoposesion_id" value="{{ old('tipoposesion_id') }}" required>
                                <option selected="true" value="" disabled="disabled">Seleccione tipo de posesion
                                </option>
                                @foreach($tipoposesions as $tipoposesion)
                                <option value="{{$tipoposesion->id}}" {{(old('tipoposesion_id')==$tipoposesion->id)? 'selected':''}}>
                                    {{$tipoposesion->tipoposesion}}
                                </option>
                                @endforeach
                            </select>
                            @error('tipoposesion_id')
                                    
                                @enderror
                        </div>
                      
                    </div>

                    <!--SEGUNDA SECCION-->
                    <div class="form-group">
                        <div class="tab col-sm-12 mb-3 mb-sm-0">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="nombres">Nombres:</label>
                                    <input type="text" class="form-control form-control-user" name="nombres"
                                    onKeyPress="return soloLetras(event)"   id="nombres" value="{{old('nombres')}}" required>
                                        @error('nombres')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="apellidos">Apellidos:</label>
                                    <input type="text" class="form-control form-control-user" name="apellidos"
                                    onKeyPress="return soloLetras(event)"   id="apellidos" value="{{old('apellidos')}}" value="{{old('apellidos')}}" required>
                                        @error('apellidos')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">

                                    <label for="tipodocumento_id">Tipo de documento de identidad:</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="tipodocumento" name="tipodocumento_id" required>
                                            <option selected="true" value="" disabled="disabled">Seleccione tipo de documento
                                            </option>
                                            @foreach($tipodocumentos as $tipodocumento)
                                            <option value="{{$tipodocumento->id}}" {{(old('tipodocumento_id')==$tipodocumento->id)? 'selected':''}}>
                                                {{$tipodocumento->tipodocumento}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary m"  type="button" data-toggle="modal"
                                                value="tipodocumentos">+</button>
                                        </div>
                                    </div>
                                    @error('tipodocumento_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="documento">Numero de Documento:</label>
                                    <input type="text" class="form-control form-control-user" name="documento"
                                    onKeyPress="return soloNumeros(event)"   id="documento" value="{{old('documento')}}" required>
                                        @error('documento')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="expedicion_paice_id">Pais de Expedición:</label>
                                    <select class="custom-select" name="expedicion_paice_id" id="expedicion_paice_id"  required>
                                        <option selected="true" value="" disabled="disabled">Seleccione el Pais de Expedición
                                        </option>
                                        @foreach($paices as $paice)
                                       <option value="{{$paice->id}}" >   <!--{{(old('expedicion_paice_id')==$paice->id)? 'selected':''}} -->
                                            {{$paice->paice}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('expedicion_paice_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label for="expedicion_departamento_id">Departamento de Expedición:</label>
                                    <select class="custom-select" name="expedicion_departamento_id"
                                        id="expedicion_departamento_id"  required>
                                        <option value="" disabled="disabled" selected="true">Seleccione Departamento...</option>
                                       
                                    </select>
                                    @error('expedicion_departamento_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label for="expedicion_municipio_id">Municipio de Expedición:</label>
                                    <select class="custom-select" name="expedicion_municipio_id"
                                        id="expedicion_municipio_id" required>
                                        <option value="" disabled="disabled" selected="true">Seleccione el Municipio de
                                            Expedición
                                        </option>
                                       
                                    </select>
                                    @error('expedicion_municipio_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="fechanacimiento">Fecha de Nacimiento:</label>
                                    <input type="date" class="form-control form-control-user" name="fechanacimiento"
                                        id="fechanacimientos" value="{{old('fechanacimiento')}}" required>
                                    @error('fechanacimiento')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="sexo">Sexo:</label>
                                    <div class="input-group">
                                        <select class="custom-select" name="sexo" id="sexo" required>
                                            <option selected="true" value="" disabled="disabled">Seleccione</option>
                                            <option value="Femenino" {{ old('sexo')=='Femenino' ? 'selected' : ''}}>
                                                Femenino
                                            </option>
                                            <option value="Masculino" {{ old('sexo')=='Masculino' ? 'selected' : ''}}>
                                                Masculino</option>
                                        </select>
                                    </div>
                                    @error('sexo')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                @enderror
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="estadocivil_id">Estado Civil:</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="estadocivil" name="estadocivil_id" required>
                                            <option selected="true" value="" disabled="disabled">Seleccione el Estado Civil
                                            </option>
                                            @foreach($estadocivils as $estadocivil)
                                            <option value="{{$estadocivil->id}}" {{(old('estadocivil_id')==$estadocivil->id)? 'selected':''}}>
                                                {{$estadocivil->estadocivil}}
                                            </option>
                                            @endforeach
                                        </select>
                                     
                                        <div class="input-group-append">
                                            <button class="btn btn-primary m" value="estadocivils" type="button">+</button>
                                        </div>
                                    </div>
                                    @error('estadocivil_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--TERCERA SECCION-->
                    <div class="form-group">
                        <div class="tab col-sm-12 mb-3 mb-sm-0">
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="residencia_paice_id">Pais de Residencia:</label>
                                    <select class="custom-select" name="residencia_paice_id" id="residencia_paice_id" required>
                                        <option selected="true" value="" disabled="disabled">Seleccione el Pais de Residencia
                                        </option>
                                        @foreach($paices as $paice)
                                         <option value="{{$paice->id}}" > <!--{{(old('residencia_paice_id')==$paice->id)? 'selected':''}} -->
                                            {{$paice->paice}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('residencia_paice_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label for="nombres">Departemento de Residencia:</label>
                                    <select class="custom-select" name="residencia_departamento_id"
                                        id="residencia_departamento_id" required>
                                        <option selected="true" value="" disabled="disabled">Seleccione el Departamento de
                                            Residencia
                                        </option>
                                      
                                    </select>
                                    @error('residencia_departamento_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label for="nombres">Municipio de Residencia:</label>
                                    <select class="custom-select" name="residencia_municipio_id"
                                        id="residencia_municipio_id" required>
                                        <option selected="true" value="" disabled="disabled">Seleccione el Municipio de
                                            Residencia
                                        </option>
                                       
                                    </select>
                                    @error('residencia_municipio_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8 mb-3 mb-sm-0">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" class="form-control form-control-user" name="direccion"
                                        id="direccion" value="{{old('direccion')}}" required>
                                     @error('direccion')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label for="telefono">Celular:</label>
                                    <input type="text" class="form-control form-control-user" name="telefono"
                                    onKeyPress="return soloNumeros(event)"    id="telefono" value="{{old('telefono')}}" required>
                                        @error('telefono')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--CUARTA SECCION-->
                    <div class="form-group">
                        <div class="tab col-sm-12 mb-3 mb-sm-0">
                            <div class="form-group row">
                                <div class="col-sm-2 mb-3 mb-sm-0">
                                    <label for="numero">N° de Posesion:</label>
                                    <input type="text" class="form-control form-control-user" name="numero" id="numero"
                                    onKeyPress="return soloNumeros(event)"    value="8863" required>
                                        @error('numero')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label for="fechaposesion">Fecha de Posesion:</label>
                                    <input type="date" class="form-control form-control-user" name="fechaposesion"
                                        id="fechaposesion" value="{{old('nombre')}}" required>
                                        @error('fechaposesion')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="cargo_id">Cargo:</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="cargo" name="cargo_id" required>
                                            <option selected="true" value="" disabled="disabled">Seleccione el Cargo
                                            </option>
                                            @foreach($cargos as $cargo)
                                            <option value="{{$cargo->id}}" {{(old('cargo_id')==$cargo->id)? 'selected':''}}>
                                                {{$cargo->cargo}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary m"  value="cargos" type="button">+</button>
                                        </div>
                                    </div>
                                    @error('cargo_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-2 mb-3 mb-sm-0">
                                    <label for="consecutivo">Consecutivo:</label>
                                    <input type="text" class="form-control form-control-user" name="consecutivo"
                                        id="consecutivo" value="{{old('consecutivo')}}" required>
                                        @error('consecutivo')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <hr class="sidebar-divider">
                            <!---------------------------------------------------------------------->
                            <div class="form-group row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label for="codigo_id">Código:</label>
                                    <select class="custom-select" id="inputGroupSelect04" name="codigo_id" required>
                                        <option selected="true" value="" disabled="disabled">Seleccione el Código
                                        </option>
                                        @foreach($codigos as $codigo)
                                        <option value="{{$codigo->id}}" {{(old('codigo_id')==$codigo->id)? 'selected':''}}>
                                            {{$codigo->codigo}}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('codigo_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label for="grado_id">Grado:</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="grado" name="grado_id">
                                            <option selected="true" value="" disabled="disabled" required>Seleccione el Grado
                                            </option>
                                            @foreach($grados as $grado)
                                            <option value="{{$grado->id}}" {{(old('grado_id')==$grado->id)? 'selected':''}}>
                                                {{$grado->grado}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary m"  value="grados" type="button">+</button>
                                        </div>
                                    </div>
                                    @error('grado_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="planta_id">Planta:</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="planta" name="planta_id" required>
                                            <option selected="true" value="" disabled="disabled">Seleccione la Panta
                                            </option>
                                            @foreach($plantas as $planta)
                                            <option value="{{$planta->id}}" {{(old('planta_id')==$planta->id)? 'selected':''}}>
                                                {{$planta->planta}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary m"  value="plantas" type="button">+</button>
                                        </div>
                                    </div>
                                    @error('planta_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="oficinaadscrita_id">Oficina o Dependencia a la que se Adscribe:</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="oficinaadscrita" name="oficinaadscrita_id" required>
                                            <option selected="true" value="" disabled="disabled">Seleccione La Oficina
                                            </option>
                                            @foreach($oficinaadscritas as $oficinaadscrita)
                                            <option value="{{$oficinaadscrita->id}}" {{(old('oficinaadscrita_id')==$oficinaadscrita->id)? 'selected':''}}>
                                                {{$oficinaadscrita->oficinaadscrita}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary m"  value="oficinaadscritas" type="button">+</button>
                                        </div>
                                    </div>
                                    @error('oficinaadscrita_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="tipovinculacion_id">Tipo de Vinculación:</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="tipovinculacion" name="tipovinculacion_id" required>
                                            <option selected="true" value="" disabled="disabled">Seleccione el Tipo de
                                                Vinculación
                                            </option>
                                            @foreach($tipovinculacions as $tipovinculacion)
                                            <option value="{{$tipovinculacion->id}}" {{(old('tipovinculacion_id')==$tipovinculacion->id)? 'selected':''}}>
                                                {{$tipovinculacion->tipovinculacion}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary m"  value="tipovinculacions" type="button">+</button>
                                        </div>
                                    </div>
                                    @error('tipovinculacion_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <hr class="sidebar-divider">
                            <!---------------------------------------------------------------------->
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="fechaactoadministrativo">Fecha de Acto Administrativo:</label>
                                    <input type="date" class="form-control form-control-user"
                                        name="fechaactoadministrativo" id="fechaactoadministrativo"
                                        value="{{old('fechaactoadministrativo')}}" required>
                                        @error('fechaactoadministrativo')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="tipoactoadministrativo_id">Tipo de Acto Administrativo:</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="tipoactoadministrativo"
                                            name="tipoactoadministrativo_id" required>
                                            <option selected="true" value="" disabled="disabled">Seleccione el Tipo de Acto
                                                Administrativo
                                            </option>
                                            @foreach($tipoactoadministrativos as $tipoactoadministrativo)
                                            <option value="{{$tipoactoadministrativo->id}}" {{(old('tipoactoadministrativo_id')==$tipoactoadministrativo->id)? 'selected':''}}>
                                                {{$tipoactoadministrativo->tipoactoadministrativo}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary m"  value="tipoactoadministrativos" type="button">+</button>
                                        </div>
                                    </div>
                                    @error('tipoactoadministrativo_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="actoadministrativo">Acto Administrativo:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-user"
                                            name="actoadministrativo" id="actoadministrativo"
                                            value="{{old('actoadministrativo')}}" required>

                                    </div>
                                    @error('actoadministrativo')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <hr class="sidebar-divider">
                            <!---------------------------------------------------------------------->
                           
                        </div>
                    </div>

                    <!--QUINTA SECCION-->
                    <div class="form-group">
                        <div class="tab col-sm-12 mb-3 mb-sm-0">
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="salud_id">Salud:</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="salud" name="salud_id" required>
                                            <option selected="true" value="" disabled="disabled">Seleccione la Entidad de Salud
                                            </option>
                                            @foreach($saluds as $salud)
                                            <option value="{{$salud->id}}" {{(old('salud_id')==$salud->id)? 'selected':''}}>
                                                {{$salud->salud}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary m" value="saluds" type="button">+</button>
                                        </div>
                                    </div>
                                    @error('salud_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="pension_id">Pension:</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="pension" name="pension_id" required>
                                            <option selected="true" value="" disabled="disabled">Seleccione la Entidad de Pensión
                                            </option>
                                            @foreach($pensions as $pension)
                                            <option value="{{$pension->id}}" {{(old('pension_id')==$pension->id)? 'selected':''}}>
                                                {{$pension->pension}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary m" value="pensions" type="button">+</button>
                                        </div>
                                    </div>
                                    @error('pension_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="arp_id">Arp:</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="arp" name="arp_id" required>
                                            <option selected="true" value="" disabled="disabled">Seleccione la Arl
                                            </option>
                                            @foreach($arps as $arp)
                                            <option value="{{$arp->id}}" {{(old('arp_id')==$arp->id)? 'selected':''}}>
                                                {{$arp->arp}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary m" value="arps" type="button">+</button>
                                        </div>
                                    </div>
                                    @error('arp_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="banco_id">Banco:</label>
                                    <div class="input-group">
                                        <select class="custom-select" id="banco" name="banco_id" required>
                                            <option selected="true" value="" disabled="disabled">Seleccione el Banco
                                            </option>
                                            @foreach($bancos as $banco)
                                            <option value="{{$banco->id}}" {{(old('banco_id')==$banco->id)? 'selected':''}}>
                                                {{$banco->banco}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary m" value="bancos" type="button">+</button>
                                        </div>
                                    </div>
                                    @error('banco_id')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="numerocuenta">Numero de Cuenta:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-user" name="numerocuenta"
                                        onKeyPress="return soloNumeros(event)"   id="numerocuenta" value="{{old('numerocuenta')}}" required>
                                   
                                    </div>
                                    @error('numerocuenta')
                                    <small class="text-danger" style="display:block;" role="alert">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="overflow:auto;">
                        <div class="btn-group" style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)"
                                class="btn btn-outline-secondary">Atras</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)"
                                class="btn btn-primary">Siguiente</button>
                        </div>
                    </div>

                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>

                </form>
            </div>
        </div>
    </div>

    @include('tipodocumento/create')

</div>


<script type="text/javascript" src="{{asset('js/wizard.js')}}"></script>

<script>
    $(document).ready(function(){
        $("#expedicion_paice").change(function(){
          var paice_id = $(this).val();
          
          $.get('departamentoPais/'+paice_id, function(data){
    //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
            console.log(data);
              var departamento = '<option value="">Seleccione Porducto</option>'
                for (var i=0; i<data.length;i++)
                  departamento+='<option value="'+data[i].id+'">'+data[i].departamento+'</option>';
    
                $("#expedicion_departamento").html(departamento);
    
          });
        });
      });
</script>





@endsection