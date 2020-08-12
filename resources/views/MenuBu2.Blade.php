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
         <div class="row">
            <div id="Select_Company">
               <span>Select Company</span>
            </div>
            <svg class="Rectangle_248_b">
               <rect id="Rectangle_248_b" rx="0" ry="0" x="0" y="0" width="106" height="13">
               </rect>
            </svg>
         </div>
        <!-- Small boxes (Stat box) -->
        
        <?php
        $max=count($percompany);
        for($i=0; $i<$max; $i++){
           $des = $percompany[$i]->des;
           $des2 = $percompany[$i]->des2;
           $des3 = $percompany[$i]->des3;
           $ttl = number_format($percompany[$i]->ttl);
          if ($i==0){
            ?>
            <div class="row">
            <?php
          } else if ($i==6){
            ?>
            </div>
            <div class="row">
            <?php
          }
          switch  ($i){
            case 0  : $warna = "rgba(51,122,183,1)"; break;
            case 1  : $warna = "rgba(214,63,63,1);"; break;
            case 2  : $warna = "rgba(55,183,51,1)"; break;
            case 3  : $warna = "rgba(245,180,67,1)"; break;
            case 4  : $warna = "rgba(158,51,183,1)"; break;
            case 5  : $warna = "rgba(202,214,32,1)"; break;
            case 6  : $warna = "rgba(43,185,201,1)"; break;
            case 7  : $warna = "rgba(77,106,184,1)"; break;
            case 8  : $warna = "rgba(0,167,110,1)"; break;
            case 9  : $warna = "rgba(51,122,183,1)"; break;
            case 10 : $warna = "rgba(214,63,63,1)"; break;
            case 11 : $warna = "rgba(55,183,51,1)"; break;
          }
          if ($i>=0 && $i<2){
            ?>
              <div class="col-lg-6 col-2">
              <a href="/subcompany/{{$pilcompany}}/{{$des}}" id="Group_780">
				<svg class="Path_130_b" viewBox="0 0 614 148.697">
					<path id="Path_130_b" style="" d="M 20.53511810302734 0 L 593.4649658203125 0 C 604.80615234375 0 614 2.023526906967163 614 4.519673347473145 L 614 144.1775970458984 C 614 146.6737365722656 604.80615234375 148.697265625 593.4649658203125 148.697265625 L 20.53511810302734 148.697265625 C 9.19388484954834 148.697265625 0 146.6737365722656 0 144.1775970458984 L 0 4.519673347473145 C 0 2.023526906967163 9.19388484954834 0 20.53511810302734 0 Z">
					</path>
				</svg>
				<svg class="Intersection_29" viewBox="11889.999 14082.842 224.002 148.699">
					<path id="Intersection_29" style="fill:{{$warna}};" d="M 11910.5341796875 14231.541015625 C 11901.001953125 14231.541015625 11892.984375 14230.1103515625 11890.6708984375 14228.1728515625 C 11890.455078125 14227.8681640625 11890.2392578125 14227.5615234375 11890.025390625 14227.2548828125 C 11890.0078125 14227.177734375 11889.9990234375 14227.1005859375 11889.9990234375 14227.0224609375 L 11889.9990234375 14087.361328125 C 11889.9990234375 14084.8662109375 11899.1953125 14082.841796875 11910.5341796875 14082.841796875 L 12089.138671875 14082.841796875 C 12104.7421875 14103.4599609375 12114.0009765625 14129.1513671875 12114.0009765625 14157.001953125 C 12114.0009765625 14185.025390625 12104.630859375 14210.8583984375 12088.849609375 14231.541015625 L 11910.5341796875 14231.541015625 Z">
					</path>
				</svg>
				<div id="Customer_ba">
					<span>Customer</span>
				</div>
				<div id="ID1201_b">
					<span>{{ $ttl }}</span>
				</div>
				<div id="CPB__PT_Central_Pertiwi_Bahari">
				<span>{{ $des }}<br/>{{ $des2}}<br/>{{ $des3}}</span>
				</div>
			<!-- </div> -->
			</a>
              </div>
            <?php
          } else if ($i>=2 && $i<4){
            ?>
              <div class="col-lg-6 col-2">
              <a href="/subcompany/{{$pilcompany}}/{{$des}}" id="Group_780">
				<svg class="Path_130_b_2" viewBox="0 0 614 148.697">
					<path id="Path_130_b_2" d="M 20.53511810302734 0 L 593.4649658203125 0 C 604.80615234375 0 614 2.023526906967163 614 4.519673347473145 L 614 144.1775970458984 C 614 146.6737365722656 604.80615234375 148.697265625 593.4649658203125 148.697265625 L 20.53511810302734 148.697265625 C 9.19388484954834 148.697265625 0 146.6737365722656 0 144.1775970458984 L 0 4.519673347473145 C 0 2.023526906967163 9.19388484954834 0 20.53511810302734 0 Z">
					</path>
				</svg>
				<svg class="Intersection_29_2" viewBox="11889.999 14082.842 224.002 148.699">
					<path id="Intersection_29_2" style="fill:{{$warna}};" d="M 11910.5341796875 14231.541015625 C 11901.001953125 14231.541015625 11892.984375 14230.1103515625 11890.6708984375 14228.1728515625 C 11890.455078125 14227.8681640625 11890.2392578125 14227.5615234375 11890.025390625 14227.2548828125 C 11890.0078125 14227.177734375 11889.9990234375 14227.1005859375 11889.9990234375 14227.0224609375 L 11889.9990234375 14087.361328125 C 11889.9990234375 14084.8662109375 11899.1953125 14082.841796875 11910.5341796875 14082.841796875 L 12089.138671875 14082.841796875 C 12104.7421875 14103.4599609375 12114.0009765625 14129.1513671875 12114.0009765625 14157.001953125 C 12114.0009765625 14185.025390625 12104.630859375 14210.8583984375 12088.849609375 14231.541015625 L 11910.5341796875 14231.541015625 Z">
					</path>
				</svg>
				<div id="Customer_ba_2">
					<span>Customer</span>
				</div>
				<div id="ID1201_b_2">
					<span>{{ $ttl }}</span>
				</div>
				<div id="CPB__PT_Central_Pertiwi_Bahari_2">
				<span>{{ $des }}<br/>{{ $des2}}<br/>{{ $des3}}</span>
				</div>
			<!-- </div> -->
			</a>
              </div>
            <?php
          } else if ($i>=4 && $i<6){
            ?>
              <div class="col-lg-6 col-3">
              <a href="/subcompany/{{$pilcompany}}/{{$des}}" id="Group_780">
				<svg class="Path_130_b_3" viewBox="0 0 614 148.697">
					<path id="Path_130_b_3" d="M 20.53511810302734 0 L 593.4649658203125 0 C 604.80615234375 0 614 2.023526906967163 614 4.519673347473145 L 614 144.1775970458984 C 614 146.6737365722656 604.80615234375 148.697265625 593.4649658203125 148.697265625 L 20.53511810302734 148.697265625 C 9.19388484954834 148.697265625 0 146.6737365722656 0 144.1775970458984 L 0 4.519673347473145 C 0 2.023526906967163 9.19388484954834 0 20.53511810302734 0 Z">
					</path>
				</svg>
				<svg class="Intersection_29_3" viewBox="11889.999 14082.842 224.002 148.699">
					<path id="Intersection_29_3" style="fill:{{$warna}};" d="M 11910.5341796875 14231.541015625 C 11901.001953125 14231.541015625 11892.984375 14230.1103515625 11890.6708984375 14228.1728515625 C 11890.455078125 14227.8681640625 11890.2392578125 14227.5615234375 11890.025390625 14227.2548828125 C 11890.0078125 14227.177734375 11889.9990234375 14227.1005859375 11889.9990234375 14227.0224609375 L 11889.9990234375 14087.361328125 C 11889.9990234375 14084.8662109375 11899.1953125 14082.841796875 11910.5341796875 14082.841796875 L 12089.138671875 14082.841796875 C 12104.7421875 14103.4599609375 12114.0009765625 14129.1513671875 12114.0009765625 14157.001953125 C 12114.0009765625 14185.025390625 12104.630859375 14210.8583984375 12088.849609375 14231.541015625 L 11910.5341796875 14231.541015625 Z">
					</path>
				</svg>
				<div id="Customer_ba_3">
					<span>Customer</span>
				</div>
				<div id="ID1201_b_3">
					<span>{{ $ttl }}</span>
				</div>
				<div id="CPB__PT_Central_Pertiwi_Bahari_3">
				<span>{{ $des }}<br/>{{ $des2}}<br/>{{ $des3}}</span>
				</div>
			<!-- </div> -->
			</a>
              </div>
            <?php
          } else if ($i>=6 && $i<8){
            ?>
              <div class="col-lg-6 col-3">
              <a href="/subcompany/{{$pilcompany}}/{{$des}}" id="Group_780">
				<svg class="Path_130_b_4" viewBox="0 0 614 148.697">
					<path id="Path_130_b_4" d="M 20.53511810302734 0 L 593.4649658203125 0 C 604.80615234375 0 614 2.023526906967163 614 4.519673347473145 L 614 144.1775970458984 C 614 146.6737365722656 604.80615234375 148.697265625 593.4649658203125 148.697265625 L 20.53511810302734 148.697265625 C 9.19388484954834 148.697265625 0 146.6737365722656 0 144.1775970458984 L 0 4.519673347473145 C 0 2.023526906967163 9.19388484954834 0 20.53511810302734 0 Z">
					</path>
				</svg>
				<svg class="Intersection_29_4" viewBox="11889.999 14082.842 224.002 148.699">
					<path id="Intersection_29_4" style="fill:{{$warna}};" d="M 11910.5341796875 14231.541015625 C 11901.001953125 14231.541015625 11892.984375 14230.1103515625 11890.6708984375 14228.1728515625 C 11890.455078125 14227.8681640625 11890.2392578125 14227.5615234375 11890.025390625 14227.2548828125 C 11890.0078125 14227.177734375 11889.9990234375 14227.1005859375 11889.9990234375 14227.0224609375 L 11889.9990234375 14087.361328125 C 11889.9990234375 14084.8662109375 11899.1953125 14082.841796875 11910.5341796875 14082.841796875 L 12089.138671875 14082.841796875 C 12104.7421875 14103.4599609375 12114.0009765625 14129.1513671875 12114.0009765625 14157.001953125 C 12114.0009765625 14185.025390625 12104.630859375 14210.8583984375 12088.849609375 14231.541015625 L 11910.5341796875 14231.541015625 Z">
					</path>
				</svg>
				<div id="Customer_ba_4">
					<span>Customer</span>
				</div>
				<div id="ID1201_b_4">
					<span>{{ $ttl }}</span>
				</div>
				<div id="CPB__PT_Central_Pertiwi_Bahari_4">
				<span>{{ $des }}<br/>{{ $des2}}<br/>{{ $des3}}</span>
				</div>
			<!-- </div> -->
			</a>
              </div>
            <?php
          } 
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
