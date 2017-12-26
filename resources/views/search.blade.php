@extends('results.index')

@section('contenido')

<br>
<div id="primerapagina" >

<div class="container">
	<br><br>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
	       <div class="jumbotron wow jello" style="margin-top: 12px;">
		      <h2 class="text-center" style="margin-bottom:-44px;"> Cambiamos tu forma de buscar medicinas </h2>
     
        
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
          <form method="get" action="{{route('busqueda')}}" id="formmedicina">
          <input type="text" placeholder="  Inserte nombre de medicina" name="medicina" id="searchbar" style="margin-top: -33px; margin:auto; margin-left: -219px; width: 311px"> <br><br>
        </div>
        
         <div class="row">
          <div class="col-md-6 col-md-offset-3">
          <button type="submit" class="btn btn-primary animated jello" id="buscar" style="margin:auto; margin-left: -44px; width: 311px;">Buscar</button> 
          </div>
          
          </form>

	       </div>
        </div>
      </div>
    </div>
  </div>
</div>

    
<br> 

 


@stop