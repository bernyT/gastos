@extends('layout/layout_panel')

@include('layout/layout_navbar')

@section('title_panel')
	{!!$title_panel!!}
@endsection

@section('content_panel')	
	@foreach($gastos as $gasto)
	    <h3>{!! $gasto['nombre'] . '  $'. $gasto['importe'] !!}</h3>
		    <p>{!! 'Vencimiento ' .$gasto['fecha_vencimineto']   !!}</p>
		    <p>
			    	<a href="{!! route('gasto_pagar', $gasto['id']) !!}" class="btn btn-danger">Pagar</a> 
			        <a href="{!! route('gasto_edit', $gasto['id']) !!}" class="btn btn-primary">Editar Gasto</a>
		    </p>
	    <hr>
	@endforeach
@endsection

@section('scripts')
	@parent
	{!! Html::script('assets/js/jquery-2.1.4.min.js') !!}
@endsection