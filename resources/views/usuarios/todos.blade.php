@extends('layout.principal')
@section('contenido')
<!-- ======= About Me ======= -->

<!-- Custom styles for this page -->
<link href="{{asset('css/wizard.css')}}" rel="stylesheet">
<link href="{{asset('datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

<!-- Page Heading -->


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Lista de Usuarios</h6>
    </div>
    @if ($users!=null)
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
                    </div>
                </div>
                @if(isset($users))
                <div class="row">
                    <div class="col-sm-12">
                        <table id="myTable">
                            <thead>
                                <tr class="header">
                                    <th style="width:30%;">
                                        NOMBRES</th>
                                    <th style="width:10%;">
                                        SEXO
                                    </th>
                                    <th style="width:10%;">
                                        USUARIO
                                    </th>
                                    <th style="width:20%;">
                                        E-MAIL</th>
                                    <th style="width:10%;">
                                        ESTADO
                                    </th>
                                    <th style="width:10%;">
                                        ROL
                                    </th>
                                    <th style="width:10%;">
                                        ACCIONES
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$user->nombres}}</td>
                                    <td>{{$user->sexo}}</td>
                                    <td class="">{{$user->usuario}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->estado}}</td>
                                    <td>{{$user->tipousuario}}</td>
                                    <td>

                                        <a class="btn btn-outline-warning"
                                            href="{{url('usuario/'.$user->id.'/editar')}}">
                                            <i class="fas fa-edit"></i>
                                        </a>


                                        <form method="post" action="{{url('usuario/'.$user->id)}}"
                                            style="display:inline">
                                            @csrf
                                            {{ method_field("delete") }}
                                            <button type="submit" class="btn btn-outline-danger"
                                                onclick="return confirm('¿Desea borrar el usuario, {{$user->nombres}} ?');">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {!! $users->render() !!}@endif
            </div>
        </div>
    </div>
    @else
    <h1>NO HAY USUARIOS REGISTRADOS</h1>
    @endif

</div>



<script type="text/javascript" src="{{asset('js/wizard.js')}}"></script>

@endsection