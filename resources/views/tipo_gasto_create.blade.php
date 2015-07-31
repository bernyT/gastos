@extends('layout')

@section('content')

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Tipo Gasto</div>
				<div class="panel-body">
					{!! Form::open(array('route' => 'tipo_gasto_store', 'class' => 'form', 'method' => 'put')) !!}

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
				</div>
			</div>
		</div>
	</div>
	
@endsection