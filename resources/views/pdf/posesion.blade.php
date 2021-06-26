<!DOCTYPE>
<html>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>Reporte de compra</title>
    <style>
            @page {
                margin: 0px;
                margin-top: 0cm;
            }
            body {
                margin-top:    4.5cm;
                margin-bottom: 1cm;
                margin-left:   3cm;
                margin-right:  3cm;
            }
            #watermark {
                position: fixed;
                bottom:   0px;
                left:     0px;
                width:    21.8cm;
                height:   30cm;
                z-index:  -1000;
            }
        </style>
    <body  class="bg-white">
    <div id="watermark">
            <img src="img/bg-pdf.jpg" height="100%" width="100%" />
        </div>
       
        <header>
            @foreach($posesion as $po)
            <div align="center">
            <h3 style="display: inline; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;font-weight: normal; ">ACTA DE POSESION N° {{$po->numero}}</h3>
            </div><br>
            <div align="center">-------------------------------------------------------------------------------------------------------<br><h4>{{$po->fechaposesion}}</h4></div>
            
            @endforeach
        </header>
        <br>
        <div align="justify">
        @foreach($persona as $per)
        @foreach($tipodo as $tipo)
        @foreach($municipio as $muni)
        @foreach($posesion as $po)
        @foreach($cargo as $car)
        @foreach($codigo as $cod)
        @foreach($grado as $gra)
        @foreach($ofiadscrita as $ofiad)
        @foreach($vinculacion as $vin)
        @foreach($tipoactoadmi as $tacadm)
        @if($tipo->id == $per->tipodocumento_id)
        @if($per->expedicion_municipio_id == $muni->id) 
        @if($po->cargo_id == $car->id)
        @if($per->expedicion_municipio_id == $muni->id)
        @if($po->codigo_id == $cod->id)
        @if($po->grado_id == $gra->id)
        @if($po->oficinaadscrita_id == $ofiad->id)
        @if($po->tipoactoadministrativo_id == $tacadm->id)
        @if($po->tipovinculacion_id == $vin->id)
        <h4 style="display: inline; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;font-weight: normal; ">En la ciudad de sincelejo, capital del Departamento de Sucre, republica de Colombia, se presento en el Despacho del Alcalde de SINCELEJO, el(la) señor(a) {{$per->nombres}} {{$per->apellidos}}, identificado(a) con  {{$tipo->tipodocumento}} numero {{$per->documento}} de {{$muni->municipio}}, con el fin de tomar posesion del cargo de {{$car->cargo}} Codigo {{$cod->codigo}} Grado {{$gra->grado}}, adscrito a {{$ofiad->oficinaadscrita}} , al cual fue nombrado(a) con caracter de {{$vin->tipovinculacion}} por {{$tacadm->tipoactoadministrativo}} {{$po->actoadministrativo}}. <br><br>
         El(a) señor(a) {{$per->nombres}} {{$per->apellidos}}, presto el juramento ordenado por el articulo 122 de la constitucion Politica y manifesto bajo la gravedad de juramento no estar incurso(a) en causal alguna de inhabilidad general o especial, de incompatibilidad o prohibicion establecida en la ley 4 de 1992 y demas disposiciones vigentes para el desempeño de empleados publicos.<br><br>
         En cumplimiento de lo dispuesto en el inciso final de articulo 2.2.5.1.8 del Decreto 1083 de 2015 declaro bajo la gravedad del juramento no tener conocimiento de procesos pendientes de caracter alimentario o que cumplira con sus obligaciones de familia.<br><br>
         <h3 style="display: inline;">_____________________</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <h3 style="display: inline;"align="rigth">_____________________</h3><br>
         FIRMA DEL POSESIONADO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FIRMA DE QUIEN POSESIONA                    
        </h4>
        @endif
        @endif
        @endif
        @endif
        @endif
        @endif
        @endif
        @endif
        @endif
        @endforeach
        @endforeach
        @endforeach
        @endforeach
        @endforeach
        @endforeach
        @endforeach
        @endforeach
        @endforeach
        @endforeach
        </div>
    </body>
</html>