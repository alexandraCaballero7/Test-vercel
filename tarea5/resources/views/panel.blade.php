

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')



  <div class="container border rounded-2">
  <div class="border-bottom">Resumen</div>
     <div class="row">
      <div class="col">
        <ul class="list-inline d-flex flex-wrap justify-content-around">
            <li class="list-inline-item bg-primary text-white rounded-2 d-flex align-items-center justify-content-center mb-2" style="width: calc(25% - 16px); height: 100px; max-width:100%; margin-block: 22px">
               <div>
                  Usuarios Activos<i class="fas fa-user fa-lg m-2"></i> 
                 <h2>3</h2>

               </div>
            
                 
            </li>
            <li class="list-inline-item bg-success text-white rounded-2 d-flex align-items-center justify-content-center mb-2" style="width: calc(25% - 16px); height: 100px; max-width:100%; margin-block: 22px">
             <div>
              Articulos Activos <i class="fas fa-file-alt fa-lg mr-2  m-2"></i>
              <h2>5</h2>
             </div>
             
            </li>
            <li class="list-inline-item bg-warning text-white rounded-2 d-flex align-items-center justify-content-center mb-2" style="width: calc(25% - 16px); height: 100px; max-width:100%; margin-block: 22px">
             <div>
              Autores <i class="fas fa-user fa-lg mr-2  m-2"></i>
              <h2>4</h2>
            </div> 
             
            </li>
            <li class="list-inline-item bg-secondary text-white rounded-2 d-flex align-items-center justify-content-center mb-2" style="width: calc(25% - 16px); height: 100px; max-width:100%; margin-block: 22px">
           <div>
            Editores  <i class="fas fa-edit fa-lg mr-2  m-2"></i> 
            <h2>2</h2>
           </div>
            </li>
       </ul>
   </div>
  </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop