<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	{!! Html::style('assets/css/bootstrap.css') !!}

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>
<body>
	<div class="container">
		@yield('content_layout')
	</div>
	<!-- Scripts -->
		{!! Html::script('assets/js/jquery-2.1.4.min.js') !!}

		{!! Html::script('assets/js/bootstrap.min.js') !!}

	@section('scripts')
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	@endsection
</body>
</html>