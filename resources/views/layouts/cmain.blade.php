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
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
	
	
	
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" ></script>
  @yield('csscontent')
  <style type="text/css">
    input[type=file]{
      display: inline;
    }
    #image_preview {
      border: 1px solid black;
      padding: 10px;
    }
    #image_preview img{
      width: 200px;
      padding: 5px;
    }
    #image_preview1 {
      border: 1px solid black;
      padding: 10px;
    }
    #image_preview1 img{
      width: 200px;
      padding: 5px;
    }
  </style>
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
					{{-- <p class="copyright">&copy; 2017 <a href="https://www.abesehat.com" target="_blank">AbeSehat.com </a>. All Rights Reserved.</p> --}}
				</div>
			</footer>
		</div>
		<!-- END WRAPPER -->
		<!-- Javascript -->
		<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('admin/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
		<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>

		<script>
			function checkSes(){
				$.ajax({
					url:"/auth/checkSes",
					type:"GET",
					success:function(response) {
								var txt= response;
						if (txt != ""){
						if (txt.trim()=="OK"){
							window.location = "/login";
						}else{
							$("#loginModal").modal("toggle");
							document.getElementById("bodys").classList.remove("collapse");
						}
						}else{
						alert("timeout");
						document.getElementById("bodys").classList.remove("collapse");
						}
					},
					error:function(){
					alert("No Connection");
					document.getElementById("bodys").classList.remove("collapse");
					}
					});
			}
		</script>
		@yield('jscontent')
	
	@else
		<?php
			// header('Location: http://01659440.dyn.cbn.net.id:8815/login');

			die();
		?>
	@endif
</body>

</html>
