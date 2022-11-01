 @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<div class=" ml-2 mr-2 p-3  rounded" style="background-color: rgb(255, 255, 255)">
  <h4 class="text-center font-weight-bold">Aceptar eventos</h4>
</div>
@stop

@section('content')
<div class=" m-2 p-3 bg-white rounded">

  <table class="table table-striped e table-hover">
    <thead style="background-color: rgb(255, 255, 255); pb-3">
      <tr>
        <th scope="col">Evento</th>
        <th scope="col">Solicitante</th>          
        <th scope="col">Correo</th>
        <th scope="col">Lugar</th>
        <th scope="col">Fecha</th>
        <th scope="col">Hora</th>
        <th scope="col">Requerimientos</th>     
        <th scope="col" class="row justify-content-center">Opciones</th>
      </tr>
    </thead>
    
    <tbody>
      <tr scope="row ">
         
        <td>Altares</td>
        <td>Jose Perez</td>        
        <td>Jose@gmail.com</td>
        <td>Jardines centrales</td>
        <td>29-12-12</td>
        <td>12:00 a 14:00</td>
        <td class="row justify-content-center">
          
          <!---->
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
            Mostrar
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-center" id="exampleModalCenterTitle">Requerimientos o tipos de servicios de la unidad de multimedia</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-12">                  
                        <div class="table-responsive">
                          <table class="table table-striped ">
                              <head>
                                <tr>
                                  <th>Audio</th>
                                  <th>Grabación</th>
                                  <th>Proyección</th>
                                  <th>Videonlane</th>
                                  <th>Edición de video</th>
                                </tr>
                              </head>
                              <tbody>
                                <tr>
                                
                                  <td>3 microfonos</td>
                                  <td><i class="fas fa-check"></td>
                                  <td>si</td>
                                  <td><i class="fas fa-check"></td>
                                  <td><i class="fas fa-check"></i></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                 
                </div>
              </div>
            </div>
          </div>
          <!---->
        </td>           
        <td   >
          <a href="" class="btn btn-primary mr-1 ">Aceptar</a>
          <a href="" class="btn btn-danger">Denegar</a>           
        </td>       
    </tr>
 
    <tr scope="row">
         
      <td>Conferencia</td>
      <td>Carlos Gonzales</td>        
      <td>carlos@gmail.com</td>
      <td>Auditorio</td>
      <td>29-12-12</td>
      <td>12:00 a 14:00</td>
      <td class="row justify-content-center">
        <a href="" class="btn btn-warning">Mostrar</a>
      </td>           
      <td>
        <a href="" class="btn btn-primary mr-1 ">Aceptar</a>
        <a href="" class="btn btn-danger">Denegar</a>           
      </td>       

  </tr>
    </tbody>
  </table>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop