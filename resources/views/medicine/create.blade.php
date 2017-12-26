@extends('results.index')

@section('contenido')
@if(session('info'))

  <div class="alert alert-success">
  	<strong> Exito </strong> {{ session('info') }}
  </div>

@else
	<div class="container text-center">
		<div class="page header">
			<br><br>
			<h2 style="color: white; text-align: center;"> Añadiendo nueva medicina</h2>
			
			</div>
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				{{--@if (count($errors)>0)
					@include('partials.errors')
				@endif--}}
<br>
				{!! Form::open(['route'=>'medicine.store']) !!}
			
				<div class="form-group">
						<label for="medicine_code" style="color: white;">Codigo del producto </label>

						{!! 
							Form::text(
						'medicine_code',
						null,
						array(
						'class'=>'form-control',
						'placeholder'=>'Ingresa el codigo del producto',
						'autofocus'=>'autofocus'
								)
							)
						!!} 

						{!!$errors->first('medicine_code')!!}

					</div>

					<div class="form-group">
						<label for="medicine_name" style="text-align: center; color: white;"">Nombre del producto </label>

						{!! 
							Form::text(
						'medicine_name',
						null,
						array(
						'class'=>'form-control',
						'placeholder'=>'Ingresa el nombre del producto'
								)

							)
						!!}
					

					</div>
					
					<div class="form-group">
						<label for="category" style="color: white;">Categoria del producto </label>

						{!! Form::text(
						'category',
						null,
						array(
						'class'=>'form-control',
						'placeholder'=>'Ingresa la categoria del producto'
						
								)
							)
						!!}
					

					</div>

					<div class="form-group">
						<label for="description" style="color: white;">Descripcion </label>

						{!! Form::text(
						'description',
						null,
						array(
						'class'=>'form-control',
						'placeholder'=>'Ingresa la descripcion'
						
						
								)
							)
						!!}
					

					</div>

					<div class="form-group">
						<label for="price" style="color: white;">Precio ($)</label>

						{!! Form::text(
						'price',
						null,
						array(
						'class'=>'form-control',
						'placeholder'=>'Ingresa el precio'
						
								)
							)
						!!}
					

					</div>

					<div class="form-group">
						<label for="quantity" style="color: white;">Cantidad</label>

						{!! Form::text(
						'quantity',
						null,
						array(
						'class'=>'form-control',
						'placeholder'=>'Ingresa la cantidad de medicinas'
						
								)
							)
						!!}
					

					</div>



						<div class="form-group">
						<label for="images" style="color: white;">images</label>

						{!! Form::text(
						'images',
						null,
						array(
						'class'=>'form-control',
						'placeholder'=>'Ingresa la imagen'
						
								)
							)
						!!}
					

					</div>

					<div class="form-group">
						<label for="pharmacy_id"> 
						 Selecciona Farmacia</label>
						</select>

						{!!Form::select('pharmacy_id',[
						'1'=>'Farmatodo',
						'2'=>'Farma Punto'],
						null,
						array(

						'class'=>'form-control',
						'placeholder'=>'Ingresa una farmacia'
						
								)
						
							)
						
					!!}


					</div>

					<div class="form-group">
						

						{!! Form::submit(
							'guardar',array('class'=>'btn btn-primary'))!!}
						<a href="{{route('medicine.index')}}" class="btn btn-danger"> Cancelar </a>

					</div>
						


				{!! Form::close()!!}}
			@endif
				
					

					</div>

				<div>
					<h4 style="color: white; text-align: center;" style="margin-top: -83px;"> Desea ir a la tabla de medicinas?<a href="{{route('medicine.index')}}" class="btn btn-warning"> Tabla </a></h4>
				</div>
			</div>
		</div>
	</div>

@stop