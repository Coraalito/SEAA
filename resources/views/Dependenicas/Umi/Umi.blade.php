
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class=" ml-5 mr-5 p-3  rounded" style="background-color: rgb(221, 223, 235)">
       <h4 class="text-center font-weight-bold">Unidad de Multimedia Institucional</h4>
    </div>
@stop

@section('content')

<div class="bg-white p-3 my-1 ml-5 mr-5">
  <div class="row">
    <div class="col"> 
             
        <a  class="btn btn-primary p-2 pl-2 col-1" href="{{route('inventarioUmi')}}" type="submit"> 
          <i class='fas fa-archive'></i></a>

         <a  class="btn btn-primary p-2 pl-2 col-1 ml-1" href="{{route('umi-solicitud')}}"  type="submit"> 
          <i class='fas fa-clipboard-check'></i></a>

          <a  class="btn btn-primary p-2 pl-2 col-1 ml-1"  type="submit"> 
            <i class=' far fa-calendar-times'></i></a>

            <div class="float-right">
        
                  <select class="form-control form-select ml-1 " id="country" required>
                    <option value="">Filtrar por...</option>
                    <option>Esta semana</option>
                    <option>Hoy</option>
                    <option>Este mes</option>
                  </select>
            </div>
            
            <div class="float-right">
                  <div>
                    <input class="form-control  " type="serch" placeholder="Buscar">
                  </div>
            </div>   
      </div>          
    </div>
</div>

<div class=" m-4  rounded">
  <label for="" class="mediante d-flex justify-content-center align-items-center ">Cronogramam de evento</label> 
</div>


    <div class="ml-5 mr-5 mt-3 p-3 bg-white rounded  ">
      <div class="row">
        <div class="col-12">                  
            <div class="table-responsive">
              <table class="table table-striped ">
                <thead style="background-color: rgb(194, 200, 239)">
                   <tr class="text-center">                  
                    <th scope="col">Evento</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Audio</th>
                    <th scope="col">Grabacion </th>
                    <th scope="col">Proyección</th>
                    <th scope="col">Videoenlace </th>
                    <th scope="col">Edición </th>
                    <th scope="col">Otro </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                      <td>Altares</td>
                      <td>02-11-2022</td>
                      <td>10:00 a 12:00</td>
                      <td>2 Microfonos</td>
                      <td>2 horas</td>
                      <td>si</td>
                      <td>--</td>
                      <td>--</td>
                      <td>--</td>
                  </tr>

                  <tr class="text-center">
                      <td>Conferencia</td>
                      <td>30-10-2022</td>
                      <td>10:00 a 12:00</td>
                      <td>3 Microfonos</td>
                      <td>3 horas</td>
                      <td>si</td>
                      <td>--</td>
                      <td>--</td>
                      <td>--</td>
                  </tr> 

                  <tr class="text-center">
                      <td>Reunion turorias</td>
                      <td>15-11-2022</td>
                      <td>10:00 a 12:00</td>
                      <td>1 Microfonos</td>
                      <td>3 horas</td>
                      <td>si</td>
                      <td>--</td>
                      <td>--</td>
                      <td>--</td>
                  </tr>
            
                </tbody>
              </table>
            </div>
          </div>
      </div>
   </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop