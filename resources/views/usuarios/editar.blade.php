@extends('layout.principal')
@section('contenido')
<!-- ======= About Me ======= -->
<!-- Page Heading -->

<!-- Illustrations -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Editar Usuario</h6>
    </div>
    <div class="card-body">

        <div class="row">

            <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left">
                <form action="{{url("usuario/{$user->id}")}}" method="POST">
                    @csrf
                    {{ method_field("put") }}
                    <div class="form-group row">
                        <div class="col-sm-10 mb-3 mb-sm-0">
                            <label for="nombres">Nombres:</label>
                            <input type="text" class="form-control form-control-user" name="nombres" id="nombres"
                                value="{{old('nombres', $user->nombres)}}">
                        </div>
                        <div class="col-sm-2">
                            <label for="sexo">Sexo:</label>
                            <select class="form-control form-control-user" name="sexo" id="sexo">
                                <option selected="true" disabled="disabled">Seleccione</option>
                                <option value="Femenino" {{ old('sexo',$user->sexo)=='Femenino' ? 'selected' : ''}}>
                                    Femenino</option>
                                <option value="Masculino" {{ old('sexo',$user->sexo)=='Masculino' ? 'selected' : ''}}>
                                    Masculino</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="usuario">Usuario:</label>
                            <input type="text" class="form-control form-control-user" name="usuario" id="usuario"
                                value="{{old('usuario', $user->usuario)}}">
                        </div>
                        <div class="col-sm-6">
                            <label for="password">Contraseña:</label>
                            <input type="password" class="form-control form-control-user" name="password" id="password"
                                value="{{old('password')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input type="email" class="form-control form-control-user" name="email" id="email"
                            value="{{old('email', $user->email)}}">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="estado" Estado>Estado:</label>
                            <select class="form-control form-control-user" name="estado" id="estado">
                                <option value="Activo" {{ old('estado',$user->estado)=='Activo' ? 'selected' : ''}}>
                                    Activo</option>
                                <option disabled>Inactivo</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="tipousuario" Estado>Tipo de usuario:</label>
                            <select class="form-control form-control-user" name="tipousuario" id="tipousuario">
                                <option value="Administrador"
                                    {{ old('tipousuario',$user->tipousuario)=='Administrador' ? 'selected' : ''}}>
                                    Administrador</option>
                                <option value="Estandar"
                                    {{ old('tipousuario',$user->tipousuario)=='Estandar' ? 'selected' : ''}}>Estandar
                                </option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </form>
            </div>
        </div>

    </div>




</div><!-- End About Me -->

@endsection