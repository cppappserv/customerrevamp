<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style id="applicationStylesheet" type="text/css">
	    a { text-decoration: none; }
       #Rectangle_241_bv {
      fill: rgba(255,255,255,1);
    }
    .Rectangle_241_bv {
      position: fixed;
      overflow: visible;
      width: 125px;
      height: 2px;
      left: 194px;
      top: 80px;
   }
   #Path_130_b {
		fill: rgba(255,255,255,1);
	}
	.Path_130_b {
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
		overflow: visible;
		position: absolute;
		width: 632px;
		height: 166.697px;
		left: 0.001px;
		top: 110px;
		transform: matrix(1,0,0,1,0,0);
	}

   #Intersection_29 {
		fill: rgba(51,122,183,1);
	}
	.Intersection_29 {
		overflow: visible;
		position: absolute;
		width: 224.002px;
		height: 148.699px;
		left: 0px;
		top: 110px;
		transform: matrix(1,0,0,1,0,0);
	}

   #Customer_ba {
		left: 73.001px;
		top: 210px;
		position: absolute;
		overflow: visible;
		width: 105px;
		white-space: nowrap;
		text-align: center;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#ID1201_b {
		left: 28.001px;
		top: 130px;
		position: absolute;
		overflow: visible;
		width: 161px;
		white-space: nowrap;
		text-align: center;
		font-family: Roboto;
		font-style: normal;
		font-weight: bold;
		font-size: 64px;
		color: rgba(255,255,255,1);
		letter-spacing: -0.25px;
	}
	#CPB__PT_Central_Pertiwi_Bahari {
		left: 263.001px;
		top: 155px;
		position: absolute;
		overflow: visible;
		width: 270px;
		white-space: nowrap;
		text-align: left;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(84,84,84,1);
	}
   #Select_Company {
		left: 60px;
		top: 10px;
		position: absolute;
		overflow: visible;
		width: 292px;
		white-space: nowrap;
		text-align: left;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 40px;
		color: rgba(84,84,84,1);
	}

   #Rectangle_242_b {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_242_b {
		position: absolute;
		overflow: visible;
		width: 1366px;
		height: 257px;
		left: 0px;
		top: 79px;
	}
   #Rectangle_248_b {
		fill: rgba(51,122,183,1);
	}
	.Rectangle_248_b {
		position: absolute;
		overflow: visible;
		width: 106px;
		height: 13px;
		left: 60px;
		top: 65px;
	}

   #Path_130_b_2 {
		fill: rgba(255,255,255,1);
	}
	.Path_130_b_2 {
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
		overflow: visible;
		position: absolute;
		width: 632px;
		height: 166.697px;
		left: 0.001px;
		top: 285px;
		transform: matrix(1,0,0,1,0,0);
	}

   #Intersection_29_2 {
		fill: rgba(51,122,183,1);
	}
	.Intersection_29_2 {
		overflow: visible;
		position: absolute;
		width: 224.002px;
		height: 148.699px;
		left: 0px;
		top: 285px;
		transform: matrix(1,0,0,1,0,0);
	}

   #Customer_ba_2 {
		left: 73.001px;
		top: 380px;
		position: absolute;
		overflow: visible;
		width: 105px;
		white-space: nowrap;
		text-align: center;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#ID1201_b_2 {
		left: 28.001px;
		top: 300px;
		position: absolute;
		overflow: visible;
		width: 161px;
		white-space: nowrap;
		text-align: center;
		font-family: Roboto;
		font-style: normal;
		font-weight: bold;
		font-size: 64px;
		color: rgba(255,255,255,1);
		letter-spacing: -0.25px;
	}
	#CPB__PT_Central_Pertiwi_Bahari_2 {
		left: 263.001px;
		top: 310px;
		position: absolute;
		overflow: visible;
		width: 270px;
		white-space: nowrap;
		text-align: left;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(84,84,84,1);
	}
   #Path_130_b_3 {
		fill: rgba(255,255,255,1);
	}
	.Path_130_b_3 {
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
		overflow: visible;
		position: absolute;
		width: 632px;
		height: 166.697px;
		left: 0.001px;
		top: 460px;
		transform: matrix(1,0,0,1,0,0);
	}

   #Intersection_29_3 {
		fill: rgba(51,122,183,1);
	}
	.Intersection_29_3 {
		overflow: visible;
		position: absolute;
		width: 224.002px;
		height: 148.699px;
		left: 0px;
		top: 460px;
		transform: matrix(1,0,0,1,0,0);
	}

   #Customer_ba_3 {
		left: 73.001px;
		top: 550px;
		position: absolute;
		overflow: visible;
		width: 105px;
		white-space: nowrap;
		text-align: center;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#ID1201_b_3 {
		left: 28.001px;
		top: 470px;
		position: absolute;
		overflow: visible;
		width: 161px;
		white-space: nowrap;
		text-align: center;
		font-family: Roboto;
		font-style: normal;
		font-weight: bold;
		font-size: 64px;
		color: rgba(255,255,255,1);
		letter-spacing: -0.25px;
	}
	#CPB__PT_Central_Pertiwi_Bahari_3 {
		left: 263.001px;
		top: 465px;
		position: absolute;
		overflow: visible;
		width: 270px;
		white-space: nowrap;
		text-align: left;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(84,84,84,1);
	}

   #Path_130_b_4 {
		fill: rgba(255,255,255,1);
	}
	.Path_130_b_4 {
		filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
		overflow: visible;
		position: absolute;
		width: 632px;
		height: 166.697px;
		left: 0.001px;
		top: 635px;
		transform: matrix(1,0,0,1,0,0);
	}

   #Intersection_29_4 {
		fill: rgba(51,122,183,1);
	}
	.Intersection_29_4 {
		overflow: visible;
		position: absolute;
		width: 224.002px;
		height: 148.699px;
		left: 0px;
		top: 635px;
		transform: matrix(1,0,0,1,0,0);
	}

   #Customer_ba_4 {
		left: 73.001px;
		top: 720px;
		position: absolute;
		overflow: visible;
		width: 105px;
		white-space: nowrap;
		text-align: center;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(255,255,255,1);
	}
	#ID1201_b_4 {
		left: 28.001px;
		top: 640px;
		position: absolute;
		overflow: visible;
		width: 161px;
		white-space: nowrap;
		text-align: center;
		font-family: Roboto;
		font-style: normal;
		font-weight: bold;
		font-size: 64px;
		color: rgba(255,255,255,1);
		letter-spacing: -0.25px;
	}
	#CPB__PT_Central_Pertiwi_Bahari_4 {
		left: 263.001px;
		top: 620px;
		position: absolute;
		overflow: visible;
		width: 270px;
		white-space: nowrap;
		text-align: left;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(84,84,84,1);
	}
	#form02kotak{
		padding-left: 0px;
		padding-top: 0px;
		/* padding-bottom: 0px; */
		height: 152px;
	}	
	#form02kotak2 {
		border-top-right-radius: 38px 76px; 
		border-bottom-right-radius: 38px 76px; 
		width: 40%;
		}
		#font24{
			font-size: 24px;
		}
		#showtext{
			display: flex;
			align-items: center;
		}
  </style>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light"
  style="
      margin-left: 0px;
      position: fixed;
      background-color: rgba(43,185,201,1);
      top: 0;
      width: 100%;
      font-size: 24px;
      height: 100px
      /* z-index:0; */
    ">
    <!-- Left navbar links -->
    <ul class="navbar-nav" >
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard1" class="nav-link"  style="color: white;font-size: 28px;">Dashboard /</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"  style="color: white;font-size: 28px;">{{ $pilcompany }}</a>
      </li>
    </ul>

    
    <ul class="navbar-nav ml-auto">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="top: 20px;height: 75px;">
          <span style="color: white;font-size: 28px;">{{$user->fullname}}</span>
          <div class="image" style="
            margin-right: 59px;
            margin-left: 10px;
          ">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
        </div>
    </ul>
    <svg class="Rectangle_241_bv">
      <rect id="Rectangle_241_bv" rx="10" ry="10" x="0" y="0" width="125" height="5">
      </rect>
    </svg>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"style="
    margin-left: 0px;
    margin-top: 99px;">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">
	 <div class="container-fluid">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">Select Company</h1>
						<!-- <svg class="Rectangle_248_b">
						<rect id="Rectangle_248_b" rx="0" ry="0" x="0" y="0" width="106" height="13">
						</rect>
					</svg> -->
					</div><!-- /.col -->
					
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		
      <div class="container-fluid">
         
        <!-- Small boxes (Stat box) -->

			<div class="row">
				

		  

		  

        
        <?php
        $max=count($percompany);
        for($i=0; $i<$max; $i++){
				$info = $percompany[$i]->info;
				$des = $percompany[$i]->des;
				$des2 = $percompany[$i]->des2;
				$des3 = $percompany[$i]->des3;
				$ttl = number_format($percompany[$i]->ttl);

          switch  ($i){
            case 0  : $warna = "#337ab7"; break;
            case 1  : $warna = "#d63f3f;"; break;
            case 2  : $warna = "#37b733"; break;
            case 3  : $warna = "#f5b443"; break;
            case 4  : $warna = "#9e33b7"; break;
            case 5  : $warna = "#cad620"; break;
            case 6  : $warna = "#2bb9c9"; break;
            case 7  : $warna = "#4d6ab8"; break;
            case 8  : $warna = "#00a76e"; break;
            case 9  : $warna = "#337ab7"; break;
            case 10 : $warna = "#d63f3f"; break;
            case 11 : $warna = "#37b733"; break;
          }
          
            ?>
              <div class="col-md-6 col-sm-6 col-12">
					<a href="/subcompany1/{{$pilcompany}}/{{$info}}">
						<div class="info-box" id="form02kotak">
							<span class="info-box-icon bg-info text" id="form02kotak2"
							style="background-color: {{$warna}}!important;">
							{{ $ttl }}<br>
							Customer
							</span>
							
							<div class="info-box-content" id="showtext">
								<span id="font24" style="color:black;">
								{{ $des }}<br/>{{ $des2}}<br/>{{ $des3}}
								</span>

							</div>
								
							<!-- /.info-box-content -->
						</div>
					</a>
					<!-- /.info-box -->
				</div>
            <?php
          } 
    ?>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{asset('dist/js/pages/dashboard.js')}}"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>
