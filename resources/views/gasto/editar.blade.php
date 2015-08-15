	@extends('layout/layout_panel')

	@include('layout/layout_navbar')

	@section('title_panel')
		{!!$title_panel!!}
	@endsection

	@section('content_panel')	
		{!! Form::model($gasto, array('route' => ['gasto_update', $gasto['gasto_id']], 'class' => 'form', 'method' => 'patch')) !!}
			<div class="form-group">
			    {!! Form::label('Gasto') !!}
			    {!! Form::select('id_tipo gasto',
			     $tipo_gasto, $gasto['id_tipo_gasto'],
			     array('required', 'class'=>'form-control')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Importe') !!}
			    {!! Form::number('importe', null,
			      array('required', 'class'=>'form-control',
			      'placeholder'=>'importe')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Fecha vencimineto') !!}
			    {!! Form::date('fecha_vencimineto', null,
			      array('required', 'class'=>'form-control',
			      'placeholder'=>'fecha vencimiento')) !!}

			</div>
			<div class="form-group">
			    {!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
			</div>
			{!! Form::close() !!}
	@endsection

	@section('scripts')
		@parent
		{!! Html::script('assets/js/jquery-2.1.4.min.js') !!}
	@endsection