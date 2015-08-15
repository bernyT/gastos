@extends('layout/layout_panel')

@include('layout/layout_navbar')

@section('title_panel')
{!!$title_panel!!}
@endsection

@section('content_panel')
	{!! Form::open(array('route' => 'gasto_store', 'class' => 'form', 'method' => 'put')) !!}
		<div class="form-group">
			{!! Form::label('Gasto') !!}
			{!! Form::select('id_tipo gasto',
				$tipo_gasto,null,
			    array('required', 'class'=>'form-control')) !!}
		</div>
		<div class="form-group">
			{!! Form::label('Importe') !!}
			{!! Form::number('importe', null,
				array('required', 'class'=>'form-control',
				'placeholder'=>'importe')) !!}
		</div>

		@if ($instantanea === false)
			<div class="form-group">
				{!! Form::label('Fecha vencimineto') !!}
				{!! Form::date('fecha_vencimineto', null,
					array('class'=>'form-control',
					'placeholder'=>'fecha vencimiento')) !!}
			</div>
		@else
			<div class="form-group">
				{!! Form::hidden('pagado', 'true') !!}
			</div>			
		@endif

		<div class="form-group">
			{!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
		</div>
	{!! Form::close() !!}		
@endsection