<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{{ csrf_token() }}">

    <title>RRHH - Aun Clic</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-home fa-3x"></i>
                </div>
                <div class="sidebar-brand-text mx-3">
                    Aun clic <sup>v.2.0</sup>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <div class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel de administracion</span>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Personal
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Posesiones</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestion de posesiones:</h6>
                        <a class="collapse-item" href="{{url('posesion/todos')}}">Lista de posesiones</a>
                        <a class="collapse-item" href="{{url('posesion/crear')}}">Nueva posesion</a>
                    </div>
                </div>
            </li>

            @if ( \Auth::user()->tipousuario != 'Estandar')
            <!-- Divider -->
            <hr class="sidebar-divider">
           
            <!-- Heading -->
            <div class="sidebar-heading">
                Gesti??n
            </div>


            
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Usuarios</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestrion de usuarios:</h6>
                        <a class="collapse-item" href="login.html">Perfil</a>
                        <a class="collapse-item" href="{{url('usuario/todos')}}">Lista de usuarios</a>
                        <a class="collapse-item" href="{{url('usuario/crear')}}">Registro</a>
                    </div>
                </div>
            </li>
            @else 

            @endif

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <img src="{{url('img/logo2.png')}}" alt="" width="250 px">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler ?? 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60"
                                            alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun ?? 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60"
                                            alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez ?? 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog ?? 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->nombres}}</span>
                                <i class="fas fa-user-circle fa-2x"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <section id="area">
                        @yield('contenido')
                    </section>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Alcaldia Municipal de Sincelejo 2020 - Practicantes Corposucre</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">??Desea salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">{{auth()->user()->nombres}}, para continuar en el sistema presione cancelar
                </div>
                <div class="modal-footer">
                    <form action="{{url('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary">Salir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>



<script>

    $(document).ready(function (){
        $("#expedicion_paice_id").change(function  () {

            $value=$(this).val(); // aqui vas a poner el id del input donde va asalir el dato
                       // asi $value =  $('#dato').val();

                       document.getElementById("expedicion_departamento_id").innerHTML ="";
        $("#expedicion_paice_id option:selected").each(function () {

            

$.ajax({
type : 'get', //tipo de envio
url : '{{URL::to('departamentos')}}', //este es el nombre de la ruta
data:{'search': $value},
success:function(data){



    if (data.length >= 0){
        document.getElementById("expedicion_departamento_id").innerHTML += "<option selected='true' disabled='disabled' >Seleccione un Departamento</option>";
        for(var i= 0 ;i<data.length;i++)
                {
                    
                    
                    document.getElementById("expedicion_departamento_id").innerHTML += "<option value='"+data[i].id+"'  {{(old('expedicion_departamento_id')=="+data[i].id+")? 'selected':''}}  >"+data[i].departamento+"</option>";
                    
                    
                   
                }
    } 
    

  
  
}
});

});
});
});
</script>


<script>
    $(document).ready(function(){
        $("#expedicion_departamento_id").change(function () {

            $value=$(this).val(); // aqui vas a poner el id del input donde va asalir el dato
                       // asi $value =  $('#dato').val();

                       document.getElementById("expedicion_municipio_id").innerHTML ="";
        $("#expedicion_departamento_id option:selected").each(function () {

$.ajax({
type : 'get', //tipo de envio
url : '{{URL::to('municipios')}}', //este es el nombre de la ruta
data:{'search': $value},
success:function(data){

    

    if (data.length >= 0){
        document.getElementById("expedicion_municipio_id").innerHTML += "<option selected='true' disabled='disabled' >Seleccione un Municipio</option>";
        for(var i= 0 ;i<data.length;i++)
                {
                    
                    document.getElementById("expedicion_municipio_id").innerHTML += "<option value='"+data[i].id+"'>"+data[i].municipio+"</option>";
                    
                    
                   
                }
    } 
    
    

  
  
}
});

});
});
});
</script>
















<script>
    $(document).ready(function(){
        $("#residencia_paice_id").change(function () {

            $value=$(this).val(); // aqui vas a poner el id del input donde va asalir el dato
                       // asi $value =  $('#dato').val();

                       document.getElementById("residencia_departamento_id").innerHTML ="";
        $("#residencia_paice_id option:selected").each(function () {

$.ajax({
type : 'get', //tipo de envio
url : '{{URL::to('departamentos')}}', //este es el nombre de la ruta
data:{'search': $value},
success:function(data){

    

    if (data.length >= 0){
        document.getElementById("residencia_departamento_id").innerHTML += "<option selected='true' disabled='disabled' >Seleccione un Departamento</option>";
        for(var i= 0 ;i<data.length;i++)
                {
                    
                    document.getElementById("residencia_departamento_id").innerHTML += "<option value='"+data[i].id+"'>"+data[i].departamento+"</option>";
                    
                    
                   
                }
    } 
    

  
  
}
});

});
});
});
</script>


<script>
    $(document).ready(function(){
        $("#residencia_departamento_id").change(function () {

            $value=$(this).val(); // aqui vas a poner el id del input donde va asalir el dato
                       // asi $value =  $('#dato').val();

                       document.getElementById("residencia_municipio_id").innerHTML ="";
        $("#residencia_departamento_id option:selected").each(function () {

$.ajax({
type : 'get', //tipo de envio
url : '{{URL::to('municipios')}}', //este es el nombre de la ruta
data:{'search': $value},
success:function(data){

    

    if (data.length >= 0){
        document.getElementById("residencia_municipio_id").innerHTML += "<option selected='true' disabled='disabled' >Seleccione un Municipio</option>";
        for(var i= 0 ;i<data.length;i++)
                {
                    
                    document.getElementById("residencia_municipio_id").innerHTML += "<option value='"+data[i].id+"'>"+data[i].municipio+"</option>";
                    
                    
                   
                }
    } 
    
    

  
  
}
});

});
});
});
</script>






<script type="text/javascript">

// Solo permite ingresar numeros.
function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}

</script>


<script>


	  //Validar las cajas de texto...
      
      function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " ??????????abcdefghijklmn??opqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
          


</script>


<script> 
$(document).ready(function(){
	$(document).on('click', '.m', function(){
		
		var tabla=$(this).val();
        var columna = tabla.slice( 0, -1);
		

		$('#modales').modal('show');
		
        $('#tabla').val(tabla);
        $('#columna').val(columna);
		
        $('#agregar_modal').val("");

	});
});

</script>










    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>



</body>

</html>