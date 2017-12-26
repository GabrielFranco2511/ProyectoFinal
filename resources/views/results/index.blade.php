<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Medicare</title>

{{-- <link rel="stylesheet" type="text/css" href="{{ url('./css/app.css') }}"> --}} 


		<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/app.css')}}">
    <link rel="stylesheet" type="" href="{{URL::asset('/fonts/fonts-awesome/css/font-awesome.min.css')}}">
	</head>
	<body style="background-image: url(/images/imagen1.jpeg); 
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed; width: 100%;" 
>
    <br>
        
       
    <div class="container-fluid">
        <nav class="navbar navbar-inverse" style="margin:auto; width: 60%;">
            <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#"><img src="{{URL::asset('/images/logo-color.png')}}" style="width: 122px;"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
              
      
                        <li style="color: white;"><a href="{{ route('home') }}"> Inicio </a></li>
       @if (auth()->check())
                        <li><a href=" {{ route('medicine.index')}}" >Tabla de medicinas</a></li>
                        <li><a href="{{ route('medicine.create')}}" >Agregar Producto</a></li>
      @endif
      @if (auth()->guest())
                        <ul class="nav navbar-right">
                        <li><a href="{{route('login')}}" style="color: white; margin-top: 6px;">Login</a></li>
    
      @else 
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;">Bienvenido,{{ auth()->user()->name . " " . auth()->user()->last_name }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="{{ route('logout')}}" >Log out</a></li>
                        </ul>
                      </li>
      @endif
    </ul>

</ul>
      
    </div>
  </div>
</nav>




        
        <div class="container">

            @yield('contenido')


        </div>
        <br>
    <footer style="background-color:lightgray; width:70%; margin: auto; ">
    <div class="container" style=" width:777px; " >
      <div class="row text-center">
        <div class="col-md-6 col-md-offset-3">   
      <h4 style="">Desarollado por Gabriel Franco.</h4>
      <p class="copyright"><small>&copy; 2017 Gabriel Franco Todos los Derechos Reservados.</small></p>
        </div>
       </div>
    </div>
  </footer>    
        <script type="text/javascript" src="url('./js/wow.js') }}--}}"></script>
         <script>
        new WOW().init();
        </script>
        
         <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    </body>
</html>