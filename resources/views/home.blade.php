@extends('results.index')

@section('contenido')
<section id="fondo">
    <br><br><br>
    <section>

     <div class="container page-header" id="home" style="width: 53%;">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" ">
        <div class="item active">
          <img  id="doce" src=" {{URL::asset('/images/farmacia-medicinas')}}" alt="redess" style="width:100%;">
          <div class="carousel-caption"> <br>
            <h4>  <strong> La nueva manera de encontrar tus medicinas  </strong> </h4>
          </div>
        </div>

        <div class="item">
          <img src="{{URL::asset('/images/farmacia-medicinas2')}}" alt="redes" style="width:100%;">
          <div class="carousel-caption"> <br>
            <h4>  <strong> Unete a nuestra familia </strong> </h4>
          </div>
        </div>
      

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
      </section>

@section('stop')