<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Arsip Negara</title>

		<link href="{{ asset('bootstrap_4_0_0/dist/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{ asset('css/style.css') }}" rel="stylesheet">

		<!--[if lt IE 9]>
			<script src="{{ asset('http://localhost/try/public/js/html5shiv.min.js') }}"></script>
			<script src="{{ asset('http://localhost/try/public/js/respond.min.js') }}"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">	
			@include('navbar')
			@yield('main')
		</div>
		
		
		@yield('footer')

	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('bootstrap_4_0_0/dist/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/laravelapp.js')}}"></script>
</body>
</html>
