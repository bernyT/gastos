@extends('layout/layout_panel')

@include('layout/layout_navbar')

@section('title_panel')
	{!!$title_panel!!}
@endsection

@section('content_panel')	
	@foreach($tipo_gastos as $gasto)
	    <h3>{!! $gasto->nombre !!}</h3>
		    <p>{!! $gasto->descripcion !!}</p>
		    <p>
			    	<a href="{!! route('tipo_gasto_delete', $gasto->id) !!}" class="btn btn-danger">Eliminar</a>
			        <a href="{!! route('tipo_gasto_edit', $gasto->id) !!}" class="btn btn-primary">Editar Gasto</a>
		    </p>
	    <hr>
	@endforeach
@endsection
