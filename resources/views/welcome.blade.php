@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="text-white bg-cyan rounded shadow-sm p-3 m-4">
  <h1 class="text-center">Eventos Programados</h1>
</div>
@stop

@section('content')

  @yield('tablas')
    <div class=" ml-5 mr-5 p-3 bg-white rounded ">

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Evento</th>
          <th scope="col">Fecha</th>
          <th scope="col">Hora</th>
          <th scope="col">Requerimientos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>djvndjsv</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>djvndjsv</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
          <td>djvndjsv</td>
        </tr>
  
      </tbody>
    </table>
    
  @stop
  
  </div>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop