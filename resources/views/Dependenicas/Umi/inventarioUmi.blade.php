@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="d-flex align-items-center p-3 mr-5 ml-5 text-black rounded shadow-sm my-4" style="background-color: rgb(185, 178, 225)">
  <h4 class="text-center col-12 font-grey-bold">Inventario Unidad de Multimedia Institucional</h4>     
</div>
@stop

@section('content')
    <div class=" ml-5 mr-5 p-3  rounded" style="background-color: rgb(255, 255, 255)">
        <div class="">
        
            <form action="" >
                  <div class="col">
                    <div class="row">

                        <div class="col-12 mt-3">
                          <label for="" class="mediante d-flex justify-content-center align-items-center text-gray21" >MATERIALES</label>     
                          <hr>                
                        </div>

                         <div class="col-2 mt-3">
                            <label for="cc-expiration" class="form-label text-center">Microfonos</label>
                            <input type="number" class="form-control" id="cc-expiration" placeholder="" required>
                          </div>

                          <div class="col-2 mt-3">
                            <label for="cc-expiration" class="form-label text-center">Casset</label>
                            <input type="number" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                              Expiration date required
                            </div>
                          </div>

                          <div class="col-2 mt-3">
                            <label for="cc-expiration" class="form-label text-center">VGA</label>
                            <input type="number" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                              Expiration date required
                            </div>
                          </div>

                          <div class="col-2 mt-3">
                            <label for="cc-expiration" class="form-label text-center">Laptops</label>
                            <input type="number" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                              Expiration date required
                            </div>
                          </div>

                          <div class="col-2 mt-3">
                            <label for="cc-expiration" class="form-label text-center">HDMI</label>
                            <input type="number" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                              Expiration date required
                            </div>
                          </div>
                    </div>
                   

                    <div class="row">
                        <div class="col-12 mt-3">
                          <label for="" class="mediante d-flex justify-content-center align-items-center" >PERSONAL</label>       
                          <hr>              
                        </div>
                        <div class="col-2 ">
                            <label for="cc-expiration" class="form-label text-center">Fotografos</label>
                            <input type="number" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                              Expiration date required
                            </div>
                          </div>

                          <div class="col-2 ">
                            <label for="cc-expiration" class="form-label text-center">Editores</label>
                            <input type="number" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                              Expiration date required
                            </div>
                          </div>
                    </div>
                  </div>


                  <div class="row mt-3">
                    <div class="col text-center">
                      <button class="btn btn-primary " href="{{route('form')}}" style="background-color: rgb(64, 46, 169)"> Guardar</button>
                      <button class="btn btn-primary " href="{{route('form')}}" style="background-color: rgb(33, 142, 60)"> Cancelar</button>
                    </div>
                  </div>
            </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop