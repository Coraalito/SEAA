@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="pl-5 pr-5 pt-0 text-white rounded shadow-sm"  style="background-color: rgb(0, 53, 102)" >
  <div class="row">
  <h4 class="text-center font-weight-bold col-12 align-middle p-5">Sistema de Eventos Administrativos y Academicos</h4> 
</div>     
</div>
@stop

@section('content')
    <main class="container">    
      <div class="container bg-white  p-4 ">
        <main>         
          <div class="row mg-10">
            <div class="my-10">      
              <form class="needs-validation" novalidate>
                <div class="row g-3">

                  <div class="col-12">
                    <label  class="form-label text-center font-weight-bold ">DATOS DE LA SOLICITUD</label>                   
                  </div>

                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="lastName" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>   
        
      
                  <div class="col-12 mt-3">
                    <label for="email" class="form-label">Correo <span class="text-muted"></span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                      Please enter a valid email address for shipping updates.
                    </div>
                  </div>
      
                  <div class="col-12 mt-3">
                    <label for="address" class="form-label">Responsable del evento</label>
                    <input type="text " class="form-control" id="address"  required>
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
                  
                
                    <div class="col-md-3 mt-3">
                      <label for="cc-expiration" class="form-label">Ext. Tel</label>
                      <input type="tel" class="form-control" id="cc-expiration" placeholder="" required>
                      <div class="invalid-feedback">
                        Expiration date required
                      </div>
                    </div>
        
                    <div class="col-md-3 mt-3">
                      <label for="cc-cvv" class="form-label">Celular</label>
                      <input type="tel" class="form-control" id="cc-cvv" placeholder=""  required>
                      <div class="invalid-feedback">
                        Security code required
                      </div>
                    </div> 
           
                  <div class="col-12 mt-3">
                    <label for="address2" class="form-label">Nombre del evento</label>
                    <input type="text" class="form-control" id="address2">
                  </div>
      
                  <div class="col-5 mt-4 mr-2">
                    <label for="country" class="form-label">Lugar del evento</label>
                    <select class="form-control form-select" id="country" required>
                      <option value="">Selecciona...</option>
                      <option>Auditorio cid fuentes</option>
                      <option>Mini auditorio 1</option>
                      <option>Mini auditorio 2</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid country.
                    </div>
                  </div>
      

                  <div class="col-5 mt-4">
                    <label for="country" class="form-label">Tipo evento</label>
                    <select class="form-control form-select" id="country" required>
                      <option value="">Selecciona...</option>
                      <option>Academico</option>
                      <option>Extracurricular</option>
                      <option>Recreativo</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid country.
                    </div>
                  </div> 

                  
                  <div class="col-2 mt-4">
                    <label clas=" "for="fecha">Fecha</label>
                    <input class="form-control" type="date" required>							
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>

                  <div class="col-3 mt-4">
                    <label for="hora " class="form-label">Hora inicio</label>
                    <input class="form-control time ml-1" type="time" id="hora" name="hora">
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>

                  <div class="col-3 mt-4">
                    <label for="hora " class="form-label">Hora final</label>
                    <input class="form-control time ml-1" type="time" id="hora" name="hora">
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>

                  <div class="col-md-2 mt-4">
                    <label for="cc-expiration" class="form-label">No. de Personas</label>
                    <input type="number" class="form-control " id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
               
                </div>               
        
                <div class="float-sm-right">
                  <a class="btn btn-primary btn-lg p-2" href="{{route('formulario')}}" type="submit">Siguiente</a> 
               
                </div>  
              </form>
            </div>
          </div>
        </main>   
      </div>
      
      
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      
            <script src="form-validation.js"></script>
    </main>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop