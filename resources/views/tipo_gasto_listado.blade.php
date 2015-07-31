@extends('layout')

@section('content')

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Tipo Gasto</div>
				<div class="panel-body">
					@if (Session::has('message'))
    					<div class="flash alert">
        					<p>{!! Session::get('message') !!}</p>
    					</div>
    				@endif
					
					@foreach($tipo_gastos as $gasto)
					    <h3>{!! $gasto->nombre !!}</h3>
					    <p>{!! $gasto->descripcion !!}</p>
					    <p>
					    	<a href="{!! route('tipo_gasto_delete', $gasto->id) !!}" class="btn btn-danger">Eliminar</a>
					        <a href="{!! route('tipo_gasto_edit', $gasto->id) !!}" class="btn btn-primary">Editar Gasto</a>
					    </p>
					    <hr>
					@endforeach

				</div>
			</div>
		</div>
	</div>
@endsection