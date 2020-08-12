<?php 
$putih = "white";
$hitam = "rgba(84,84,84,1)";
$max_kel=count($keluarga);
$bcg_klg = 288 + ($max_kel * 106);
$pos_add = 1902 + $bcg_klg;

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @include('include.incdetail1')
  
  <style id="applicationStylesheet" type="text/css">
	#ID0202_Customer_Information_-_Data_Pribadi_2_Edit {
		display: none;
	}
	#ID0203_Customer_Information_-_Data_Usaha_2_Edit {
		display: none;
	}
	#ID0204_Customer_Information_-_Data_Kepemilikan_1_non_-_Edit {
		display: none;
	}

	#ID0205_Customer_Information_-_Data_Jaminan_1_non_-_Edit {
		display: none;
	}
	#ID0206_Customer_Information_-_Karakteristik_1_non_-_Edit {
		display: block;
	}
   .atas{
      position: fixed;
      width: 100%;
      height: 70px;
      background: rgba(43,185,201,1);
   }
   .atas1{
      position: fixed;
      top: 69px;
      left:0px;
      width: 100%;
      height: 70px;
      background:white;
   }
   #fon_24_wh{
      color: white;
      font-size:24px;
   }
   .awal{
      top:200px;
   }
   #Rectangle_241_bv {
      fill: rgba(255,255,255,1);
    }
    .Rectangle_241_bv {
      position: fixed;
      overflow: visible;
      width: 125px;
      height: 19px;
      left: 20px;
      top: 80px;
    }
    .garis_tebal{
      border-bottom: 5px solid white;
      border-bottom-width: 5px;
      margin-bottom: initial;
    }
    .garis_tipis{
      border-bottom: 2px solid white;
      border-bottom-width: 2px;
      margin-bottom: initial;
    }

    .edit_profile {
      width: 350px;
      background: white;
   }
   .edit_profile_1 {
      width: 150px;
      background: white;
   }

    /* --------------- */
    #Rectangle_332 {
      fill: {{$putih}};;
      /* fill: rgba(207,161,62,1); */
	}
	.Rectangle_332 {
		position: absolute;
		overflow: visible;
		width: 202px;
		height: 50px;
		left: 97px;
		top: 10px;
   }
   #Data_Pribadi {
		left: 97px;
		top: 15px;
		position: absolute;
		overflow: visible;
		width: 202px;
		white-space: nowrap;
		text-align: center;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
      /* color: rgba(255,255,255,1); */
      color: {{$hitam}};
	}
   #Rectangle_332_wj {
		fill: {{$putih}};
	}
	.Rectangle_332_wj {
		position: fixed;
      overflow: visible;
      width: 202px;
		height: 50px;
		left: 319px;
      top: 80px;

   }
   #Data_Usaha {
		left: 319px;
		top: 85px;
		position: fixed;
		overflow: visible;
      width: 202px;
      text-align: center;
		white-space: nowrap;
		/* --web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: datausaha; */
		cursor: pointer;
		text-align: center;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: {{$hitam}};
	}
	
   #Rectangle_332_yl {
		fill: {{$putih}};
	}
	.Rectangle_332_yl {
      position: fixed;
      overflow: visible;
      width: 202px;
		height: 50px;
		left: 551px;
      top: 80px;

		
   }
   #Data_Kepemilikan {
		left: 551px;
		top: 85px;
		position: fixed;
		overflow: visible;
      width: 202px;
      text-align: center;
		white-space: nowrap;
		/* --web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: datakepemilikan; */
		cursor: pointer;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: {{$hitam}};
	}
	
   #Rectangle_332_zw {
		fill: {{$putih}};
	}
	.Rectangle_332_zw {
		position: fixed;
      overflow: visible;
      width: 202px;
		height: 50px;
		left: 783px;
      top: 80px;
   }
   #Data_Jaminan {
		left: 783px;
		top: 85px;
		position: fixed;
		overflow: visible;
      width: 202px;
      text-align: center;
		white-space: nowrap;
		/* --web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: datajaminan; */
		cursor: pointer;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: {{$hitam}};
	}
   #Rectangle_332_ {
		fill: {{$putih}};
	}
	.Rectangle_332_ {
		position: fixed;
      overflow: visible;
      width: 222px;
		height: 50px;
		left: 1015px;
      top: 80px;
   }
   
   
	
	#Karakteristik {
		left: 1015px;
		top: 85px;
		position: fixed;
		overflow: visible;
      width: 202px;
      text-align: center;
		white-space: nowrap;
		/* --web-animation: fadein undefineds undefined;
		--web-action-type: page;
		--web-action-target: karakteristik; */
		cursor: pointer;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: {{$hitam}};
   }
   
  </style>
</head>
<body class="hold-transition sidebar-mini">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light atas">
   <!-- Left navbar links -->
   <!-- <div class="atas"> -->
      <ul class="navbar-nav">
      
         <li class="nav-item d-none d-sm-inline-block" >
            <a href="/dashboard1" class="nav-link" id="fon_24_wh">Dashboard/</a>
         </li>
         <li class="nav-item d-none d-sm-inline-block" >
            <a href="#" class="nav-link" id="fon_24_wh">Customer Information/</a>
         </li>
         
         <li class="nav-item d-none d-sm-inline-block" id="garis_tipis">
            <a href="#" class="nav-link atas" id="fon_24_wh">{{$pilcompany}}</a>
         </li>
         </ul>
         <ul class="navbar-nav ml-auto">
         <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="top: 20px;height: 75px;">
            <span id="fon_24_wh">{{$user->fullname}}</span>
            <div class="image" style="
               margin-right: 59px;
               margin-left: 10px;
            ">
               <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
         </div>
      </ul>
   <div class="atas1">

   
    

    <!-- <div id="Group_763"> -->
			<svg class="Rectangle_332" >
				<rect id="Rectangle_332" rx="25" ry="25" x="0" y="0" width="202" height="50" >
				</rect>
			</svg>

			<a onclick="myFunction(1)"  id="Data_Pribadi" >
				<span>Data Pribadi</span>
			</a>
         

		<svg class="Rectangle_332_wj">
			<rect id="Rectangle_332_wj" rx="25" ry="25" x="0" y="0" width="202" height="50">
			</rect>
		</svg>
		<a onclick="myFunction(2)" id="Data_Usaha">
			<span>Data Usaha</span>
		</a>
		<svg class="Rectangle_332_yl">
			<rect id="Rectangle_332_yl" rx="25" ry="25" x="0" y="0" width="202" height="50">
			</rect>
		</svg>
		<a onclick="myFunction(3)"  id="Data_Kepemilikan">
			<span>Data Kepemilikan</span>
		</a>
		<svg class="Rectangle_332_zw">
			<rect id="Rectangle_332_zw" rx="25" ry="25" x="0" y="0" width="202" height="50">
			</rect>
		</svg>
		<a onclick="myFunction(4)" id="Data_Jaminan">
			<span>Data Jaminan</span>
		</a>
		<svg class="Rectangle_332_">
			<rect id="Rectangle_332_" rx="25" ry="25" x="0" y="0" width="202" height="50">
			</rect>
		</svg>
		<a onclick="myFunction(5)" id="Karakteristik">
			<span>Karakteristik</span>
		</a>
   </div>
</nav>

<!-- /.navbar -->

  <!-- Main Sidebar Container -->
<div class="wrapper awal" style="
    top: 150px;"
>
   

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
         <div class="row">
            <div id="ID0202_Customer_Information_-_Data_Pribadi_2_Edit">
               @include('menudetail_pribadi')
            </div>
            <div id="ID0203_Customer_Information_-_Data_Usaha_2_Edit">
               @include('menudetail_usaha')
            </div>
            <div id="ID0204_Customer_Information_-_Data_Kepemilikan_1_non_-_Edit">
               @include('menudetail_kepemilikan')
            </div>
            <div id="ID0205_Customer_Information_-_Data_Jaminan_1_non_-_Edit">
               @include('menudetail_jaminan')
            </div>
            <div id="ID0206_Customer_Information_-_Karakteristik_1_non_-_Edit">
               @include('menudetail_karakteristik')
            </div>


            

         <!-- /.col -->
         </div>
         <!-- /.row -->
      </section>
      <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
  

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
function myFunction(id) {
	if (id===1){
		document.getElementById("ID0202_Customer_Information_-_Data_Pribadi_2_Edit").style.display = "block";
		document.getElementById("ID0203_Customer_Information_-_Data_Usaha_2_Edit").style.display = "none";
		document.getElementById("ID0204_Customer_Information_-_Data_Kepemilikan_1_non_-_Edit").style.display = "none";
		document.getElementById("ID0205_Customer_Information_-_Data_Jaminan_1_non_-_Edit").style.display = "none";
		document.getElementById("ID0206_Customer_Information_-_Karakteristik_1_non_-_Edit").style.display = "none";
	} else if (id===2){
		document.getElementById("ID0202_Customer_Information_-_Data_Pribadi_2_Edit").style.display = "none";
		document.getElementById("ID0203_Customer_Information_-_Data_Usaha_2_Edit").style.display = "block";
		document.getElementById("ID0204_Customer_Information_-_Data_Kepemilikan_1_non_-_Edit").style.display = "none";
		document.getElementById("ID0205_Customer_Information_-_Data_Jaminan_1_non_-_Edit").style.display = "none";
		document.getElementById("ID0206_Customer_Information_-_Karakteristik_1_non_-_Edit").style.display = "none";
	} else if (id===3){
		document.getElementById("ID0202_Customer_Information_-_Data_Pribadi_2_Edit").style.display = "none";
		document.getElementById("ID0203_Customer_Information_-_Data_Usaha_2_Edit").style.display = "none";
		document.getElementById("ID0204_Customer_Information_-_Data_Kepemilikan_1_non_-_Edit").style.display = "block";
		document.getElementById("ID0205_Customer_Information_-_Data_Jaminan_1_non_-_Edit").style.display = "none";
		document.getElementById("ID0206_Customer_Information_-_Karakteristik_1_non_-_Edit").style.display = "none";
	} else if (id===4){
		document.getElementById("ID0202_Customer_Information_-_Data_Pribadi_2_Edit").style.display = "none";
		document.getElementById("ID0203_Customer_Information_-_Data_Usaha_2_Edit").style.display = "none";
		document.getElementById("ID0204_Customer_Information_-_Data_Kepemilikan_1_non_-_Edit").style.display = "none";
		document.getElementById("ID0205_Customer_Information_-_Data_Jaminan_1_non_-_Edit").style.display = "block";
		document.getElementById("ID0206_Customer_Information_-_Karakteristik_1_non_-_Edit").style.display = "none";
	} else {
		document.getElementById("ID0202_Customer_Information_-_Data_Pribadi_2_Edit").style.display = "none";
		document.getElementById("ID0203_Customer_Information_-_Data_Usaha_2_Edit").style.display = "none";
		document.getElementById("ID0204_Customer_Information_-_Data_Kepemilikan_1_non_-_Edit").style.display = "none";
		document.getElementById("ID0205_Customer_Information_-_Data_Jaminan_1_non_-_Edit").style.display = "none";
		document.getElementById("ID0206_Customer_Information_-_Karakteristik_1_non_-_Edit").style.display = "block";
	}
  
}
</script>

</body>
</html>
