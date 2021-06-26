<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RRHH - Aun Clic</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    @if (session()->has('flash'))
                    <div class="alert alert-info">{{session('flash')}}</div>
                    @endif
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Inicio de sesión</h6>
                    </div>
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-4">
                                    <div class="text-center">
                                        <img src="{{url('img/logo.png')}}" alt="" width="250px">
                                    </div>
                                    <div class="text-center">
                                        <h6> </h6>
                                        <h6>Sistema RRHH - Aun Clic <sup>v.2.0</sup></h6>
                                        <hr>
                                    </div>


                                    <form action="{{url('login')}}" class="user" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="usuario">Usuario:</label>
                                            <input type="text" class="form-control" name="usuario" id="usuario"
                                                placeholder="Ingresa tu Usuario" value="{{old('usuario')}}">
                                            @error('usuario')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="usuario">Contraseña:</label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                placeholder="Ingresa tu Contraseña">
                                            @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
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

</body>

</html>