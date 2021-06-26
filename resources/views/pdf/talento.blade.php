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
                margin-top:    2.5cm;
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
            <div align="right">
            <h4 style="display: inline; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;font-weight: normal; ">DIRECCION DE TALENTO HUMANO</h4>
            </div><br>
        </header>
        <br>
        <div align="justify">
        @foreach($posesion as $po)    
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
        @foreach($planta as $pla)
        @if($tipo->id == $per->tipodocumento_id)
        @if($per->expedicion_municipio_id == $muni->id) 
        @if($po->cargo_id == $car->id)
        @if($per->expedicion_municipio_id == $muni->id)
        @if($po->codigo_id == $cod->id)
        @if($po->grado_id == $gra->id)
        @if($po->oficinaadscrita_id == $ofiad->id)
        @if($po->tipoactoadministrativo_id == $tacadm->id)
        @if($po->tipovinculacion_id == $vin->id)
        <h4 style="display: inline; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;font-weight: normal; ">
            Sincelejo, {{$po->fechaposesion}}<br><br><br>
            Señor(a)<br>
            {{$per->nombres}} {{$per->apellidos}}<br>
            {{$tipo->tipodocumento}} N° {{$per->documento}}<br>
             {{$muni->municipio}}<br><br><br>
             Cordial saludo<br><br>
             Atraves del presente oficio me informarle a usted, que mediante {{$tacadm->tipoactoadministrativo}} {{$po->actoadministrativo}}, Ha sido nombrado para proveer el cargo de {{$car->cargo}} Codigo {{$cod->codigo}} Grado {{$gra->grado}}, {{$ofiad->oficinaadscrita}} de la planta de cargo de la {{$pla->planta}}.<br>
             Adjunto forocopia de {{$tacadm->tipoactoadministrativo}}.<br><br>
             Sirvase acercarse a esta oficina a fin de efectuar los tramites pertinentes a la posesion de cargo.<br><br><br>
             Atentamente,<br><br><br>


            <br>
         <h3 style="display: inline;">_____________________</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
         HAUDY SAMIR MONTERROSA<br>
         Director de Talento Humano                   
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
        @endforeach
        @endforeach
        </div>
    </body>
</html>