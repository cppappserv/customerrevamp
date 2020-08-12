<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>0200 Dashboard</title>
<link rel="stylesheet" type="text/css" href="css/header.css">
<style>
	a { text-decoration: none; }
</style>

@yield('cssadd')

</head>
<body>
		@include('layouts.appuser')
   
		<!-- <div id="Dashboard_bt">
			<span>Dashboard</span>
		</div>
		<div onclick="application.goToTargetView(event)" id="Setting_bu">
			<span>Setting</span>
		</div> -->

      @yield('content')

	@yield('jsadd')
</body>
</html>