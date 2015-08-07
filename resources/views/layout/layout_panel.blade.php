@extends('layout/layout')

@section('content_layout')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">@yield('title_panel')</div>
				<div class="panel-body">
					@yield('content_panel')
				</div>
			</div>
		</div>
	</div>
@endsection