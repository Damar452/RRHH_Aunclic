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
        <h6 class="m-0 font-weight-bold text-primary">Listado de Posesiones</h6>
    </div>
    @if ($posesions!=null)
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombres..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="myTable">
                            <thead>
                                <tr class="header">
                                    <th style="width:70%;">
                                        NOMBRE</th>
                                    <th style="width:20%;">
                                        FECHA
                                    </th>
                                    <th style="width:10%;">
                                        ACCIONES
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posesions as $index => $posesion)
                                <tr role="row" class="even">
                                    <td>{{$personas[$index]->nombres}}
                                        {{$personas[$index]->apellidos}}</td>
                                    <td>{{$posesion->fechaposesion}}</td>
                                    <td>
                                        <form method="post" action="#" style="display:inline">
                                            @csrf
                                            <a href="{{url('pdfPosesion',$personas[$index]->id)}}" target="_blank">
                                            <button type="button" class="btn btn-outline-success">
                                                <i class="fas fa-print"></i>
                                            </button>
                                            </a>
                                            <a href="{{url('pdfTalento',$personas[$index]->id)}}" target="_blank">
                                            <button type="button" class="btn btn-outline-warning">
                                                <i class="fas fa-print"></i>
                                            </button>
                                        </a>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <h1>NO HAY USUARIOS REGISTRADOS</h1>
    @endif

</div>



<script type="text/javascript" src="{{asset('js/wizard.js')}}"></script>

@endsection