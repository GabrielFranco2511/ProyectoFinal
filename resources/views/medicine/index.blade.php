@extends('results.index')

@section('contenido')

<div class="container text-center">
	<div class="page header">
		<h2 style="text-align: center;" id="listap"> Lista de Productos</h2>
			<h2 id="letrablanca" style="text-align: center;"> Desea agregar nueva medicina? <a href="{{route('medicine.create')}}" class="btn btn-warning"> Ingresar </a> </h2>
	</div>
		<div class="page">
			<div class="table-responsive">
				<table class="table table-striped ">
					<thead>
						<tr>
							<th style="text-align: center; background-color: lightgreen;">Codigo de Medicina</th>
							<th style="text-align: center;background-color: lightgreen;">Imagen</th>		
							<th style="text-align: center;background-color: lightgreen;">Nombre de Medicina</th>
							<th style="text-align: center;background-color: lightgreen;">Categoria</th>
							<th style="text-align: center;background-color: lightgreen;">Descripcion</th>
							<th style="text-align: center;background-color: lightgreen;">Precio</th>
							<th style="text-align: center;background-color: lightgreen;"">Cantidad</th>
							<th style="text-align: center;background-color: lightgreen;">Ubicacion</th>
							<th style="text-align: center;background-color: lightgreen;"">Editar</th>
							<th style="text-align: center;background-color: lightgreen;"">Eliminar</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($medicines as $medicine)
							
							<tr>
								<td><h3 style="text-align: center;">{{$medicine->medicine_code}}</h3></td>
								<td><h3 style="text-align: center; margin-top: 12px;" ><img src="{{$medicine->images}}" style="width: 31px; height: 31px;"></h3></td>
								<td><h3 style="text-align: center;">{{$medicine->medicine_name}}</h3></td>
								<td><h3 style="text-align: center;">{{$medicine->category}}</h3></td>
								<td><h3 style="text-align: center;">{{$medicine->description}}</h3></td>
								<td><h3 style="text-align: center;">{{$medicine->price}}</h3></td>
								<td><h3 style="text-align: center;">{{$medicine->quantity}}</h3></td>
								<td><h3 style="text-align: center;">{{$medicine->pharmacy->pharmacy_name}}</h3></td>
							
								<td style="text-align: center;">
									<a href="{{route('medicine.edit', $medicine)}}" class="btn btn-primary"> Editar
										<i class="fa fa-pencil-square"></i>
									</a>

								</td>
								<td style="text-align: center;">
									{!! Form::open(['route'=>['medicine.destroy',$medicine]]) !!}
									<input type="hidden" name="_method" value="DELETE">
									<button onClick="return confirm('Eliminar Registro?')" class="btn btn-danger">Eliminar</button>
									
								{!! Form::close()!!}
								</td>
							</tr>
								
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
@stop