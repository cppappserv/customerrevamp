<?php 
$putih = "white";
$hitam = "rgba(84,84,84,1)";
// $max_kel=count($keluarga);
// $bcg_klg = 288 + ($max_kel * 106);
// $pos_add = 1902 + $bcg_klg;

$disp1="display:none;";
$disp2="display:none;";
$disp3="display:none;";
$disp4="display:none;";
$disp5="display:none;";
if ($pos=0 or $pos=1){
	$disp1="display:block;";
} else if ($pos=2){
	$disp2="display:block;";
} else if ($pos=3){		
	$disp3="display:block;";
} else if ($pos=4){	
	$disp4="display:block;";
} else {	
	$disp5="display:block;";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.7 Autocomplete Search using Bootstrap Typeahead JS - ItSolutionStuff.com</title>

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
		
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> -->


	<style type="text/css">
        input[type=file]{
        display: inline;
		  opacity:0 
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


	<style id="applicationStylesheet" type="text/css">
	/* #custom-content-below-home-tab {
		display: none;
	}
	#custom-content-below-profile-tab {
		display: none;
	}
	#custom-content-below-messages-tabt {
		display: none;
	}

	#custom-content-below-settings-tab {
		display: none;
	}
	#custom-content-below-karakteristik-tab {
		display: block;
	} */
   .atas{
      position: fixed;
      width: 100%;
      height: 100px;
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
	#Rectangle_322_sh {
		fill: rgba(149,149,149,1);
	}
	.Rectangle_322_sh {
		position: absolute;
		overflow: visible;
		width: 41px;
		height: 39px;
		left: 0px;
		top: 0px;
	}
	img {
		border-radius: 50%;
	}
   #fon_24_wh{
      color: white;
      font-size:24px;
   }
	.font_21 {
    font-size: 21px;
	 position: relative;
	 margin: auto;left:0;right:0;top:0; bottom:0;
	 height:80px;
	 margin: 0 auto;
	 top:50%;
	}

	#Sama_dengan_KTP_sg {
		left: 56px;
		top: 5.286px;
		position: absolute;
		overflow: visible;
		width: 198px;
		white-space: nowrap;
		text-align: left;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		color: rgba(84,84,84,1);
		padding-left: 200px;
    padding-top: 10px;
	}

	/* div.relative {
		position: relative;
		width: 700px;
		height: 80px;
		border: 2px solid blue;
  }   */
	
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
	#Line_117_sk {
		fill: transparent;
		stroke: rgba(255,255,255,1);
		stroke-width: 5px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Line_117_sk {
		overflow: visible;
		position: absolute;
		width: 18.535px;
		height: 18.535px;
		left: 6.522px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Path_123_sl {
		fill: rgba(0,0,0,0);
		stroke: rgba(255,255,255,1);
		stroke-width: 5px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Path_123_sl {
		overflow: visible;
		position: absolute;
		width: 13.058px;
		height: 13.058px;
		left: 0px;
		top: 5.478px;
		transform: matrix(1,0,0,1,0,0);
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
   .font36{
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 36px;
		color: rgba(51,122,183,1);
	}
	.kotakexcel{
		border: 20px;
    background: rgb(51 122 183);
    text-align: center;
    color: white;
    font-size: 24px;
    border-radius: 10px;
    padding-left: 10px;
	}
	.kotakexcel_kosong{
		border: 20px;
    background: white;
    text-align: center;
    border-color: black;
    font-size: 24px;
    border-radius: 10px;
    padding-left: 10px;
	}
	#atas_kosong{
		width: 95%;
    	border: none;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(84,84,84,1);
	}

	/* #atas_kosong :visited {
		background-color: white;
		width: 95%;
    	border: none;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: black;
	} */

	/* #atas_kosong :active {
		background-color: black;
		width: 95%;
    	border: none;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: white;
	}  */

	.cmd {
		border-radius: 24px;
		background: white; 
		/* rgba(84,84,84,1); */
		color: rgba(84,84,84,1);
		margin-left: 10px;
		height:50px;
		width: 90%;
	}
	.cmd2 {
		border-radius: 24px;
		background: rgba(207,161,62,1); 
		/* rgba(84,84,84,1); */
		color: white;
		margin-left: 10px;
		height:50px;
		width: 90%;
	}

	

#thing:hover {
   background-color: yellow
}
  </style>

	<script>
		$(document).ready(function(){
			$("#pil1").click(function(){
				$("pil1").show();
				$("pil2").hide();
				$("pil3").hide();
				$("pil4").hide();
				$("pil5").hide();
				$("pil11").show();
				$("pil12").show();
				$("pil13").show();
				$("pil14").show();
				$("pil15").show();
			});
			$("#pil2").click(function(){
				$("pil1").hide();
				$("pil2").show();
				$("pil3").hide();
				$("pil4").hide();
				$("pil5").hide();
				$("pil11").show();
				$("pil12").hide();
				$("pil13").show();
				$("pil14").show();
				$("pil15").show();
			});
			$("#pil3").click(function(){
				$("pil1").hide();
				$("pil2").hide();
				$("pil3").show();
				$("pil4").hide();
				$("pil5").hide();
				$("pil11").show();
				$("pil12").show();
				$("pil13").hide();
				$("pil14").show();
				$("pil15").show();
			});
			$("#pil4").click(function(){
				$("pil1").hide();
				$("pil2").hide();
				$("pil3").hide();
				$("pil4").show();
				$("pil5").hide();
				$("pil11").show();
				$("pil12").show();
				$("pil13").show();
				$("pil14").hide();
				$("pil15").show();
			});
			$("#pil5").click(function(){
				$("pil1").hide();
				$("pil2").hide();
				$("pil3").hide();
				$("pil4").hide();
				$("pil5").show();
				$("pil11").show();
				$("pil12").show();
				$("pil13").show();
				$("pil14").show();
				$("pil15").hide();
			});


			$("#pil11").click(function(){
				$("pil1").hide();
				$("pil2").show();
				$("pil3").show();
				$("pil4").show();
				$("pil5").show();
				$("pil11").show();
				$("pil12").hide();
				$("pil13").hide();
				$("pil14").hide();
				$("pil15").hide();
			});
			$("#pil12").click(function(){
				$("pil1").show();
				$("pil2").hide();
				$("pil3").show();
				$("pil4").show();
				$("pil5").show();
				$("pil11").hide();
				$("pil12").show();
				$("pil13").hide();
				$("pil14").hide();
				$("pil15").hide();
			});
			$("#pil13").click(function(){
				$("pil1").show();
				$("pil2").show();
				$("pil3").hide();
				$("pil4").show();
				$("pil5").show();
				$("pil11").hide();
				$("pil12").hide();
				$("pil13").show();
				$("pil14").hide();
				$("pil15").hide();
			});
			$("#pil14").click(function(){
				$("pil1").show();
				$("pil2").show();
				$("pil3").show();
				$("pil4").hide();
				$("pil5").show();
				$("pil11").hide();
				$("pil12").hide();
				$("pil13").hide();
				$("pil14").show();
				$("pil15").hide();
			});
			$("#pil15").click(function(){
				$("pil1").show();
				$("pil2").show();
				$("pil3").show();
				$("pil4").show();
				$("pil5").hide();
				$("pil11").hide();
				$("pil12").hide();
				$("pil13").hide();
				$("pil14").hide();
				$("pil15").show();
			});

		});
	</script>

</head>
<body>
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
	   




		<div class="card-body">
			<div class="row" id="case1"> 
			
				<div class="col-md-1">
				</div>
				<div class="col-md-2">
					<div class="form-group row">
							<button class="form-control cmd" id="pil1" onclick="myFunction(1)">Data Pribadi</button>
							<button class="form-control cmd2 collapse" id="pil11" onclick="myFunction(1)">Data Pribadi</button>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group row">
							<button class="form-control cmd" id="pil12" onclick="myFunction(2)">Data Usaha</button>
							<button class="form-control cmd2 collapse" id="pil2" onclick="myFunction(2)">Data Usaha</button>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group row">
							<button class="form-control cmd" id="pil13" id="cmd pil3" onclick="myFunction(3)">Data Kepemilikan</button>
							<button class="form-control cmd2 collapse" id="pil3" id="cmd pil3" onclick="myFunction(3)">Data Kepemilikan</button>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group row">
						<button class="form-control cmd" id="pil14" onclick="myFunction(4)">Data Jaminan</button>
							<button class="form-control cmd2 collapse" id="pil4" onclick="myFunction(4)">Data Jaminan</button>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group row">
					<button class="form-control cmd" id="pil15" onclick="myFunction(5)">Karakteristik</button>
							<button class="form-control cmd2 collapse" id="pil5" onclick="myFunction(5)">Karakteristik</button>
					</div>
				</div>
				<div class="col-md-1">
				</div>
			</div>

			



			<!-- 
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
			</a> -->
   </div>
</nav>

<!-- Main Sidebar Container -->
<div class="wrapper awal" style="
	top: 150px;">
		<form method="post" action="/detail1/save" enctype="multipart/form-data">
			{{ csrf_field() }}
			

			<input type="hidden" id="inputuserid" name="inputuserid" value="{{$id}}">

			<div class="card-body">
            
            <ul class="nav nav-tabs" id="custom-content-below-tab" style="display: none;"role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-settings-tab-1" data-toggle="pill" href="#tab1" role="tab" aria-controls="custom-content-below-home" aria-selected="false">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab-2" data-toggle="pill" href="#tab2" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab-3" data-toggle="pill" href="#tab3" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Messages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab-4" data-toggle="pill" href="#tab4" role="tab" aria-controls="custom-content-below-settings" aria-selected="true">Settings</a>
              </li>
				  <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab-5" data-toggle="pill" href="#tab5" role="tab" aria-controls="custom-content-below-settings" aria-selected="true">Settings</a>
              </li>
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade active show" id="tab1" role="tabpanel" aria-labelledby="custom-content-below-home-tab">

						<div class="card card-default">
							<div class="card-header">
								<h3 class="card-title font36">Informasi Personal: {{$id}}</h3>

								<div class="card-tools">
									<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
								</div>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">
									<div class="col-md-4">
										<img class="img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" id="files-tag" width="80%" style="
											border-radius: 200px;
    										border-color: black;"
										>  
										<input type="file" name="files" id="files">
										<span id='val'></span>
										<span id='button'>Rubah Foto Profil</span>
									</div>
									<!-- /.col -->
									<div class="col-md-8">
										<div class="form-group row">
											<label for="inputnamalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputnamalengkap" name="inputnamalengkap" placeholder="Nama Lengkap">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputnamaalias" class="col-sm-2 col-form-label">Alias</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputnamaalias" name="inputnamaalias" placeholder="Alias">
											</div>
										</div>

										<div class="form-group row">
											<label for="inputtanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputtanggallahir" nameid="inputtanggallahir" placeholder="Nama Lengkap">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputtempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputtempatlahir" name="inputtempatlahir" placeholder="Tempat Lahir">
											</div>
										</div>

										<div class="form-group row">
											<label for="inputnoktp" class="col-sm-2 col-form-label">No KTP</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputnoktp" name="inputnoktp" placeholder="No KTP">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputagama" class="col-sm-2 col-form-label">Agama</label>
											<div class="col-sm-4">
												<select class="form-control" id="inputagama" name="inputagama"> 
												<?php 
												foreach ($tblagama as $key => $value) {
													?>
													<option value="{{$value->id}}" <?php echo ($value->id == ''?'selected':'');?>>{{$value->agama}}</option>
													<?php
												}
												?>
												</select>

											</div>
										</div>

										<div class="form-group row">
											<label for="inputgolongandarah" class="col-sm-2 col-form-label">Golongan Darah</label>
											<div class="col-sm-4">

												<select class="form-control" id="inputgolongandarah" name="inputgolongandarah"> 
												<?php 
												foreach ($tbldarah  as $key => $value) {
													?>
													<option value="{{$value->id}}" <?php echo ($value->id == ''?'selected':'');?>>{{$value->darah}}</option>
													<?php
												}
												?>
												</select>

											</div>
										</div>
									</div>
									<!-- /.col -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header">
								<h3 class="card-title font36">Alamat KTP</h3>

								<div class="card-tools">
									<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
								</div>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputalamatktp" class="col-sm-3 col-form-label">Alamat</label>
											<div class="col-sm-9">
												<textarea class="form-control" rows="10" id="inputalamatktp" name="inputalamatktp" placeholder="Enter ..."></textarea>
											</div>
										</div>
									</div>
									<!-- /.col -->
									<div class="col-md-6">
										<div class="form-group row">
										
											<label for="inputkelurahanktp" class="col-sm-3 col-form-label">Kelurahan</label>
											
											<div class="col-sm-9">
												<input type="text" class="form-control" name="inputkelurahanktp" id="inputkelurahanktp" placeholder="Kelurahan" 
												onchange="mykelurahan(1,this)"
											>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkecamatanktp" class="col-sm-3 col-form-label">Kecamatan</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkecamatanktp" name="inputkecamatanktp" placeholder="Kecamatan">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkotaktp" class="col-sm-3 col-form-label">Kabupaten</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkotaktp" name="inputkotaktp" placeholder="Kabupaten">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputpropinsiktp" class="col-sm-3 col-form-label">Provinsi</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputpropinsiktp" name="inputpropinsiktp" placeholder="Provinsi">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkodeposktp" class="col-sm-3 col-form-label">Kode Pos</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkodeposktp" name="inputkodeposktp" placeholder="Kode Pos">
											</div>
										</div>
										
									</div>
									<!-- /.col -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header">
								<div>
									<h3 class="card-title font36">Alamat Rumah</h3>
									<button type="button" style="height:50px;width:50px" onclick="myduplikatalamat()"><ion-icon name="add-circle"></ion-icon>Dup</button>
									Duplicat
								</div>
								<div class="card-tools">
									<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
								</div>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputalamat" class="col-sm-3 col-form-label">Alamat</label>
											<div class="col-sm-9">
												<!-- <input type="text" class="form-control" id="inputnamalengkap" placeholder="Nama Lengkap"> -->
												<textarea class="form-control" rows="10" id="inputalamat" name="inputalamat" placeholder="Enter ..."></textarea>
											</div>
										</div>
									</div>
									<!-- /.col -->
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputkelurahan" class="col-sm-3 col-form-label">Kelurahan</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkelurahan" name="inputkelurahan" placeholder="Kelurahan" onchange="mykelurahan(2,this)">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkecamatan" name="inputkecamatan" placeholder="Kecamatan">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkota" class="col-sm-3 col-form-label">Kabupaten</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkota" name="inputkota" placeholder="Kabupaten">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputpropinsi" class="col-sm-3 col-form-label">Provinsi</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputpropinsi" name="inputpropinsi" placeholder="Provinsi">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkodepos" class="col-sm-3 col-form-label">Kode Pos</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkodepos" name="inputkodepos" placeholder="Kode Pos">
											</div>
										</div>
										
									</div>
									<!-- /.col -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header">
								<h3 class="card-title font36">Kontak</h3>

								<div class="card-tools">
									<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
								</div>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputtelpon" class="col-sm-3 col-form-label">No Telp.</label>
											<div class="col-sm-9">
												<!-- <input type="text" class="form-control" id="inputkelurahanktp" placeholder="Kelurahan"> -->
												<div class="input-group">
													<input type="text" class="form-control" id="inputtelpon" name="inputtelpon" ata-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label for="inputfax" class="col-sm-3 col-form-label">Fax.</label>
											<div class="col-sm-9">
												<!-- <input type="text" class="form-control" id="inputkelurahanktp" placeholder="Kelurahan"> -->
												<div class="input-group">
													<input type="text" class="form-control" id="inputfax" name="inputfax" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
												</div>
											</div>
										</div>

									</div>
									<!-- /.col -->
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputhp" class="col-sm-3 col-form-label">No HP</label>
											<div class="col-sm-9">
												<!-- <input type="text" class="form-control" id="inputkelurahanktp" placeholder="Kelurahan"> -->
												<div class="input-group">
													<input type="text" class="form-control" id="inputhp" name="inputhp" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputemail" class="col-sm-3 col-form-label">Email</label>
											<div class="col-sm-9">
												<input type="email" class="form-control" id="inputemail" name="inputemail" placeholder="Email">
											</div>
										</div>
									</div>
									<!-- /.col -->
								</div>
								<!-- /.row -->
							</div>


							<div class="card-body">
								<?php 
								$medsos = ""; 
								$namamedsos = "";
								foreach ($data_additional as $key => $data) {
									if ($data->type == 'MEDSOS'){
										$medsos = $data->seq;
										$namamedsos = $data->desc;
									}
								}
								?>

								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputnotelp" class="col-sm-3 col-form-label">Media Sosial</label>
											<div class="col-sm-9">
												<!-- <input type="text" class="form-control" id="inputkelurahanktp" placeholder="Kelurahan"> -->
												<select class="form-control" id="inputmediasosail[]" name="inputmediasosail[]"> 
												<?php 
												foreach ($tblmedsos as $key => $value) {
													?>
													<option value="{{$value->id}}" <?php echo ($value->id == $medsos?'selected':'');?>>{{$value->medsos}}</option>
													<?php
												}
												?>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row <?php if($medsos==''?'collapse':'')?>" >
											<div class="col-sm-12">
												<input type="text" class="form-control" id="inputakun[]" name="inputakun[]" placeholder="Nama Akun Media Sosial" value="{{$namamedsos}}">
											</div>
										</div>
									</div>
									
									<!-- /.col -->
								</div>
								

								<!-- /.row -->
							</div>
							

							<div class="card-footer">
								
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header">
								<h3 class="card-title font36">Data Keluarga</h3>

								<div class="card-tools">
									<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
								</div>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">
									<!-- <div class="col-md-1">
										<div class="form-group row kotakexcel">
											<div for="inputbentukusaha" class="col-sm-12 col-form-label font_21" id="">No</div>
											
										</div>
									</div> -->
									<div class="col-md-2">
										<div class="form-group row kotakexcel">
											<label for="inputtipebadanhukum" class="col-sm-12 col-form-label font_21">Nama</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel">
											<label for="inputnamausaha" class="col-sm-12 col-form-label font_21">Tempat Lahir</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel">
											<label for="inputlamausaha" class="col-sm-12 col-form-label font_21">Tanggal<br>lahir</label>
										</div>
									</div>

									<div class="col-md-2">
										<div class="form-group row kotakexcel">
											<label for="inputlamausaha" class="col-sm-12 col-form-label font_21">Jenis<br>Kelamin</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel">
											<label for="inputlamausaha" class="col-sm-12 col-form-label font_21">Status</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel">
											<label for="inputlamausaha" class="col-sm-12 col-form-label font_21">Pendidikan</label>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body"  id="inpkelga">
								<?php 
								$i=-1;
								foreach ($data_additional as $key => $data) {
									if ($data->type == 'DATA_KELUARGA'){
									$i++;
									?>
									<div class="row" id="rowkelga{{$i}}">
									<!-- <div class="col-md-1">
										<div class="form-group row kotakexcel_kosong">
											<label for="inputkeluargano" class="col-sm-12 col-form-label">{{$i}}</label>
										</div>
									</div> -->
									<div class="col-md-2">
										<div class="form-group row kotakexcel_kosong">
											<input type="text" class="form-control" id="inputkeluarganama[]" name="inputkeluarganama[]" placeholder="Nama" value="{{$data->value1}}">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel_kosong">
											<input type="text" class="form-control" id="inputkeluargatempat[]" name="inputkeluargatempat[]" placeholder="Tempat" value="{{$data->value2}}">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel_kosong">
											<input type="text" class="form-control" id="inputkeluargatanggallahir[]" name="inputkeluargatanggallahir[]" placeholder="Tempat" value="{{$data->value3}}">
										</div>
									</div>

									<div class="col-md-2">
										<div class="form-group row kotakexcel_kosong">
											<input type="text" class="form-control" id="inputkeluargasex[]" name="inputkeluargasex[]" placeholder="Tempat" value="{{$data->value4}}">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel_kosong">
											<input type="text" class="form-control" id="inputkeluargastatus[]" name="inputkeluargastatus[]" placeholder="Tempat" value="{{$data->seq}}">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel_kosong">
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputkeluargapendidikan[]"  name="inputkeluargapendidikan[]" placeholder="Tempat" value="{{$data->value6}}">
											</div>
											<div class="col-sm-2">
												<button type="button" name="remove" id="{{$i}}" class="btn btn-danger btn_remove3">X</button>
											</div>
										</div>
									</div>
								</div>
								<?php
									}
								}
								?>
								<!-- /.row -->
							</div>
							<div class="col-md-1">
								<div class="form-group row ">
									<div class="col-sm-12">
										<button type="button" style="height:50px;width:50px" name="addkelga" id="addkelga" class="btn btn-success">Add</button>
									</div>
								</div>
							</div>
							
							<!-- /.card-body -->
							<div class="card-footer">
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
							</div>
						</div>

						<div class="card card-default">
							<div class="card-header">
								<h3 class="card-title font36">Lain - lain</h3>

								<div class="card-tools">
									<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
								</div>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label for="inputlain" class="col-sm-3 col-form-label">Hobby</label>
											<div class="col-sm-9">
												<!-- <input type="text" class="form-control" id="inputkelurahanktp" placeholder="Kelurahan"> -->
												<div class="input-group">
												<textarea class="form-control" rows="10" id="inputhobbys" name="inputhobbys" placeholder="Enter ..."></textarea>
												</div>
											</div>
										</div>

										

									</div>
									<!-- /.col -->
									
									<!-- /.col -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
							</div>
						</div>

              </div>
              <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">

						<div class="card card-default">
								<div class="card-header">
									<h3 class="card-title font36">Informasi Usaha</h3>

									<div class="card-tools">
										<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
										<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputbentukusaha" class="col-sm-3 col-form-label">Bentuk Usaha</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputbentukusaha" name="inputbentukusaha" placeholder="Tipe Badan Hukum">	
												</div>
											</div>

											<div class="form-group row">
												<label for="inputbadanhukum" class="col-sm-3 col-form-label">Tipe Badan Hukum</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputbadanhukum" name="inputbadanhukum" placeholder="Tipe Badan Hukum">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputnamausaha" class="col-sm-3 col-form-label">Nama Usaha</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputnamausaha" name="inputnamausaha" placeholder="Nama Usaha">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputlamausaha" class="col-sm-3 col-form-label">Lama Usaha</label>
												<div class="col-sm-6">
													<input type="number" class="form-control" id="inputlamausaha" name="inputlamausaha" placeholder="Lama Usaha">
												</div>
												<label for="inputlamausaha" class="col-sm-3 col-form-label">Tahun</label>
											</div>

										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputnpwp" class="col-sm-3 col-form-label">NPWP</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputnpwp" name="inputnpwp" placeholder="NPWP">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputheadgroup" class="col-sm-3 col-form-label">Head Group</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputheadgroup" name="inputheadgroup" placeholder="Head Group">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkodesap" class="col-sm-3 col-form-label">Kode SAP</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkodesap" name="inputkodesap" placeholder="Kabupaten">
												</div>
											</div>
											
											
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
									the plugin. -->
								</div>
							</div>



							<div class="card card-default">
								<div class="card-header">
									<h3 class="card-title font36">Status Usaha</h3>

									<div class="card-tools">
										<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
										<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
									</div>
								</div>
								<!-- /.card-header -->

								<div class="card-body" id="inpstatususaha">
								<?php 
								$txt="";
								foreach ($tabelstatus_usaha as $key => $value) {
									$txt.= '<option value="'.$value->seq.'">'.$value->desc.'</option>';
								}
								?>

									<input type="text" id="optstatususaha" value="{{$txt}}";

								
									<?php 
									$i=-1;
									foreach ($data_additional as $key => $data) {
									if ($data->type == 'STATUSUSAHA'){
									$i++;
									?>
									<div class="row" id="rowsstatususaha{{$i}}">
										<div class="col-md-5">
											<div class="form-group row">
												<div class="col-sm-12">
													<select class="form-control btn btn-block btn-primary btn-lg" id="inputstatus[]" name="inputstatus[]" style="height: 60px;background: rgba(51,122,183,1);"> 
													<?php 
													foreach ($tabelstatus_usaha as $key => $value) {
													?>
														<option value="{{$value->seq}}" <?php echo ($value->seq == $data->seq?'selected':'');?>>{{$value->desc}}</option>
													<?php
													}
													?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group row">
												<div class="col-sm-12">
													<button type="button" name="remove" id="{{$i}}" class="btn btn-danger btn_removeb">X</button>
												</div>
											</div>
										</div>
									</div>
									<?php 
									}
									}
									?>
								</div>
								<div class="col-md-1">
									<div class="form-group row ">
										<div class="col-sm-12">
											<button type="button" style="height:50px;width:50px" name="addstatususaha" id="addstatususaha" class="btn btn-success">Add</button>
										</div>
									</div>
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<!-- Visit <a href="Alamat Rumahhttps://select2.github.io/">Select2 documentation</a> for more examples and information about
									the plugin. -->
								</div>
							</div>




							



							<div class="card card-default">
							<div class="card-header">
								<div>
									<h3 class="card-title font36">Alamat usaha</h3>
									<button type="button" style="height:50px;width:50px" onclick="myduplikatalamatusaha()"><ion-icon name="add-circle"></ion-icon>Dup</button>
									Duplicat
								</div>
								<div class="card-tools">
									<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
								</div>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputalamat" class="col-sm-3 col-form-label">Alamat</label>
											<div class="col-sm-9">
												<!-- <input type="text" class="form-control" id="inputnamalengkap" placeholder="Nama Lengkap"> -->
												<textarea class="form-control" rows="10" id="inputalamatusaha" name="inputalamatusaha" placeholder="Enter ..."></textarea>
											</div>
										</div>
									</div>
									<!-- /.col -->
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputkelurahan" class="col-sm-3 col-form-label">Kelurahan</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkelurahanusaha" name="inputkelurahanusaha" placeholder="Kelurahan" onchange="mykelurahan(2,this)">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkecamatanusaha" name="inputkecamatanusaha" placeholder="Kecamatan">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkota" class="col-sm-3 col-form-label">Kabupaten</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkotausaha" name="inputkotausaha" placeholder="Kabupaten">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputpropinsi" class="col-sm-3 col-form-label">Provinsi</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputpropinsiusaha" name="inputpropinsiusaha" placeholder="Provinsi">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkodepos" class="col-sm-3 col-form-label">Kode Pos</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkodeposusaha" name="inputkodeposusaha" placeholder="Kode Pos">
											</div>
										</div>
										
									</div>
									<!-- /.col -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
							</div>
						</div>








							<div class="card card-default">
								<div class="card-header">
									<h3 class="card-title font36">Kontak</h3>

									
									
									<!-- <div id="Group_699_sf">
										<div id="Sama_dengan_KTP_sg">
											<span>Sama dengan KTP</span>
										</div>
										<svg class="Rectangle_322_sh" style="top:15px;left:150px;">
											<rect id="Rectangle_322_sh" rx="10" ry="10" x="0" y="0" width="41" height="39">
											</rect>
										</svg>
										<div id="Group_692_si">
											<div id="Group_666_sj">
												<svg class="Line_117_sk" viewBox="0 0 15 15">
													<path id="Line_117_sk" d="M 0 0 L 15 15">
													</path>
												</svg>
												<svg class="Path_123_sl" viewBox="5.478 0 9.522 9.522">
													<path id="Path_123_sl" d="M 5.477598667144775 9.522401809692383 L 8.453349113464355 6.546651363372803 L 15 0">
													</path>
												</svg>
											</div>
										</div>
									</div> -->


									<div class="card-tools">
										<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
										<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputusahatelpon" class="col-sm-3 col-form-label">No Telp.</label>
												<div class="col-sm-9">
													<!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
													<div class="input-group">
														<input type="text" id="inputusahatelpon" name="inputusahatelpon" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
													</div>
												</div>
											</div>

											<div class="form-group row">
												<label for="inputusahafax" class="col-sm-3 col-form-label">Fax.</label>
												<div class="col-sm-9">
													<!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
													<div class="input-group">
														<input type="text" class="form-control" id="inputusahafax" name="inputusahafax" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
													</div>
												</div>
											</div>
										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputusahahp" class="col-sm-3 col-form-label">No HP</label>
												<div class="col-sm-9">
													<!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
													<div class="input-group">
														<input type="text" class="form-control" id="inputusahahp" name="inputusahahp" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputusahaemail" class="col-sm-3 col-form-label">Email</label>
												<div class="col-sm-9">
													<input type="email" class="form-control" id="inputusahaemail" name="inputusahaemail" placeholder="Email">
												</div>
											</div>
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
								</div>


								<div class="card-body" id="inpmedsos">
									<?php 
									$i=-1;
									foreach ($data_additional as $key => $data) {
									if ($data->type == 'MEDSOS'){
									$i++;
									?>
									<div class="row" id="rowmedsos{{$i}}">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputusahamediasosial" class="col-sm-3 col-form-label">Media Sosial</label>
												<div class="col-sm-9">
													<!-- <input type="text" class="form-control" id="inputkelurahanktp" placeholder="Kelurahan"> -->
													<select class="form-control" id="inputusahamediasosail[]" name="inputusahamediasosail[]"> 
													<?php 
													foreach ($tblmedsos as $key => $value) {
														?>
														<option value="{{$value->id}}" <?php echo ($value->id == $data->seq?'selected':'');?>>{{$value->medsos}}</option>
														<?php
													}
													?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="text" class="form-control" id="inputusahaakun[]" name="inputusahaakun[]" placeholder="Nama Akun Media Sosial" value="{{$data->desc}}">
												</div>
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group row">
												<div class="col-sm-12">
													<button type="button" name="remove" id="{{$i}}" class="btn btn-danger btn_remove2">X</button>
												</div>
											</div>
										</div>
										<!-- /.col -->
									</div>
									<?php 
									}
									}
									?>

									<!-- /.row -->
								</div>

								<div class="col-md-1">
									<div class="form-group row ">
										<div class="col-sm-12">
											<button type="button" style="height:50px;width:50px" name="addmedsos" id="addmedsos" class="btn btn-success">Add</button>
										</div>
									</div>
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
									the plugin. -->
								</div>
							</div>

							<div class="card card-default">
								<div class="card-header">
									<h3 class="card-title font36">Sanak Saudara yang jadi Agen / Distributor</h3>

									<div class="card-tools">
										<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
										<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-md-1">
											<div class="form-group row kotakexcel">
												<label for="inputbentukusaha" class="col-sm-12 col-form-label">No</label>
												
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel">
												<label for="inputtipebadanhukum" class="col-sm-12 col-form-label">Nama</label>
												
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel">
												<label for="inputnamausaha" class="col-sm-12 col-form-label">Kode Sap</label>
												
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel">
												<label for="inputlamausaha" class="col-sm-12 col-form-label">Hubungan</label>
												
											</div>
										</div>
									</div>
								</div>



								<div class="card-body" id="inpagenhub">
									<?php 
									$i=-1;
									foreach ($data_additional as $key => $data) {
										if ($data->type == 'AGEN_HUB'){
											$i++;
											?>
											<div class="row" id="rowsagenhub{{$i}}">
												<div class="col-md-1">
													<div class="form-group row kotakexcel_kosong">
														<label for="inputbentukusaha" class="col-sm-12 co<input type="text" class="form-control">{{$i+1}}</label>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group row kotakexcel_kosong">
														<input type="text" class="form-control" id="inputAgenHubNama[]" name="inputAgenHubNama[]" placeholder="Nama" value="{{$data->value1}}">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group row kotakexcel_kosong">
														<input type="text" class="form-control" id="inputAgenHubKode[]" name="inputAgenHubKode[]" placeholder="No Sap" value="{{$data->value2}}">
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group row kotakexcel_kosong">
														<div class="col-sm-10">
															<input type="text" class="form-control" id="inputAgenHubStatus[]" name="inputAgenHubStatus[]" placeholder="Hubungan" value="{{$data->value4}}">
														</div>
														<div class="col-sm-2">
															<button type="button" name="remove" id="{{$i}}" class="btn btn-danger btn_remove4">X</button>
														</div>
													</div>
												</div>
											</div>
											<?php 
										}
									}
									?>
									<!-- /.row -->
								</div>

								<!-- /.card-body -->
								<div class="col-md-1">
									<div class="form-group row ">
										<div class="col-sm-12">
											<button type="button" style="height:50px;width:50px" name="addagenhub" id="addagenhub" class="btn btn-success">Add</button>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
									the plugin. -->
								</div>
							</div>

							<div class="card card-default">
								<div class="card-header">
									<h3 class="card-title font36">Area Penjualan</h3>

									<div class="card-tools">
										<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
										<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group row kotakexcel">
												<label for="inputbentukusaha" class="col-sm-12 col-form-label">Area</label>
												
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel">
												<label for="inputbentukusaha" class="col-sm-12 col-form-label">Jenis</label>
												
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel">
												<label for="inputtipebadanhukum" class="col-sm-12 col-form-label">Volume (Ton)</label>
												
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel">
												<label for="inputnamausaha" class="col-sm-12 col-form-label">Kab/Kota</label>
												
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel">
												<label for="inputlamausaha" class="col-sm-12 col-form-label">Info Lain</label>
												
											</div>
										</div>
									</div>
								</div>

								<div class="card-body" id="inpareasubagen">
									<?php
									$i=-1;
									foreach ($data_additional as $key => $data) {
										if   (($data->type == 'AREA_SUBAGEN')
											or ($data->type == 'AREA_PETAMBAK')
											or ($data->type == 'AREA_LAIN')
										){
											$i++;
											?>
									<div class="row" id="rowsareasubagen{{$i}}">
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<select class="form-control" id="inputNamaarea[]" name="inputNamaarea[]"> 
													<option value="{{$data->desc1}}">{{$data->desc1}}</option>
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputNamaSubAgen[]" name="inputNamaSubAgen[]" placeholder="Nama" value="{{$data->value1}}">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												
												<input type="text" class="form-control" id="inputQtySubAgen[]" name="inputQtySubAgen[]" placeholder="Nama" value="{{$data->desc}}">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputLokasiSubAgen[]" name="inputLokasiSubAgen[]" placeholder="Nama" value="{{$data->value2}}">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">

												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputInfoSubAgen[]" name="inputInfoSubAgen[]" placeholder="Hubungan" value="{{$data->value3}}">
												</div>
												<div class="col-sm-2">
													<button type="button" name="remove" id="{{$i}}" class="btn btn-danger btn_remove5">X</button>
												</div>
											</div>
										</div>
									</div>
									<!-- /.row -->

									<?php
											}
										}
									?>
									
								</div>
								<div class="col-md-1">
									<div class="form-group row ">
										<div class="col-sm-12">
											<button type="button" style="height:50px;width:50px" name="addareasubagen" id="addareasubagen" class="btn btn-success">Add</button>
										</div>
									</div>
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
									the plugin. -->
								</div>
							</div>

							<div class="card card-default">
								<div class="card-header">
									<h3 class="card-title font36">Jenis Produk Yang Dijual (Kompetitor)</h3>

									<div class="card-tools">
										<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
										<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<!-- <div class="col-md-1">
											<div class="form-group row kotakexcel">
												<label for="inputbentukusaha" class="col-sm-12 col-form-label">No</label>
												
											</div>
										</div> -->
										<div class="col-md-4">
											<div class="form-group row kotakexcel">
												<label for="inputtipebadanhukum" class="col-sm-12 col-form-label">Brand Kompetitor</label>
												
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel">
												<label for="inputnamausaha" class="col-sm-12 col-form-label">Jenis / Kode Product</label>
												
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel">
												<label for="inputlamausaha" class="col-sm-12 col-form-label">Kuantitas (Kg)</label>
												
											</div>
										</div>
									</div>
								</div>
								<div class="card-body" id="inpkompetitor">
									<?php
									$i=-1;
									foreach ($data_additional as $key => $data) {
										if   ($data->type == 'PAKAN_JUAL')
										{
											$i++;
											?>
									<div class="row" id="rowskompetitor{{$i}}">
										<div class="col-md-4">
											<div class="col-sm-12">	
												<input type="text" class="form-control" id="inputPakanJualC[]" name="inputPakanJualC[]" value="{{$data->value2}}">	
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-12">	
													<input type="text" class="form-control" id="inputPakanJual[]" name="inputPakanJual[]" value="{{$data->desc}}">	
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputPakanJualV[]" name="inputPakanJualV[]" value="{{$data->value1}}">	
												</div>
												<div class="col-sm-2">
													<button type="button" name="remove" id="{{$i}}" class="btn btn-danger btn_remove6">X</button>
												</div>
											</div>
										</div>
									</div>
									<?php
											}
										}
									?>
								</div>
								<div class="col-md-1">
									<div class="form-group row ">
										<div class="col-sm-12">
											<button type="button" style="height:50px;width:50px" name="addkompetitor" id="addkompetitor" class="btn btn-success">Add</button>
										</div>
									</div>
								</div>
									
								<!-- /.card-body -->
								<div class="card-footer">
									<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
									the plugin. -->
								</div>
							</div>

              </div>
              <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">

						<div class="card card-default">
							<div class="card-header">
								<h3 class="card-title font36">Bisnis Lain</h3>

								<div class="card-tools">
									<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
								</div>
							</div>
							<!-- /.card-header -->
							
							<div class="card-body" id="inpbisnislain">

								<?php
									$i=-1;
									foreach ($data_additional as $key => $data) {
										if   ($data->type == 'BISNIS_LAIN')
										{
											$i++;
											?>
								<div class="row" id="rowsbisnislain{{$i}}">
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis Lain</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis" value="{{$data->desc}}">	
											</div>
										</div>
									</div>

									<!-- /.col -->
									<div class="col-md-5">
										<div class="form-group row">
											<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Omset (Rp)</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="Nilai Omset" value="{{$data->value1}}">	
											</div>
										</div>
									</div>

									<div class="col-md-1">
										<div class="form-group row">
											<div class="col-sm-12">
												<button type="button" name="remove" id="{{$i}}" class="btn btn-danger btn_remove7">X</button>
											</div>
										</div>
									</div>
								</div>
								<?php
										}
									}
								?>
								
							</div>
							<!-- /.row -->
							<div class="col-md-1">
									<div class="form-group row ">
										<div class="col-sm-12">
											<button type="button" style="height:50px;width:50px" name="addbisnislain" id="addbisnislain" class="btn btn-success">Add</button>
										</div>
									</div>
								</div>

							<!-- /.card-body -->
							<div class="card-footer">
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
							</div>
						</div>


						
						<div class="card card-default">
							<div class="card-header">
								<h3 class="card-title font36">Asset Pribadi</h3>

								<div class="card-tools">
									<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
								</div>
							</div>
							<!-- /.card-header -->
							
							<div class="card-body" id="inpassetpribadi">
							<?php
									$i=-1;
									foreach ($data_additional as $key => $data) {
										if   ($data->type == 'ASSET_PRIBADI')
										{
											$i++;
											?>
								<div class="row" id="rowsassetpribadi{{$i}}">
									<div class="col-md-2">
										<div class="form-group row">
											<div class="col-sm-12">
												<input type="text" class="form-control" id="inputasetpribadi[]" name="inputasetpribadi[]" value="{{$data->desc}}">	
											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group row">
											<label for="inputbisnislainrp" class="col-sm-2 col-form-label">{{$data->info}}</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="inputasetpribadi[]" name="inputasetpribadi[]" value="{{$data->desc}}">	
											</div>
											<label for="inputbisnislainrp" class="col-sm-2 col-form-label">{{$data->info2}}</label>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group row">
											<label for="inputasetpribadirp" class="col-sm-4 col-form-label">{{$data->info3}}</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="inputasetpribadirp[]" name="inputasetpribadirp[]" value="{{$data->value2}}">	
											</div>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row">
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputasetpribadirp[]" name="inputasetpribadirp[]" value="{{$data->value3}}">	
											</div>
											<div class="col-sm-2">
												<button type="button" name="remove" id="{{$i}}" class="btn btn-danger btn_remove8">X</button>
											</div>
										</div>
									</div>

									
								</div>
								<?php
										}
									}
											?>
								<!-- /.row -->
								
							</div>
							<div class="col-md-1">
									<div class="form-group row ">
										<div class="col-sm-12">
											<button type="button" style="height:50px;width:50px" name="addassetpribadi" id="addassetpribadi" class="btn btn-success">Add</button>
										</div>
									</div>
								</div>


							<!-- /.card-body -->
							<div class="card-footer">
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
							</div>
						</div>


						<div class="card card-default">
							<div class="card-header">
								<h3 class="card-title font36">Modal</h3>

								<div class="card-tools">
									<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
								</div>
							</div>
							<!-- /.card-header -->
							
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label for="inputmodalsendiripersent" class="col-sm-2 col-form-label">Sendiri</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="inputmodalsendiripersent" name="inputmodalsendiripersent" placeholder="%">	
											</div>
											<label for="inputmodalsendiripersent" class="col-sm-2 col-form-label">%</label>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group row">
											<label for="inputmodallainlainpersent" class="col-sm-2 col-form-label">Lain-lain</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="inputmodallainlainpersent" name="inputmodallainlainpersent" placeholder="%">	
											</div>
											<label for="inputmodallainlainpersent" class="col-sm-1 col-form-label">%</label>
										</div>
									</div>
									
								</div>
							</div>
							<div class="card-body" id="inpmodalbank">
							
								<div class="row" id="rowsmodalbank">
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputmodalbankpersent" class="col-sm-4 col-form-label">Bank</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" id="inputmodalbankpersent[]" name="inputmodalbankpersent[]" placeholder="%">	
											</div>
											<label for="inputmodalbankpersent" class="col-sm-2 col-form-label">%</label>
										</div>
									</div>
									<!-- /.col -->
									<div class="col-md-5">
										<div class="form-group row">
											<div class="col-sm-10">
												<select class="form-control" id="inputmodalbanknama[]" name="inputmodalbanknama[]"> 
													<option>option 1</option>
													<option>option 2</option>
													<option>option 3</option>
													<option>option 4</option>
													<option>option 5</option>
												</select>
											</div>
											<div class="col-sm-2">
												<button type="button" name="remove" id="{{$i}}" class="btn btn-danger btn_remove9">X</button>
											</div>
										</div>
									</div>

									<!-- <div class="col-md-1">
										<div class="form-group row">
											<a href="#">
												<button type="button" class="btn btn-default btn-sm" style="
													border-radius: 50%;
													height: 50px;
													width: 50px;
													font-size: xx-large;
													background: red;
												"><i class="far fa-trash-alt"></i></button>
													
											</a>
										</div>
									</div> -->
								</div>
								<!-- /.row -->
								<!-- <div class="form-group row" >
									<button type="button" style="height:50px;width:50px"><ion-icon name="add-circle" ></ion-icon>Add</button>
									</div> -->
							</div>
							<div class="col-md-1">
									<div class="form-group row ">
										<div class="col-sm-12">
											<button type="button" style="height:50px;width:50px" name="addmodalbank" id="addmodalbank" class="btn btn-success">Add</button>
										</div>
									</div>
								</div>
							


							<!-- /.card-body -->
							<div class="card-footer">
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
							</div>
						</div>

              </div>

              <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">

					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title font36">Jaminan</h3>

							<div class="card-tools">
								<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
								<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
							</div>
						</div>
						<!-- /.card-header -->
						
						<div class="card-body" id="inpjaminan">
							<?php
							$i=-1;
							foreach ($data_additional as $key => $data) {
								if   ($data->type == 'JAMINAN_PRIBADI')
								{
									$i++;
							?>
							<div class="row" id="rowsjaminan{{$i}}">
								<div class="col-md-2">
									<div class="form-group row">
										<div class="col-sm-12">
											<input type="text" class="form-control" id="inputJaminanPribadi[]" name="inputJaminanPribadi[]" value="{{$data->desc}}">	
										</div>
									</div>
								</div>

								<div class="col-md-5">
									<div class="form-group row">
										<label for="inputbisnislain" class="col-sm-3 col-form-label">{{$data->info}}</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="iinputJaminanValue[]" value="{{$data->value1}}">	
											<input type="hidden" id="inputJaminanSseq[]" name="inputJaminanSseq[]" value="{{$data->seq}}">
										</div>
										<label for="inputbisnislain" class="col-sm-3 col-form-label">{{$data->info2}}</label>
									</div>
								</div>

								<!-- /.col -->
								<div class="col-md-3">
									<div class="form-group row">
										<label for="inputbisnislainrp" class="col-sm-3 col-form-label">{{$data->info3}}</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputJaminanAlamat[]" name="inputJaminanAlamat[]" value="{{$data->value2}}">	
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group row">
										<div class="col-sm-10">
											<input type="text" class="form-control" id="inputJaminanLain[]" name="inputJaminanLain[]" value="{{$data->value3}}">	
										</div>
										<div class="col-sm-2">
											<button type="button" name="remove" id="{{$i}}" class="btn btn-danger btn_removea">X</button>
										</div>
									</div>
								</div>
							</div>
							<?php
									}
								}
							?>

							<!-- /.row -->
							
						</div>
						<div class="col-md-1">
							<div class="form-group row ">
								<div class="col-sm-12">
									<button type="button" style="height:50px;width:50px" name="addjaminan" id="addjaminan" class="btn btn-success">Add</button>
								</div>
							</div>
						</div>


						<!-- /.card-body -->
						<div class="card-footer">
							<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
							the plugin. -->
						</div>
					</div>

              </div>
				  <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">




						<div class="card card-default">
							<div class="card-header">
								<h3 class="card-title font36">Karakteristik</h3>

								<div class="card-tools">
									<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
								</div>
							</div>
							<!-- /.card-header -->
							
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<div class="col-sm-12">
												<textarea class="form-control" rows="10" id="inputkarakteristik" name="inputkarakteristik" placeholder="Enter ..."></textarea>
											</div>
										</div>
									</div>
									
								</div>
								<!-- /.row -->
							</div>


							<!-- /.card-body -->
							<div class="card-footer">
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
							</div>
						</div>


						<div class="card card-default">
							<div class="card-header">
								<h3 class="card-title font36">Photo</h3>

								<div class="card-tools">
									<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
								</div>
							</div>
							<!-- /.card-header -->
							
							<div class="card-body" id="inpkarakteristikphoto">
								<div class="row">

									<div class="col-md-4">
										<img class="img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" id="files-tag" width="80%" style="
											border-radius: 200px;
    										border-color: black;"
										>  
										<input type="file" name="files" id="files">
										<span id='val'></span>
										<span id='button'>Rubah Foto Profil</span>
									</div>

									<!-- <div class="col-12 col-sm-2">
										<div class="form-group row">
											<div class="product-image-thumb col-sm-9">
												<img src="../../dist/img/prod-2.jpg" alt="Product Image">

												
												<div class="col-sm-3">
													<button type="button" name="remove" id="{{$i}}" class="btn btn-danger btn_removea">X</button>
												</div>	
											</div>
											
										</div>
									
									</div> -->
								</div>
								<!-- /.row -->
								
							</div>
							<div class="form-group row ">
								<div class="col-sm-12">
									<button type="button" style="height:50px;width:50px" name="addphotolain" id="addphotolain" class="btn btn-success">Add</button>
								</div>
							</div>


							<!-- /.card-body -->
							<div class="card-footer">
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
							</div>
						</div>



              </div>
            </div>
            
          </div>
			 <div class="row" >
				<div class="col-md-4">
				</div>
				
				<div class="col-md-2">
					<div class="form-group row">
						<div class="col-sm-12">
						<!-- <input type="submit"  class="btn btn-block btn-primary btn-lg" style="background: rgba(15,199,89,1);">Save</> -->
						<input type="submit" class="btn btn-block btn-primary btn-lg" style="background: rgba(15,199,89,1);" value="Save">
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group row">
						<div class="col-sm-12">
							<!-- <button type="button" class="btn btn-block btn-danger btn-lg">Cancel</button> -->
							<a href="/images" class="btn btn-block btn-danger btn-lg">Cancel</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</form>	
</div>

<!-- <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script> -->
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>


<script type="text/javascript">
    var route = "{{ url('autocomplete') }}";
    $('#inputkelurahan').typeahead({
         minLength: 4,
         source:  function (term, process) {
         return $.get(route, { term: term }, function (data) {
            console.log(data);  
                return process(data);
            });
        }
	 });

</script>

<script type="text/javascript">
    var route = "{{ url('autocomplete') }}";
    $('#inputkelurahanktp').typeahead({
         minLength: 4,
         source:  function (term, process) {
         return $.get(route, { term: term }, function (data) {
            console.log(data);  
                return process(data);
            });
        }
	 });
</script>

<script type="text/javascript">
	function myduplicat() {
		document.getElementById("inputalamat").value    = document.getElementById("inputalamatktp").value;
		document.getElementById("inputkelurahan").value = document.getElementById("inputkelurahanktpan").value;
		document.getElementById("inputkecamatan").value = document.getElementById("inputkecamatanktpan").value;
		document.getElementById("inputkota").value      = document.getElementById("inputkotaktp").value;
		document.getElementById("inputpropinsi").value  = document.getElementById("inputpropinsiktp").value;
		document.getElementById("inputkodepos").value   = document.getElementById("inputkodeposktp").value;
	}
</script>

<script type="text/javascript">

    $(document).ready(function(){
		var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  
      var j=1;  

		$('#addmedsos').click(function(){  
         i++;  
			var txt = '<div class="row" id="rowmedsos'+i+'">'+
								'<div class="col-md-6">'+
									'<div class="form-group row">'+
										'<label for="inputnotelp" class="col-sm-3 col-form-label">Media Sosial</label>'+
										'<div class="col-sm-9">'+
											'<select class="form-control" id="inputusahamediasosail[]" name="inputusahamediasosail[]">'+ 
											'</select>'+
										'</div>'+
									'</div>'+
								'</div>'+
								'<div class="col-md-5">'+
									'<div class="form-group row ">'+
										'<div class="col-sm-12">'+
											'<input type="text" class="form-control" id="inputusahaakun[]" name="inputusahaakun[]" placeholder="Nama Akun Media Sosial">'+
										'</div>'+
									'</div>'+
								'</div>'+
								'<div class="col-md-1">'+
									'<div class="form-group row">'+
										'<div class="col-sm-12">'+
											'<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove2">X</button>'+
										'</div>'+
									'</div>'+
								'</div>';
							console.log(txt);
			$('#inpmedsos').append(txt);
		}); 

		$(document).on('click', '.btn_remove2', function(){  
			var button_id = $(this).attr("id");   
			$('#rowmedsos'+button_id+'').remove();  
      });  

	});  
</script>


<script type="text/javascript">

    $(document).ready(function(){
		var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

		$('#addkelga').click(function(){ 
						var txt ='<div class="row" id="rowkelga'+i+'">'+
									'<div class="col-md-2">'+
										'<div class="form-group row kotakexcel_kosong">'+
											'<input type="text" class="form-control" id="inputkeluarganama[]" name="inputkeluarganama[]" placeholder="Nama">'+
										'</div>'+
									'</div>'+
									'<div class="col-md-2">'+
										'<div class="form-group row kotakexcel_kosong">'+
											'<input type="text" class="form-control" id="inputkeluargatempat[]" name="inputkeluargatempat[]" placeholder="Tempat">'+
										'</div>'+
									'</div>'+
									'<div class="col-md-2">'+
										'<div class="form-group row kotakexcel_kosong">'+
											'<input type="text" class="form-control" id="inputkeluargatanggallahir[]" name="inputkeluargatanggallahir[]" placeholder="Tanggal">'+
										'</div>'+
									'</div>'+
									'<div class="col-md-2">'+
										'<div class="form-group row kotakexcel_kosong">'+
										'<input type="text" class="form-control" id="inputkeluargasex[]" name="inputkeluargasex[]" placeholder="Sex">'+
										'</div>'+
									'</div>'+
									'<div class="col-md-2">'+
										'<div class="form-group row kotakexcel_kosong">'+
										'<input type="text" class="form-control" id="inputkeluargastatus[]" name="inputkeluargastatus[]" placeholder="Status">'+
										'</div>'+
									'</div>'+
									'<div class="col-md-2">'+
										'<div class="form-group row kotakexcel_kosong">'+
											'<div class="col-sm-10">'+
												'<input type="text" class="form-control" id="inputkeluargapendidikan[]" name="inputkeluargapendidikan[]" placeholder="Tempat" value="{{$data->value6}}">'+
											'</div>'+
											'<div class="col-sm-2">'+
												'<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove3">X</button>'+
											'</div>'+
										'</div>'+
									'</div>'+
								'</div>';

			$('#inpkelga').append(txt);
		});

		$(document).on('click', '.btn_remove3', function(){  
			var button_id = $(this).attr("id");   
			$('#rowkelga'+button_id+'').remove();  
      });  

	});  
</script>



<script type="text/javascript">

    $(document).ready(function(){
		var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

		$('#addagenhub').click(function(){ 

			var txt ='<div class="row" id="rowsagenhub'+i+'">'+
												'<div class="col-md-1">'+
													'<div class="form-group row kotakexcel_kosong">'+
													'<label for="inputbentukusaha" class="col-sm-3 col-form-label">'+i+'</label>'+
													'</div>'+
												'</div>'+
												'<div class="col-md-4">'+
													'<div class="form-group row kotakexcel_kosong">'+
														'<input type="text" class="form-control" id="inputAgenHubNama[]" name="inputAgenHubNama[]" placeholder="Nama">'+
													'</div>'+
												'</div>'+
												'<div class="col-md-4">'+
													'<div class="form-group row kotakexcel_kosong">'+
														'<input type="text" class="form-control" id="inputAgenHubKode[]" name="inputAgenHubKode[]" placeholder="No Sap">'+
													'</div>'+
												'</div>'+
												'<div class="col-md-3">'+
													'<div class="form-group row kotakexcel_kosong">'+
														'<div class="col-sm-10">'+
															'<input type="text" class="form-control" id="inputAgenHubStatus[]" name="inputAgenHubStatus[]" placeholder="Hubungan">'+
														'</div>'+
														'<div class="col-sm-2">'+
															'<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove4">X</button>'+
														'</div>'+
													'</div>'+
												'</div>'+
											'</div>';
																				

						

			$('#inpagenhub').append(txt);
		});

		$(document).on('click', '.btn_remove4', function(){  
			var button_id = $(this).attr("id");   
			$('#rowsagenhub'+button_id+'').remove();  
      });  

	});  
</script>


<script type="text/javascript">

    $(document).ready(function(){
		var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

		$('#addareasubagen').click(function(){ 
						var txt = '<div class="row" id="rowsareasubagen'+i+'">'+
										'<div class="col-md-2">'+
											'<div class="form-group row kotakexcel_kosong">'+
												'<select class="form-control" id="inputNamaarea[]" name="inputNamaarea[]">'+
													'<option value="">-</option>'+
												'</select>'+
											'</div>'+
										'</div>'+
										'<div class="col-md-2">'+
											'<div class="form-group row kotakexcel_kosong">'+
												'<input type="text" class="form-control" id="inputNamaSubAgen[]" name="inputNamaSubAgen[]" placeholder="Nama">'+
											'</div>'+
										'</div>'+
										'<div class="col-md-2">'+
											'<div class="form-group row kotakexcel_kosong">'+
												'<input type="text" class="form-control" id="inputQtySubAgen[]" name="inputQtySubAgen[]" placeholder="Nama">'+
											'</div>'+
										'</div>'+
										'<div class="col-md-3">'+
											'<div class="form-group row kotakexcel_kosong">'+
												'<input type="text" class="form-control" id="inputLokasiSubAgen[]" name="inputLokasiSubAgen[]" placeholder="Nama">'+
											'</div>'+
										'</div>'+
										'<div class="col-md-3">'+
											'<div class="form-group row kotakexcel_kosong">'+
												'<div class="col-sm-10">'+
													'<input type="text" class="form-control" id="inputInfoSubAgen[]" name="inputInfoSubAgen[]" placeholder="Hubungan">'+
												'</div>'+
												'<div class="col-sm-2">'+
													'<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove5">X</button>'+
												'</div>'+
											'</div>'+
										'</div>'+
									'</div>';
			$('#inpareasubagen').append(txt);
		});

		$(document).on('click', '.btn_remove5', function(){  
			var button_id = $(this).attr("id");   
			$('#rowsareasubagen'+button_id+'').remove();  
      });  
	});  
</script>

<script type="text/javascript">

    $(document).ready(function(){
		var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

		$('#addkompetitor').click(function(){ 
			var txt = '<div class="row" id="rowskompetitor'+i+'">'+
										'<div class="col-md-4">'+
											'<div class="col-sm-12">'+
												'<input type="text" class="form-control" id="inputPakanJualC[]" name="inputPakanJualC[]">'+
											'</div>'+
										'</div>'+
										'<div class="col-md-4">'+
											'<div class="form-group row kotakexcel_kosong">'+
												'<div class="col-sm-12">'+
													'<input type="text" class="form-control" id="inputPakanJual[]" name="inputPakanJual[]">'+	
												'</div>'+
											'</div>'+
										'</div>'+
										'<div class="col-md-4">'+
											'<div class="form-group row kotakexcel_kosong">'+
												'<div class="col-sm-10">'+
													'<input type="text" class="form-control" id="inputPakanJualV[]" ="inputPakanJualV[]">'+
												'</div>'+
												'<div class="col-sm-2">'+
													'<button type="button" name="remove" id="remove6_'+i+'" class="btn btn-danger btn_remove6">X</button>'+
												'</div>'+
											'</div>'+
										'</div>'+
									'</div>';
			$('#inpkompetitor').append(txt);
		});


		$(document).on('click', '.btn_remove6', function(){  
			var button_id = $(this).attr("id");   
			$('#rowskompetitor'+button_id+'').remove();  
      });  
	});  
</script>	


<script type="text/javascript">

    $(document).ready(function(){
		var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

		$('#addbisnislain').click(function(){ 
			var txt = '<div class="row" id="rowsbisnislain'+i+'">'+
						'	<div class="col-md-6">'+
						'		<div class="form-group row">'+
						'			<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis Lain</label>'+
						'			<div class="col-sm-9">'+
						'				<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis">	'+
						'			</div>'+
						'		</div>'+
						'	</div>'+
						'	<!-- /.col -->'+
						'	<div class="col-md-5">'+
						'		<div class="form-group row">'+
						'			<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Omset (Rp)</label>'+
						'			<div class="col-sm-8">'+
						'				<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="Nilai Omset">'+
						'			</div>'+
						'		</div>'+
						'	</div>'+
						'	<div class="col-md-1">'+
						'		<div class="form-group row">'+
						'			<div class="col-sm-12">'+
						'				<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove7">X</button>'+
						'			</div>'+
						'		</div>'+
						'	</div>'+
						'</div>';
			$('#inpbisnislain').append(txt);
		});


		$(document).on('click', '.btn_remove7', function(){  
			var button_id = $(this).attr("id");   
			$('#rowsbisnislain'+button_id+'').remove();  
      });  
	});  
</script>


<script type="text/javascript">

    $(document).ready(function(){
		var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

		$('#addassetpribadi').click(function(){ 
			var txt = 	'<div class="row" id="rowsassetpribadi'+i+'">'+
							'	<div class="col-md-2">'+
							'		<div class="form-group row">'+
							'			<div class="col-sm-9">'+
							'				<input type="text" class="form-control" id="inputasetpribadi[]" name="inputasetpribadi[]">'+
							'			</div>'+
							'		</div>'+
							'	</div>'+
							'	<div class="col-md-5">'+
							'		<div class="form-group row">'+
							'			<label for="inputbisnislainrp" class="col-sm-2 col-form-label">{{$data->info}}</label>'+
							'			<div class="col-sm-8">'+
							'				<input type="text" class="form-control" id="inputasetpribadi[]" name="inputasetpribadi[]">	'+
							'			</div>'+
							'			<label for="inputbisnislainrp" class="col-sm-2 col-form-label">{{$data->info2}}</label>'+
							'		</div>'+
							'	</div>'+
							'	<div class="col-md-3">'+
							'		<div class="form-group row">'+
							'			<label for="inputasetpribadirp" class="col-sm-4 col-form-label">{{$data->info3}}</label>'+
							'			<div class="col-sm-8">'+
							'				<input type="text" class="form-control" id="inputasetpribadirp[]" name="inputasetpribadirp[]" >	'+
							'			</div>'+
							'		</div>'+
							'	</div>'+
							'	<div class="col-md-2">'+
							'		<div class="form-group row">'+
							'			<div class="col-sm-10">'+
							'				<input type="text" class="form-control" id="inputasetpribadirp[]" name="inputasetpribadirp[]">	'+
							'			</div>'+
							'			<div class="col-sm-2">'+
							'				<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove8">X</button>'+
							'			</div>'+
							'		</div>'+
							'	</div>'+
							'</div>';
			$('#inpassetpribadi').append(txt);
		});


		$(document).on('click', '.btn_remove8', function(){  
			var button_id = $(this).attr("id");   
			$('#rowsassetpribadi'+button_id+'').remove();  
      });  
	});  
</script>



<script type="text/javascript">

    $(document).ready(function(){
		var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

		$('#addmodalbank').click(function(){ 
			var txt = 	'<div class="row" id="rowsmodalbank'+i+'">'+
							'	<div class="col-md-6">'+
							'		<div class="form-group row">'+
							'			<label for="inputmodalbankpersent" class="col-sm-4 col-form-label">Bank</label>'+
							'			<div class="col-sm-6">'+
							'				<input type="text" class="form-control" id="inputmodalbankpersent[]" name="inputmodalbankpersent[]" placeholder="%">	'+
							'			</div>'+
							'			<label for="inputmodalbankpersent" class="col-sm-2 col-form-label">%</label>'+
							'		</div>'+
							'	</div>'+
							'	<div class="col-md-5">'+
							'		<div class="form-group row">'+
							'			<div class="col-sm-10">'+
							'				<select class="form-control" id="inputmodalbanknama[]" name="inputmodalbanknama[]"> '+
							'				</select>'+
							'			</div>'+
							'			<div class="col-sm-2">'+
							'				<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove9">X</button>'+
							'			</div>'+
							'		</div>'+
							'	</div>'+
							'</div>';
			$('#inpmodalbank').append(txt);
		});


		$(document).on('click', '.btn_remove9', function(){  
			var button_id = $(this).attr("id");   
			$('#rowsmodalbank'+button_id+'').remove();  
      });  
	});  
</script>


<script type="text/javascript">

    $(document).ready(function(){
		var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

		$('#addjaminan').click(function(){ 
			var txt = 	'<div class="row" id="rowsjaminan'+i+'">'+
							'	<div class="col-md-2">'+
							'		<div class="form-group row">'+
							'			<div class="col-sm-12">'+
							'				<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis">	'+
							'			</div>'+
							'		</div>'+
							'	</div>'+
							'	<div class="col-md-5">'+
							'		<div class="form-group row">'+
							'			<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis</label>'+
							'			<div class="col-sm-6">'+
							'				<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis">	'+
							'			</div>'+
							'			<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis</label>'+
							'		</div>'+
							'	</div>'+
							'	<div class="col-md-3">'+
							'		<div class="form-group row">'+
							'			<label for="inputbisnislainrp" class="col-sm-3 col-form-label">123</label>'+
							'			<div class="col-sm-9">'+
							'				<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="Nilai Omset">'+
							'			</div>'+
							'		</div>'+
							'	</div>'+
							'	<div class="col-md-2">'+
							'		<div class="form-group row">'+
							'			<div class="col-sm-10">'+
							'				<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="Nilai Omset">'+
							'			</div>'+
							'			<div class="col-sm-2">'+
							'				<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removea">X</button>'+
							'			</div>'+
							'		</div>'+
							'	</div>'+
							'</div>';
			$('#inpjaminan').append(txt);
		});


		$(document).on('click', '.btn_removea', function(){  
			var button_id = $(this).attr("id");   
			$('#rowsjaminan'+button_id+'').remove();  
      });  
	});  
</script>




<script type="text/javascript">

    $(document).ready(function(){
		var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

		$('#addstatususaha').click(function(){ 
			var txt = 	'<div class="row" id="rowsstatususaha'+i+'">'+
							'	<div class="col-md-5">'+
							'		<div class="form-group row">'+
							'			<div class="col-sm-12">'+
							'				<select class="form-control btn btn-block btn-primary btn-lg" id="inputstatus[]" name="inputstatus[]" style="height: 60px;background: rgba(51,122,183,1);"> '+
							'				</select>'+
							'			</div>'+
							'		</div>'+
							'	</div>'+
							'	<div class="col-md-1">'+
							'		<div class="form-group row">'+
							'			<div class="col-sm-12">'+
							'				<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removeb">X</button>'+
							'			</div>'+
							'		</div>'+
							'	</div>'+
							'</div>'
			$('#inpstatususaha').append(txt);
		});


		$(document).on('click', '.btn_removeb', function(){  
			var button_id = $(this).attr("id");   
			$('#rowsstatususaha'+button_id+'').remove();  
      });  
	});  
</script>


<script type="text/javascript">

    $(document).ready(function(){
		var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  

		$('#addjaminan').click(function(){ 
			var txt = 	'<div class="row" id="rowsjaminan'+i+'">'+
							'	<div class="col-md-2">'+
							'		<div class="form-group row">'+
							'			<div class="col-sm-12">'+
							'				<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis">	'+
							'			</div>'+
							'		</div>'+
							'	</div>'+
							'	<div class="col-md-5">'+
							'		<div class="form-group row">'+
							'			<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis</label>'+
							'			<div class="col-sm-6">'+
							'				<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis">	'+
							'			</div>'+
							'			<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis</label>'+
							'		</div>'+
							'	</div>'+
							'	<div class="col-md-3">'+
							'		<div class="form-group row">'+
							'			<label for="inputbisnislainrp" class="col-sm-3 col-form-label">123</label>'+
							'			<div class="col-sm-9">'+
							'				<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="Nilai Omset">'+
							'			</div>'+
							'		</div>'+
							'	</div>'+
							'	<div class="col-md-2">'+
							'		<div class="form-group row">'+
							'			<div class="col-sm-10">'+
							'				<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="Nilai Omset">'+
							'			</div>'+
							'			<div class="col-sm-2">'+
							'				<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removea">X</button>'+
							'			</div>'+
							'		</div>'+
							'	</div>'+
							'</div>';
			$('#inpjaminan').append(txt);
		});


		$(document).on('click', '.btn_removea', function(){  
			var button_id = $(this).attr("id");   
			$('#rowsjaminan'+button_id+'').remove();  
      });  
	});  
</script>



						


<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
				var reader = new FileReader();
				
				reader.onload = function (e) {
					$('#files-tag').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
		}
	}
	$("#files").change(function(){
		readURL(this);
	});
</script>	

<script type="text/javascript">
	function myduplikatalamat() 
	{
		document.getElementById("inputalamat").value    = document.getElementById("inputalamatktp").value;
		document.getElementById("inputkelurahan").value = document.getElementById("inputkelurahanktp").value;
		document.getElementById("inputkecamatan").value = document.getElementById("inputkecamatanktp").value;
		document.getElementById("inputkota").value      = document.getElementById("inputkotaktp").value;
		document.getElementById("inputpropinsi").value  = document.getElementById("inputpropinsiktp").value;
		document.getElementById("inputkodepos").value   = document.getElementById("inputkodeposktp").value;
	}

	function myduplikatalamatusaha() 
	{
		document.getElementById("inputalamatusaha").value    = document.getElementById("inputalamatktp").value;
		document.getElementById("inputkelurahanusaha").value = document.getElementById("inputkelurahanktp").value;
		document.getElementById("inputkecamatanusaha").value = document.getElementById("inputkecamatanktp").value;
		document.getElementById("inputkotausaha").value      = document.getElementById("inputkotaktp").value;
		document.getElementById("inputpropinsiusaha").value  = document.getElementById("inputpropinsiktp").value;
		document.getElementById("inputkodeposusaha").value   = document.getElementById("inputkodeposktp").value;
	}

	
</script>

<script type="text/javascript">
	function mykelurahan(kode, isi) 
	{
		var  txt = isi.value;
		var i = txt.search('-/-');
		if (i > 0)
		{
			var nkelurahan = txt.substr(0, i);
			var  txt = txt.substr(i+3);
			var i = txt.search('-/-');
			var nkecamatan = txt.substr(0, i);
			var  txt = txt.substr(i+3);
			var i = txt.search('-/-');
			var nkabupaten = txt.substr(0, i);
			var  txt = txt.substr(i+3);
			var i = txt.search('-/-');
			var nprovinsi = txt.substr(0, i);
			var  txt = txt.substr(i+3);
			var i = txt.search('-/-');
			var nkodepos = txt.substr(0, i);
			if (kode == 1){
				document.getElementById("inputkelurahanktp").value = nkelurahan;
				document.getElementById("inputkecamatanktp").value = nkecamatan;
				document.getElementById("inputkotaktp").value = nkabupaten;
				document.getElementById("inputpropinsiktp").value = nprovinsi;
				document.getElementById("inputkodeposktp").value = nkodepos;
			} else {
				document.getElementById("inputkelurahan").value = nkelurahan;
				document.getElementById("inputkecamatan").value = nkecamatan;
				document.getElementById("inputkota").value = nkabupaten;
				document.getElementById("inputpropinsi").value = nprovinsi;
				document.getElementById("inputkodepos").value = nkodepos;
			}
		}
	}
</script>




<script type="text/javascript">

	

	$('#button').click(function(){
		$("input[type='file']").trigger('click');
	})

	$("input[type='file']").change(function(){
		$('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
	})  


	

	function myFunction(id) {
		
		if (id == 1){
			$("#custom-content-below-settings-tab-1").click();
		} else if (id == 2){
			$("#custom-content-below-settings-tab-2").click();
		} else if (id == 3){
			$("#custom-content-below-settings-tab-3").click();
		} else if (id == 4){
			$("#custom-content-below-settings-tab-4").click();
		} else if (id == 5){
			$("#custom-content-below-settings-tab-5").click();
		} 
              

	
	// if(id==1){
	// 	document.getElementById("disp1").style.display = block;
	// 	document.getElementById("disp2").style.display = none;
	// 	document.getElementById("disp3").style.display = none;
	// 	document.getElementById("disp4").style.display = none;
	// 	document.getElementById("disp5").style.display = none;
	// } else if(id==1){
	// 	document.getElementById("disp1").style.display = none;
	// 	document.getElementById("disp2").style.display = block;
	// 	document.getElementById("disp3").style.display = none;
	// 	document.getElementById("disp4").style.display = none;
	// 	document.getElementById("disp5").style.display = none;
	// } else if(id==1){
	// 	document.getElementById("disp1").style.display = none;
	// 	document.getElementById("disp2").style.display = none;
	// 	document.getElementById("disp3").style.display = block;
	// 	document.getElementById("disp4").style.display = none;
	// 	document.getElementById("disp5").style.display = none;
	// } else if(id==1){
	// 	document.getElementById("disp1").style.display = none;
	// 	document.getElementById("disp2").style.display = none;
	// 	document.getElementById("disp3").style.display = none;
	// 	document.getElementById("disp4").style.display = block;
	// 	document.getElementById("disp5").style.display = none;
	// }  else )
	// 	document.getElementById("disp1").style.display = none;
	// 	document.getElementById("disp2").style.display = none;
	// 	document.getElementById("disp3").style.display = none;
	// 	document.getElementById("disp4").style.display = none;
	// 	document.getElementById("disp5").style.display = block;
	// }


		
	// 	if (id===1){
			
			
	// 		document.getElementById("tab1").style.display = "block";
	// 		document.getElementById("tab2").style.display = "none";
	// 		document.getElementById("tab3").style.display = "none";
	// 		document.getElementById("tab4").style.display = "none";
	// 		document.getElementById("tab5").style.display = "none";
	// 	} else if (id===2){
	// 		document.getElementById("tab1").style.display = "none";
	// 		document.getElementById("tab2").style.display = "block";
	// 		document.getElementById("tab3").style.display = "none";
	// 		document.getElementById("tab4").style.display = "none";
	// 		document.getElementById("tab5").style.display = "none";
	// 	} else if (id===3){
	// 		document.getElementById("tab1").style.display = "none";
	// 		document.getElementById("tab2").style.display = "none";
	// 		document.getElementById("tab3").style.display = "block";
	// 		document.getElementById("tab4").style.display = "none";
	// 		document.getElementById("tab5").style.display = "none";
	// 	} else if (id===4){
	// 		document.getElementById("tab1").style.display = "none";
	// 		document.getElementById("tab2").style.display = "none";
	// 		document.getElementById("tab3").style.display = "none";
	// 		document.getElementById("tab4").style.display = "block";
	// 		document.getElementById("tab5").style.display = "none";
	// 	} else {
	// 		document.getElementById("tab1").style.display = "none";
	// 		document.getElementById("tab2").style.display = "none";
	// 		document.getElementById("tab3").style.display = "none";
	// 		document.getElementById("tab4").style.display = "none";
	// 		document.getElementById("tab5").style.display = "block";
	// 	}
	
	}
</script>
</body>
</html>