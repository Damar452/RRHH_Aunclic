<div class="modal fade" id="modales" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agrege el Nuevo Tipo</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{url('gvarios')}}" id="formulario" method="get">
                @csrf

                <input type="hidden" name="tabla" id="tabla">
                <input type="hidden" name="columna" id="columna">
                <div class=" modal-body">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <label for="tipodocumento">Nuevo Tipo:</label>
                        <input type="text" class="form-control form-control-user" name="dato"
                            id="agregar_modal" >
                           
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button  id="btnEnviar" name="btnEnviar" value="Enviar formulario" type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>





<script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>

<script>
$(document).ready(function () {
    $("#formulario").bind("submit",function(){
        // Capturamnos el boton de envío
        var btnEnviar = $("#btnEnviar");
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data:$(this).serialize(),
            beforeSend: function(){
                /*
                * Esta función se ejecuta durante el envió de la petición al
                * servidor.
                * */
                // btnEnviar.text("Enviando"); Para button 
                btnEnviar.val("Enviando"); // Para input de tipo button
                btnEnviar.attr("disabled","disabled");
            },
            complete:function(data){
                /*
                * Se ejecuta al termino de la petición
                * */
                btnEnviar.val("Enviar formulario");
                btnEnviar.removeAttr("disabled");
            },
            success: function(data){
                
                $('#modales').modal('hide'); 
            //    var x = data["tipodocumento"];
          $data =  JSON.parse(data);

      var  keys = Object.keys($data);
       var key = keys[1];
       
    //   $data[key];
     
          document.getElementById(key).innerHTML += "<option value='"+$data.id+"'>"+$data[key]+"</option>";

          


            },
            error: function(data){
                /*
                * Se ejecuta si la peticón ha sido erronea
                * */
                alert("Problemas al tratar de enviar el formulario");
            }
        });
        // Nos permite cancelar el envio del formulario
        return false;
    });
});




</script>