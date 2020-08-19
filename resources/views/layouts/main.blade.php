<!doctype html>
<html lang="en">

<head>
	<title>QRCode Apps</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">

    
</head>

<body>
	@if (Auth::check())

		<!-- WRAPPER -->
		<div id="wrapper">
			<!-- NAVBAR -->
			@include('layouts.include.navbar')
			<!-- END NAVBAR -->
			<!-- LEFT SIDEBAR -->
			@include('layouts.include.sidebar')
			<!-- END LEFT SIDEBAR -->
			<div class="main">
				<!-- MAIN CONTENT -->
				<div class="main-content">
					<div class="container-fluid">
						<main class="py-4">
							@yield('content')
						</main>
					</div>
				</div>
		<!-- END MAIN CONTENT -->
			</div>
			<!-- END MAIN -->
			<div class="clearfix"></div>
			<footer>
				<div class="container-fluid">
					{{-- <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p> --}}
				</div>
			</footer>
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
		<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
		
		
		<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<!-- Scripts -->
		<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}" ></script>
		<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}" ></script>
		<script src="{{ asset('js/app.js') }}" defer></script>
		
		
		
	
	@else
		<?php
			// header('Location: http://01659440.dyn.cbn.net.id:8815/login');

			die();
		?>
	@endif
</body>

</html>
