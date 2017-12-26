@extends('results.index')

@section('contenido')


<br><br><br>

<div aria-hidden="true" style="">
    <div class="modal-dialog">
		<div class="loginmodal-container">
			
			<div class="jumbotron" style="border-radius: 12%; opacity: 0.9;filter: alpha(opacity=90);">
				<h3 style="color: #f26134; font-style: bold; text-align: center; ">Login to Your Account</h3><br>
				<form method="post" action="" class="form-group">
					{!! csrf_field()!!}
				<input class="form-control" type="text" name="email" placeholder="email"><br>
				<input class="form-control" type="password" name="password" placeholder="Password"><br>
				<input class="btn btn-primary" type="submit" name="login" value="Login" style="margin-left: 199px;">
				</form>
			</div>
		</div>
	</div>
</div>

@stop