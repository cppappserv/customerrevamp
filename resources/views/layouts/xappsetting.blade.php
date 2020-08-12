<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>0300 Setting</title>
<link rel="stylesheet" type="text/css" href="css/header.css">
@yield('cssadd')
</head>
<body>
@include('layouts.appuser')
<!-- <div id="ID0300_Setting">
	<svg class="Rectangle_242_cgt">
		<rect id="Rectangle_242_cgt" rx="0" ry="0" x="0" y="0" width="1366" height="189">
		</rect>
	</svg>
	<div id="Group_399_cgu">
		<div id="Welcome_Aditya_Yudha_cgv">
			<span>Welcome</span><span style="font-style:normal;font-weight:normal;">, </span><span style="font-style:normal;font-weight:normal;color:rgba(56,154,198,1);">{{ $user->fullname }}!</span>
		</div>
	</div>
	<svg class="Rectangle_43_cgx">
		<linearGradient id="Rectangle_43_cgx" spreadMethod="pad" x1="0.674" x2="0.397" y1="1.977" y2="-1.213">
			<stop offset="0" stop-color="#3c8dbc" stop-opacity="1"></stop>
			<stop offset="1" stop-color="#6fbce6" stop-opacity="1"></stop>
		</linearGradient>
		<rect id="Rectangle_43_cgx" rx="0" ry="0" x="0" y="0" width="1366" height="99">
		</rect>
	</svg>
	<div id="Aditya_Yudha_cg">
		<span>{{ $user->fullname }}</span>
	</div> -->
	
	
	
   @yield('content')
	@yield('jsadd')
</div>
</body>
</html>