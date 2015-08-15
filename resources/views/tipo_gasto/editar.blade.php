@extends('layout/layout_panel')

@include('layout/layout_navbar')

@section('title_panel')
	Edicion
@endsection

@section('content_panel')	
	{!! Form::model($gasto, array('route' => ['tipo_gasto_update', $gasto->id], 'class' => 'form', 'method' => 'patch')) !!}
		<div class="form-group">
		    {!! Form::label('Nombre') !!}
		    {!! Form::text('nombre', null,
			      array('required', 'class'=>'form-control',
		            'placeholder'=>'Nombre')) !!}
		</div>
		<div class="form-group">
		    {!! Form::label('Descripcion') !!}
		    {!! Form::text('descripcion', null,
		      array('required', 'class'=>'form-control',
		      'placeholder'=>'Descripcion')) !!}
		</div>
		<div class="form-group">
		    {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
		</div>
	{!! Form::close() !!}
@endsection