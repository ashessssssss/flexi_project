@extends('usuario.layout.master')

@section('content')
<section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div>
            <h1>Bienvenido, {{Auth::user()->name}}.</h1>

          </div>  
         
          
          
       
        </section>
@endsection