@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
 
@stop

@section('content')
<main class="container">
    <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm my-4">
      <div class="lh-1">Unidad de multimedia institucional</div>        
    </div>
    <div class="container bg-white  p-4 ">
        <div class="container">
            <div class="row">
                <div class="col mt-3">
                    <div class="form-check" data-toggle="collapse" href="#collapseAudio" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Audio</label>
                      </div>
                      <div class="collapse mt-1" id="collapseAudio" >
                        <div class="form-group">
                            <select class="form-control">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                            </select>                                
                        </div>
                      </div>
                </div>

                 <div class="col m-3">
                    <div class="form-check" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Grabación</label>
                      </div>
                      <div class="collapse" id="collapse2">
                        <div class="form-group">
                            <select class="form-control">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                            </select>                                
                        </div>
                      </div>
                </div>

                <div class="col m-3">
                    <div class="form-check" data-toggle="collapse" href="#collaps3" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Proyección</label>
                      </div>
                      <div class="collapse mt-1 mb-0" id="collaps3" >
                        <div class="card card-body">
                            No incluye cable ni VGA
                          </div>
                      </div>
                </div>

                <div class="col m-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">videoenlace</label>
                      </div>
                </div>

                <div class="col m-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Edición de video</label>
                      </div>
                </div>
        
                <div class="col-2 ml-4 mt-3" >
                    <div class="form-check" data-toggle="collapse" href="#collapsOtro1" role="button" aria-expanded="false" aria-controls="collapsOtro1">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Otros</label>
                      </div>
                      <div class="collapse" id="collapsOtro1">
                        <input class="form-control" type="text" name="" >
                      </div>
                </div> 
            </div>
          </div>
    </div>
    
    <!-- ------------------------------------------------------------------------------------------- -->
    <div class="d-flex align-items-center p-3 my-3 text-white bg-cyan rounded shadow-sm my-4">
        <div class="lh-1">Unidad de comunicación de radio</div>        
      </div>
      <div class="container bg-white  p-4 ">
          <div class="container">
              <div class="row">
                  <div class="col mt-3">
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="same-address">
                          <label class="form-check-label" for="same-address">Inserccion periodica</label>
                        </div>
                  </div>
  
                   <div class="col m-3">
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="same-address">
                          <label class="form-check-label" for="same-address">Boletín de prensa</label>
                        </div>
                  </div>
  
                  <div class="col m-3">
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="same-address">
                          <label class="form-check-label" for="same-address">Boletin Gaceta</label>
                        </div>
                  </div>
  
                  <div class="col m-3">
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="same-address">
                          <label class="form-check-label" for="same-address">Entrevista de radio</label>
                        </div>
                  </div>  
                  <div class="col m-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Spot de radio</label>
                      </div>
                </div>
    
              </div>

              <div class="row">
             
        
                <div class="col-2 mt-3">
                  <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="same-address">
                      <label class="form-check-label" for="same-address">Difusión interna</label>
                    </div>
              </div>
         
                <div class="col-2 ml-4 mt-3" >
                    <div class="form-check" data-toggle="collapse" href="#collapsOtro2" role="button" aria-expanded="false" aria-controls="collapsOtro2">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Otros</label>
                      </div>
                      <div class="collapse" id="collapsOtro2">
                        <input class="form-control" type="text" name="" >
                      </div>
                </div> 
                
            
              </div>
            </div>
      </div>

  <!-- ------------------------------------------------------------------------------------------- -->
    <div class="d-flex align-items-center p-3 my-3 text-white" style="background-color: rgb(94, 167, 96); rounded shadow-sm my-4">
        <div class="lh-1">Cordinación de extenciones</div>        
      </div>
      <div class="container bg-white  p-4 ">
          <div class="container">
              <div class="row">
                  <div class="col mt-3">
                    <div class="form-check" data-toggle="collapse" href="#collapsFlores" role="button" aria-expanded="false" aria-controls="collapsFlores">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Flores</label>
                      </div>
                      <div class="collapse" id="collapsFlores">
                        <input class="form-control" type="text" name="" >
                      </div>
                  </div>
  
                   <div class="col m-3">
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="same-address">
                          <label class="form-check-label" for="same-address">Banderines</label>
                        </div>
                  </div>
  
                  <div class="col m-3">
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="same-address">
                          <label class="form-check-label" for="same-address">Presidium</label>
                        </div>
                  </div>
  
                  <div class="col m-3">
                    <div class="form-check" data-toggle="collapse" href="#collapsOtro3" role="button" aria-expanded="false" aria-controls="collapsOtro3">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Otros</label>
                      </div>
                      <div class="collapse" id="collapsOtro3">
                        <input class="form-control" type="text" name="" >
                      </div>
                  </div>           
              </div>
            </div>
      </div>

     <!-------------------------------------------------------------------->
      <div class="d-flex align-items-center p-3 my-3 text-white" style="background-color: rgb(0, 102, 204); rounded shadow-sm my-4">
        <div class="lh-1">Cordinación de servicios generales</div>        
      </div>

      <div class="container bg-white  p-4 ">
          <div class="container">
              <div class="row">
                  <div class="col-4 mt-3">
                    <div class="form-check" data-toggle="collapse" href="#Mobiliario" role="button" aria-expanded="false" aria-controls="collapsFlores">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Mobiliario</label>
                      </div>

                      <div class="col mt-2">
                        <div class="row">

                            <div class="collapse mt-1 col-4" id="Mobiliario" >
                                <label for="">Sillas</label>
                                <div class="form-group">
                                    <select class="form-control">                
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>                                
                                </div>
                              </div>

                              <div class="collapse mt-1 col" id="Mobiliario" >
                                <label for="">Tablones grandes</label>
                                <div class="form-group">
                                    <select class="form-control">                
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>                                
                                </div>
                              </div>
                        </div>
                   
                        <div class="row">

                           
                            <div class="collapse mt-1 col-4" id="Mobiliario" >
                                <label for="">Mesas</label>
                                <div class="form-group">
                                    <select class="form-control">                
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>                                
                                </div>
                              </div>

                              <div class="collapse mt-1 col" id="Mobiliario" >
                              
                                <label for="">Tablones chicos</label>
                                <div class="form-group">
                                    <select class="form-control">                
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>                                
                                </div>
                              </div> 

                        </div>
                
    
                          <div class="collapse mt-1 col-4" id="Mobiliario" >
                            <label for="">Mamparas</label>
                            <div class="form-group">
                                <select class="form-control">                
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>                                
                            </div>
                          </div>

                          <div class="collapse mt-1 col-4" id="Mobiliario" >
                            <label for="">Podium</label>
                            <div class="form-group">
                                <select class="form-control">                
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>                                
                            </div>
                          </div>                       
                      </div>

                   
                  </div>
  
                   <div class="col m-3">
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="same-address">
                          <label class="form-check-label" for="same-address">Montaje de mobiliario</label>
                        </div>
                  </div>
  
           
  
                  <div class="col m-3">
                    <div class="form-check" data-toggle="collapse" href="#collapsOtro4" role="button" aria-expanded="false" aria-controls="collapsOtro4">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">Otros</label>
                      </div>
                      <div class="collapse" id="collapsOtro4">
                        <input class="form-control" type="text" name="" >
                      </div>
                  </div>           
              </div>
            </div>
         </div>
       <!----------------------------------------------------------------------------------------->

       <div class="d-flex align-items-center p-3 my-3 text-white" style="background-color: rgb(131, 86, 203); rounded shadow-sm my-4">
        <div class="lh-1">Coordinación de tecnologias para el aprendizaje</div>        
      </div>

      <div class="container bg-white  p-4 ">
        <div class="col">
          <div class="row">

            <div class="col m-3">
              <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="same-address">
                  <label class="form-check-label" for="same-address">Contancias SARA</label>
                </div>
          </div>

            <div class="col-3 m-3">
              <div class="form-check" data-toggle="collapse" href="#collapsOtro5" role="button" aria-expanded="false" aria-controls="collapsOtro5">
                  <input type="checkbox" class="form-check-input" id="same-address">
                  <label class="form-check-label" for="same-address">Otros</label>
                </div>
                <div class="collapse" id="collapsOtro5">
                  <input class="form-control" type="text" name="" >
                </div>
            </div> 

          </div>
        </div>
      </div>
       <!------------------------------------------------------------------------------------------->
            <div class="container bg-white">

              <div class="row">
                <div class="col">
                  <div>
                    <a class="btn btn-secondary btn-lg m-4" href="{{route('form')}}"> Regresar </a>  
                    <div class="float-sm-right">
                      <a class="btn btn-warning btn-lg m-4 " href="{{route('form')}}"> Finalizar </a>  
                    </div> 
                  </div> 
              
                  </div>
                </div>
              </div>
            <!----->

      </div>
      
  </main>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop