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
		<form class="form-horizontal">	
			

			<input type="hidden" id="inputuserid" value="{{$inputuserid}}">

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
										<img src="" id="files-tag" width="80%" style="
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
												<input type="text" class="form-control" id="inputnamalengkap" placeholder="Nama Lengkap">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputnamaalias" class="col-sm-2 col-form-label">Alias</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputnamaalias" placeholder="Alias">
											</div>
										</div>

										<div class="form-group row">
											<label for="inputtanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputtinputtanggallahirgllahir" placeholder="Nama Lengkap">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputtempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputtempatlahir" placeholder="Tempat Lahir">
											</div>
										</div>

										<div class="form-group row">
											<label for="inputnoktp" class="col-sm-2 col-form-label">No KTP</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputnoktp" placeholder="No KTP">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputagama" class="col-sm-2 col-form-label">Agama</label>
											<div class="col-sm-4">
												<select class="form-control" id="inputagama"> 
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

												<select class="form-control" id="inputgolongandarah"> 
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
												<textarea class="form-control" rows="10" id="inputalamatktp" placeholder="Enter ..."></textarea>
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
												<input type="text" class="form-control" id="inputkecamatanktp" placeholder="Kecamatan">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkotaktp" class="col-sm-3 col-form-label">Kabupaten</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkotaktp" placeholder="Kabupaten">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputpropinsiktp" class="col-sm-3 col-form-label">Provinsi</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputpropinsiktp" placeholder="Provinsi">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkodeposktp" class="col-sm-3 col-form-label">Kode Pos</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkodeposktp" placeholder="Kode Pos">
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
								<h3 class="card-title font36">Alamat Rumah</h3>

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
												<textarea class="form-control" rows="10" id="inputalamat" placeholder="Enter ..."></textarea>
											</div>
										</div>
									</div>
									<!-- /.col -->
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputkelurahan" class="col-sm-3 col-form-label">Kelurahan</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkelurahan" placeholder="Kelurahan">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkecamatan" placeholder="Kecamatan">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkota" class="col-sm-3 col-form-label">Kabupaten</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkota" placeholder="Kabupaten">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputpropinsi" class="col-sm-3 col-form-label">Provinsi</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputpropinsi" placeholder="Provinsi">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputkodepos" class="col-sm-3 col-form-label">Kode Pos</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputkodepos" placeholder="Kode Pos">
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
													<input type="text" class="form-control" id="inputtelpon" ata-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label for="inputfax" class="col-sm-3 col-form-label">Fax.</label>
											<div class="col-sm-9">
												<!-- <input type="text" class="form-control" id="inputkelurahanktp" placeholder="Kelurahan"> -->
												<div class="input-group">
													<input type="text" class="form-control" id="inputfax" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
												</div>
											</div>
										</div>

										<div class="form-group row">
											<label for="inputnotelp" class="col-sm-3 col-form-label">Media Sosial</label>
											<div class="col-sm-9">
												<!-- <input type="text" class="form-control" id="inputkelurahanktp" placeholder="Kelurahan"> -->
												<select class="form-control" id="inputgoldarah"> 
													<option>option 1</option>
													<option>option 2</option>
													<option>option 3</option>
													<option>option 4</option>
													<option>option 5</option>
												</select>
											</div>
										</div>

										<div class="form-group row" >
										<button type="button" style="height:50px;width:50px"><ion-icon name="add-circle" ></ion-icon>Add</button>
										</div>


										

									</div>
									<!-- /.col -->
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputhp" class="col-sm-3 col-form-label">No HP</label>
											<div class="col-sm-9">
												<!-- <input type="text" class="form-control" id="inputkelurahanktp" placeholder="Kelurahan"> -->
												<div class="input-group">
													<input type="text" class="form-control" id="inputhp" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputemail" class="col-sm-3 col-form-label">Email</label>
											<div class="col-sm-9">
												<input type="email" class="form-control" id="inputemail" placeholder="Email">
											</div>
										</div>

										<div class="form-group row collaps">
											<div class="col-sm-12">
												<input type="text" class="form-control" id="inputnamaakun" placeholder="Nama Akun Media Sosial">
											</div>
										</div>
										
										
									</div>
									<!-- /.col -->
								</div>
								<!-- /.row -->

								
								
								
							</div>
							<!-- /.card-body -->
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
									<div class="col-md-1">
										<div class="form-group row kotakexcel">
											<div for="inputbentukusaha" class="col-sm-12 col-form-label font_21" id="">No</div>
											
										</div>
									</div>
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

									<div class="col-md-1">
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
								<?php 
								foreach ($keluarga as $key => $value) {
									?>
									<div class="row">
									<div class="col-md-1">
										<div class="form-group row kotakexcel_kosong">
											<label for="inputkeluargano" class="col-sm-12 col-form-label">{{$value->urut}}</label>
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel_kosong">
											<label for="inputkeluarganama" class="col-sm-12 col-form-label">{{$value->nama}}</label>
											
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel_kosong">
											<label for="inputkeluargatempatlahir" class="col-sm-12 col-form-label">{{$value->tmplahir}}</label>
											
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel_kosong">
											<label for="inputkeluargatanggallahir" class="col-sm-12 col-form-label">{{$value->tgllahir}}</label>
											
										</div>
									</div>

									<div class="col-md-1">
										<div class="form-group row kotakexcel_kosong">
											<label for="inputkeluargasex" class="col-sm-12 col-form-label">{{$value->sex}}</label>
											
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel_kosong">
											<label for="inputkeluargastatus" class="col-sm-12 col-form-label">{{$value->stakel}}</label>
											
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group row kotakexcel_kosong">
											<label for="inputkeluargapendidikan" class="col-sm-12 col-form-label">{{$value->stapendidikan}}</label>
											
										</div>
									</div>
								</div>
									<?php
								}
								?>

									<div class="form-group row" >
										<button type="button" style="height:50px;width:50px"><ion-icon name="add-circle" ></ion-icon>Add</button>
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
												<textarea class="form-control" rows="10" id="inputhobbys" placeholder="Enter ..."></textarea>
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
													<input type="text" class="form-control" id="inputbentukusaha" placeholder="Tipe Badan Hukum">	
												</div>
											</div>

											<div class="form-group row">
												<label for="inputbadanhukum" class="col-sm-3 col-form-label">Tipe Badan Hukum</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputbadanhukum" placeholder="Tipe Badan Hukum">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputnamausaha" class="col-sm-3 col-form-label">Nama Usaha</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputnamausaha" placeholder="Nama Usaha">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputlamausaha" class="col-sm-3 col-form-label">Lama Usaha</label>
												<div class="col-sm-6">
													<input type="number" class="form-control" id="inputlamausaha" placeholder="Lama Usaha">
												</div>
												<label for="inputlamausaha" class="col-sm-3 col-form-label">Tahun</label>
											</div>

										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputnpwp" class="col-sm-3 col-form-label">NPWP</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputnpwp" placeholder="NPWP">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputheadgroup" class="col-sm-3 col-form-label">Head Group</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputheadgroup" placeholder="Head Group">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkodesap" class="col-sm-3 col-form-label">Kode SAP</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkodesap" placeholder="Kabupaten">
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
								<div class="card-body">
									<div class="row">
										<div class="col-md-2">
											<div class="form-group row">
												
											<button type="button" id="inputstatus" class="btn btn-block btn-primary btn-lg" style="background:rgba(51,122,183,1);color:white;">Petambak</button>
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




							<div class="card card-default">
								<div class="card-header">
									<h3 class="card-title font36">Kontak</h3>

									
									
									<div id="Group_699_sf">
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
												<label for="inputtelponusaha" class="col-sm-3 col-form-label">No Telp.</label>
												<div class="col-sm-9">
													<!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
													<div class="input-group">
														<input type="text" id="inputtelponusaha" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
													</div>
												</div>
											</div>

											<div class="form-group row">
												<label for="inputfaxusaha" class="col-sm-3 col-form-label">Fax.</label>
												<div class="col-sm-9">
													<!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
													<div class="input-group">
														<input type="text" class="form-control" id="inputfaxusaha" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
													</div>
												</div>
											</div>

											<div class="form-group row">
												<label for="inputnotelp" class="col-sm-3 col-form-label">Media Sosial</label>
												<div class="col-sm-9">
													<!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
													<select class="form-control" id="inputgoldarah"> 
														<option>option 1</option>
														<option>option 2</option>
														<option>option 3</option>
														<option>option 4</option>
														<option>option 5</option>
													</select>
												</div>
											</div>

										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputhpusaha" class="col-sm-3 col-form-label">No HP</label>
												<div class="col-sm-9">
													<!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
													<div class="input-group">
														<input type="text" class="form-control" id="inputhpusaha" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputemailusaha" class="col-sm-3 col-form-label">Email</label>
												<div class="col-sm-9">
													<input type="email" class="form-control" id="inputemailusaha" placeholder="Email">
												</div>
											</div>

											<div class="form-group row collaps">
												<div class="col-sm-12">
													<input type="text" class="form-control" id="inputnamaakun" placeholder="Nama Akun Media Sosial">
												</div>
											</div>
											
											
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
									<div class="form-group row" >
										<button type="button" style="height:50px;width:50px"><ion-icon name="add-circle" ></ion-icon>Add</button>
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

									<div class="row">
										<div class="col-md-1">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputbentukusaha" class="col-sm-12 col-form-label">1</label>
												
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputtipebadanhukum" class="col-sm-12 col-form-label">Supram</label>
												
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputnamausaha" class="col-sm-12 col-form-label">20801117</label>
												
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputlamausaha" class="col-sm-12 col-form-label">Saudara</label>
												
											</div>
										</div>
									</div>
									<!-- /.row -->
									<div class="form-group row" >
										<button type="button" style="height:50px;width:50px"><ion-icon name="add-circle" ></ion-icon>Add</button>
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
									<h3 class="card-title font36">Area Penjualan</h3>

									<div class="card-tools">
										<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
										<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-md-3">
											<div class="form-group row kotakexcel">
												<label for="inputbentukusaha" class="col-sm-12 col-form-label">Jenis</label>
												
											</div>
										</div>
										<div class="col-md-3">
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

									<div class="row">
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputbentukusaha" class="col-sm-12 col-form-label">1</label>
												
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputtipebadanhukum" class="col-sm-12 col-form-label">Supram</label>
												
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputnamausaha" class="col-sm-12 col-form-label">20801117</label>
												
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputlamausaha" class="col-sm-12 col-form-label">Saudara</label>
												
											</div>
										</div>
									</div>
									<!-- /.row -->
									<div class="form-group row" >
										<button type="button" style="height:50px;width:50px"><ion-icon name="add-circle" ></ion-icon>Add</button>
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
										<div class="col-md-1">
											<div class="form-group row kotakexcel">
												<label for="inputbentukusaha" class="col-sm-12 col-form-label">No</label>
												
											</div>
										</div>
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
										<div class="col-md-3">
											<div class="form-group row kotakexcel">
												<label for="inputlamausaha" class="col-sm-12 col-form-label">Kuantitas (Kg)</label>
												
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-1">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputbentukusaha" class="col-sm-12 col-form-label">1</label>
												
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputtipebadanhukum" class="col-sm-12 col-form-label">Supram</label>
												
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputnamausaha" class="col-sm-12 col-form-label">20801117</label>
												
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputlamausaha" class="col-sm-12 col-form-label">Saudara</label>
												
											</div>
										</div>
									</div>
									<!-- /.row -->
									<div class="form-group row" >
										<button type="button" style="height:50px;width:50px"><ion-icon name="add-circle" ></ion-icon>Add</button>
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
							
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis Lain</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputbisnislain[]" placeholder="Nama Bisnis">	
											</div>
										</div>

										

									</div>
									<!-- /.col -->
									<div class="col-md-5">
										<div class="form-group row">
											<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Omset (Rp)</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="inputbisnislainrp[]" placeholder="Nilai Omset">
											</div>
										</div>
									</div>

									<div class="col-md-1">
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
									</div>
								</div>
								<!-- /.row -->
								<div class="form-group row" >
										<button type="button" style="height:50px;width:50px"><ion-icon name="add-circle" ></ion-icon>Add</button>
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
							
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputasetpribadi" class="col-sm-3 col-form-label">Asset Pribadi</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" id="inputasetpribadi[]" placeholder="Nama Asset">	
											</div>
										</div>

										

									</div>
									<!-- /.col -->
									<div class="col-md-5">
										<div class="form-group row">
											<label for="inputasetpribadirp" class="col-sm-3 col-form-label">Nilai Aset (Rp)</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" id="inputasetpribadirp[]" placeholder="Nilai">
											</div>
										</div>
									</div>

									<div class="col-md-1">
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
									</div>
								</div>
								<!-- /.row -->
								<div class="form-group row" >
										<button type="button" style="height:50px;width:50px"><ion-icon name="add-circle" ></ion-icon>Add</button>
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
												<input type="text" class="form-control" id="inputmodalsendiripersent" placeholder="%">	
											</div>
											<label for="inputmodalsendiripersent" class="col-sm-2 col-form-label">%</label>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group row">
											<label for="inputmodallainlainpersent" class="col-sm-2 col-form-label">Lain-lain</label>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="inputmodallainlainpersent" placeholder="%">	
											</div>
											<label for="inputmodallainlainpersent" class="col-sm-1 col-form-label">%</label>
										</div>
									</div>
									
								</div>


								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label for="inputmodalbankpersent" class="col-sm-4 col-form-label">Bank</label>
											<div class="col-sm-6">
												<input type="text" class="form-control" id="inputmodalbankpersent[]" placeholder="%">	
											</div>
											<label for="inputmodalbankpersent" class="col-sm-2 col-form-label">%</label>
										</div>

										

									</div>
									<!-- /.col -->
									<div class="col-md-5">
										<div class="form-group row">
											<div class="col-sm-11">
												<select class="form-control" id="inputmodalbanknama[]"> 
													<option>option 1</option>
													<option>option 2</option>
													<option>option 3</option>
													<option>option 4</option>
													<option>option 5</option>
												</select>
											</div>
										</div>
									</div>

									<div class="col-md-1">
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
									</div>
								</div>
								<!-- /.row -->
								<div class="form-group row" >
										<button type="button" style="height:50px;width:50px"><ion-icon name="add-circle" ></ion-icon>Add</button>
										</div>
							</div>


							<!-- /.card-body -->
							<div class="card-footer">
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
							</div>
						</div>

              </div>
              <div class="tab-pane fade active show" id="tab4" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">

					<div class="card card-default">
						<div class="card-header">
							<h3 class="card-title font36">Jaminan</h3>

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
										<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis Lain</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="inputbisnislain[]" placeholder="Nama Bisnis">	
										</div>
									</div>

									

								</div>
								<!-- /.col -->
								<div class="col-md-5">
									<div class="form-group row">
										<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Omset (Rp)</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" id="inputbisnislainrp[]" placeholder="Nilai Omset">
										</div>
									</div>
								</div>

								<div class="col-md-1">
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
								</div>
							</div>
							<!-- /.row -->
							<div class="form-group row" >
										<button type="button" style="height:50px;width:50px"><ion-icon name="add-circle" ></ion-icon>Add</button>
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
												<textarea class="form-control" rows="10" id="inputkarakteristik" placeholder="Enter ..."></textarea>
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
							
							<div class="card-body">
								<div class="row">
									<!-- <div class="col-md-6"> -->
										
									<div class="col-12 col-sm-2">
										<div class="form-group row">
											<div class="product-image-thumb col-sm-10">
												<img src="../../dist/img/prod-2.jpg" alt="Product Image">
											</div>	
											<div class="col-sm-2" >
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
											
										</div>
									
									</div>

								</div>
								<!-- /.row -->
								<div class="form-group row" >
										<button type="button" style="height:50px;width:50px"><ion-icon name="add-circle" ></ion-icon>Add</button>
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
							<button type="button" class="btn btn-block btn-primary btn-lg" style="background: rgba(15,199,89,1);">Save</button>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group row">
						<div class="col-sm-12">
							<button type="button" class="btn btn-block btn-danger btn-lg">Cancel</button>
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

<!-- <script type="text/javascript">
	$('#pil1').on('click',function(){
		if( $(this).val()==="0"){
			$("#pil1").css('background-color', 'blue');
			$("#pil1").css('background', 'blue');
		} else {
			$("#pil2").css('background-color', 'white');
			$("#pil3").css('background-color', 'white');
			$("#pil4").css('background-color', 'white');
			$("#pil5").css('background-color', 'white');
		}
	});
	$('#pil2').on('click',function(){
		if( $(this).val()==="0"){
			$("#pil2").css('background-color', 'blue');
		} else {
			$("#pil1").css('background-color', 'white');
			$("#pil3").css('background-color', 'white');
			$("#pil4").css('background-color', 'white');
			$("#pil5").css('background-color', 'white');

		}
	});
</script> -->

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

<!-- <script type="text/javascript">
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
</script> -->

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