
<!DOCTYPE html>
<html>
<head>
	<title>Laravel 5.7 Autocomplete Search using Bootstrap Typeahead JS - ItSolutionStuff.com</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="http://localhost:8000/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="http://localhost:8000/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="http://localhost:8000/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- daterange picker -->
	<link rel="stylesheet" href="http://localhost:8000/plugins/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="http://localhost:8000/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>

	<!-- date-range-picker -->
	<script src="http://localhost:8000/plugins/bootstrap-daterangepicker/daterangepicker.css"></script>
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
		.styledatakeluarga {
			border: 1px solid #ced4da;
		}

		.tm {
        position: relative;
        /*width: 150px; height: 20px;*/
        /*color: white;*/
        
        display: block;
        width: 100%;
        height: 2.4rem;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        box-shadow: inset 0 0 0 transparent;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        align-content: center;
    }

    .tm:before {
        position: absolute;
        top: 10px; left: 3px;
        content: attr(data-date);
        display: block;
        color: #495057;
    }

    .tm::-webkit-datetime-edit, .tm::-webkit-inner-spin-button, .tm::-webkit-clear-button {
        display: none;
    }

    .tm::-webkit-calendar-picker-indicator {
        position: absolute;
        top: 10px;
        right: 0;
        color: #495057;
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
      fill: white;;
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
      color: rgba(84,84,84,1);
	}
   #Rectangle_332_wj {
		fill: white;
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
		color: rgba(84,84,84,1);
	}
	
   #Rectangle_332_yl {
		fill: white;
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
		color: rgba(84,84,84,1);
	}
	
   #Rectangle_332_zw {
		fill: white;
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
		color: rgba(84,84,84,1);
	}
   #Rectangle_332_ {
		fill: white;
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
		color: rgba(84,84,84,1);
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
				<a href="#" class="nav-link atas" id="fon_24_wh">FISH FEED</a>
			</li>
			</ul>
			<ul class="navbar-nav ml-auto">
			<div class="user-panel mt-3 pb-3 mb-3 d-flex" style="top: 20px;height: 75px;">
				<span id="fon_24_wh">Supram</span>
				<div class="image" style="
					margin-right: 59px;
					margin-left: 10px;
				">
					<img src="http://localhost:8000/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
		</div>
	</nav>

	<!-- Main Sidebar Container -->
	<div class="formwrapper awal" style="
		top: 150px;">
			157			
			
			<form method="post" action="/detailsave/157" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="p1F4bP4pdpydX3siTMMs77QWWTnuE6tBCndcRd7n">
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
						<input type="hidden" id="inputuid" name="inputuid" value="157">
						<input type="hidden" id="inputuserid" name="inputuserid" value="agent1">
						<div class="tab-pane fade active show" id="tab1" role="tabpanel" aria-labelledby="custom-content-below-home-tab">

							<div class="card card-default">
								<div class="card-header">
									<h3 class="card-title font36">Informasi Personal: 157</h3>

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
													border-color: black;
											">  
											<input type="file" name="files" id="files">
											<span id='val'></span>
											<span id='button'>Rubah Foto Profil</span>
										</div>
										<!-- /.col -->
										<div class="col-md-8">
											<div class="form-group row">
												<label for="inputfullname" class="col-sm-2 col-form-label">Nama Lengkap</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputfullname" name="inputfullname" placeholder="Nama Lengkap" value="agent1">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputnamaalias" class="col-sm-2 col-form-label">Alias</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputnamaalias" name="inputnamaalias" placeholder="Alias" value="agen1-alias">
												</div>
											</div>
											

											<div class="form-group row">
												<label for="inputbirthdate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
												<div class="col-sm-10">
													<!-- <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="far fa-calendar-alt"></i>
														</span>
													</div> -->
													<input type="date" class="form-control  pull-right" id="inputbirthdate" name="inputbirthdate" placeholder="dd.mm.yyyy" value="2018-03-05">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputbirthplace" class="col-sm-2 col-form-label">Tempat Lahir</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputbirthplace" name="inputbirthplace" placeholder="Tempat Lahir" value="Jakarta">
												</div>
											</div>

											<div class="form-group row">
												<label for="inputnoktp" class="col-sm-2 col-form-label">No KTP</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputnoktp" name="inputnoktp" placeholder="No KTP" value="1234">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputagama" class="col-sm-2 col-form-label">Agama</label>
												<div class="col-sm-4">
													<select class="form-control" id="inputagama" name="inputagama"> 
																											<option value="1" >Buddha</option>
																												<option value="2" >Hindu</option>
																												<option value="3" >Islam</option>
																												<option value="4" >Katolik</option>
																												<option value="5" >Khonghucu</option>
																												<option value="6" >Kristen</option>
																											</select>

												</div>
											</div>

											<div class="form-group row">
												<label for="inputgoldarah" class="col-sm-2 col-form-label">Golongan Darah</label>
												<div class="col-sm-4">

													<select class="form-control" id="inputgoldarah" name="inputgoldarah"> 
																											<option value="1" >A</option>
																												<option value="2" >AB</option>
																												<option value="3" >B</option>
																												<option value="4" >O</option>
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
												<label for="inputalmtktp" class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9">
													<textarea class="form-control" rows="10" id="inputalmtktp" name="inputalmtktp" placeholder="Enter ...">Perumahan Dmapple Residence Blok F 5</textarea>
												</div>
											</div>
										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
											
												<label for="inputkelktp" class="col-sm-3 col-form-label">Kelurahan</label>
												
												<div class="col-sm-9">
													<input type="text" class="form-control" name="inputkelktp" id="inputkelktp" placeholder="Kelurahan" 
													onchange="mykelurahan(1,this)" value="RATU JAYA"
												>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkecktp" class="col-sm-3 col-form-label">Kecamatan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkecktp1" placeholder="Kecamatan" value="CIPAYUNG" disabled>
													<input type="hidden" class="form-control" id="inputkecktp" name="inputkecktp" placeholder="Kecamatan" value="CIPAYUNG">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkotaktp" class="col-sm-3 col-form-label">Kabupaten</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkotaktp1" placeholder="Kabupaten" value="DEPOK" disabled>
													<input type="hidden" class="form-control" id="inputkotaktp" name="inputkotaktp" placeholder="Kabupaten" value="DEPOK">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputpropktp" class="col-sm-3 col-form-label">Provinsi</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputpropktp1" placeholder="Provinsi" value="JAWA BARAT" disabled>
													<input type="hidden" class="form-control" id="inputpropktp" name="inputpropktp" placeholder="Provinsi" value="JAWA BARAT">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkdposktp" class="col-sm-3 col-form-label">Kode Pos</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkdposktp1" placeholder="Kode Pos" value="16439" disabled>
													<input type="hidden" class="form-control" id="inputkdposktp" name="inputkdposktp" placeholder="Kode Pos" value="16439">
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
												<label for="inputalmtrmh" class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9">
													<!-- <input type="text" class="form-control" id="inputfullname" placeholder="Nama Lengkap"> -->
													<textarea class="form-control" rows="10" id="inputalmtrmh" name="inputalmtrmh" placeholder="Enter ..." value="Jakarta">Jakarta</textarea>
												</div>
											</div>
										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputkelrmh" class="col-sm-3 col-form-label">Kelurahan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkelrmh" name="inputkelrmh" placeholder="Kelurahan" onchange="mykelurahan(2,this)" value="RATU JAYA">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkecrmh" class="col-sm-3 col-form-label">Kecamatan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkecrmh1" placeholder="Kecamatan" value="CIPAYUNG" disabled>
													<input type="hidden" class="form-control" id="inputkecrmh" name="inputkecrmh" placeholder="Kecamatan" value="CIPAYUNG">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkotarmh" class="col-sm-3 col-form-label">Kabupaten</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkotarmh1" placeholder="Kabupaten" value="DEPOK" disabled>
													<input type="hidden" class="form-control" id="inputkotarmh" name="inputkotarmh" placeholder="Kabupaten" value="DEPOK">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputproprmh" class="col-sm-3 col-form-label">Provinsi</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputproprmh1"  placeholder="Provinsi" value="JAWA BARAT" disabled>
													<input type="hidden" class="form-control" id="inputproprmh" name="inputproprmh" placeholder="Provinsi" value="JAWA BARAT">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkdposrmh" class="col-sm-3 col-form-label">Kode Pos</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkdposrmh1" placeholder="Kode Pos" value="16439" disabled>
													<input type="hidden" class="form-control" id="inputkdposrmh" name="inputkdposrmh" placeholder="Kode Pos" value="16439">
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
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputtlppri" class="col-sm-3 col-form-label">No Telp.</label>
												<div class="col-sm-9">
													<div class="input-group">
														<input type="text" class="form-control" id="inputtlppri" name="inputtlppri" ata-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true" value="1234">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputfaxpri" class="col-sm-3 col-form-label">Fax.</label>
												<div class="col-sm-9">
													<div class="input-group">
														<input type="text" class="form-control" id="inputfaxpri" name="inputfaxpri" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true" value="bizquarte@gmail.com">
													</div>
												</div>
											</div>

										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputhppri" class="col-sm-3 col-form-label">No HP</label>
												<div class="col-sm-9">
													<div class="input-group">
														<input type="text" class="form-control" id="inputhppri" name="inputhppri" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true" value="2345">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputemailpri" class="col-sm-3 col-form-label">Email</label>
												<div class="col-sm-9">
													<input type="email" class="form-control" id="inputemailpri" name="inputemailpri" placeholder="Email" value="agen1.agent1@gmail.com">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card card-default">
								<div class="card-body" id="inpmedsospri">
																				<div class="row" id="rowsmedsospri0">
											<div class="col-md-6">
												<div class="form-group row">
													<label for="inputusahamediasosial" class="col-sm-3 col-form-label">Media Sosial</label>
													<div class="col-sm-9">
														
														<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputmedsospri[]" name="inputmedsospri[]"> 
																													<option value="1" selected>Account ID Medsos</option>
																												</select>

													</div>
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group row">
													<div class="col-sm-12">
														<input type="text" class="form-control" id="inputmedsosakunpri[]" name="inputmedsosakunpri[]" placeholder="Nama Akun Media Sosial" value="@1234">
													</div>
												</div>
											</div>
											<div class="col-md-1">
												<div class="form-group row">
													<div class="col-sm-12">
														<!-- <button type="button" name="remove" id="0" class="btn btn-danger btn_remove2">X</button> -->
													</div>
												</div>
											</div>
											<!-- /.col -->
										</div>
																				<div class="row" id="rowsmedsospri1">
											<div class="col-md-6">
												<div class="form-group row">
													<label for="inputusahamediasosial" class="col-sm-3 col-form-label">Media Sosial</label>
													<div class="col-sm-9">
														
														<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputmedsospri[]" name="inputmedsospri[]"> 
																													<option value="1" selected>Account ID Medsos</option>
																												</select>

													</div>
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group row">
													<div class="col-sm-12">
														<input type="text" class="form-control" id="inputmedsosakunpri[]" name="inputmedsosakunpri[]" placeholder="Nama Akun Media Sosial" value="@2345">
													</div>
												</div>
											</div>
											<div class="col-md-1">
												<div class="form-group row">
													<div class="col-sm-12">
														<!-- <button type="button" name="remove" id="1" class="btn btn-danger btn_remove2">X</button> -->
													</div>
												</div>
											</div>
											<!-- /.col -->
										</div>
										
										<!-- /.row -->
									</div>
									<div class="col-md-1">
										<div class="form-group row ">
											<div class="col-sm-12">
												<button type="button" style="height:50px;width:50px" name="addmedsospri" id="addmedsospri" class="btn btn-success">Add</button>
											</div>
										</div>
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
												<div for="inputbtkush" class="col-sm-12 col-form-label font_21" id="">No</div>
												
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

																		<input type="hidden" id="opthubkelga" value="&lt;option value=&quot;&quot;&gt;-&lt;/option&gt;&lt;option value=&quot;1&quot;&gt;Suami/Istri&lt;/option&gt;&lt;option value=&quot;2&quot;&gt;Anak&lt;/option&gt;&lt;option value=&quot;3&quot;&gt;Orang Tua&lt;/option&gt;&lt;option value=&quot;4&quot;&gt;Saudara&lt;/option&gt;">
									<input type="hidden" id="optsex" value="&lt;option value=&quot;1&quot;&gt;L (Laki Laki)&lt;/option&gt;&lt;option value=&quot;2&quot;&gt;P (Perempuan)&lt;/option&gt;">
									<input type="hidden" id="optsekolah" value="&lt;option value=&quot;1&quot;&gt;SMP&lt;/option&gt;&lt;option value=&quot;2&quot;&gt;SMA&lt;/option&gt;&lt;option value=&quot;3&quot;&gt;Diploma/Akademi&lt;/option&gt;&lt;option value=&quot;4&quot;&gt;S1/D4&lt;/option&gt;&lt;option value=&quot;5&quot;&gt;S2&lt;/option&gt;">
								<div class="card-body"  id="inpkelga">
								
																		<!-- <div class="row" id="rowkelga0"> -->
									<div class="row" id="rowkelga">
										<!-- <div class="col-md-1">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputkeluargano" class="col-sm-12 col-form-label">0</label>
											</div>
										</div> -->
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputkeluarganama[]" name="inputkeluarganama[]" placeholder="Nama" value="Suami">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputkeluargatempat1[]" placeholder="Tempat" value="Jakarta" disabled>
												<input type="hidden" class="form-control" id="inputkeluargatempat[]" name="inputkeluargatempat[]" placeholder="Tempat" value="Jakarta">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputkeluargatanggallahir1[]" placeholder="Tempat" value="2018-08-10" disabled>
												<input type="hidden" class="form-control" id="inputkeluargatanggallahir[]" name="inputkeluargatanggallahir[]" placeholder="Tempat" value="2018-08-10">
											</div>
										</div>

										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="hidden" class="form-control" id="inputkeluargasex[]" name="inputkeluargasex[]" placeholder="Tempat" value="L">
												<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputkeluargasex1[]" disabled> 
																									<option value="L" selected>L (Laki Laki)</option>
																									<option value="P" >P (Perempuan)</option>
																								</select>

											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="hidden" class="form-control" id="inputkeluargastatus[]" name="inputkeluargastatus[]" placeholder="Tempat" value="1">
												<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputkeluargastatus1[]" disabled> 
																									<option value="1" selected>Suami/Istri</option>
																									<option value="2" >Anak</option>
																									<option value="3" >Orang Tua</option>
																									<option value="4" >Saudara</option>
																								</select>
											</div>
										</div>

										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-9">
													<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputkeluargapendidikan[]" name="inputkeluargapendidikan[]" id="styledatakeluarga"> 
																											<option value="SMP" >SMP</option>
																											<option value="SMA" >SMA</option>
																											<option value="DIPLOMA" >Diploma/Akademi</option>
																											<option value="S1" selected>S1/D4</option>
																											<option value="S2" >S2</option>
																										</select>
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="0" class="btn btn-danger btn_remove3">X</button> -->
												</div>
											</div>
										</div>
									</div>
																		<!-- <div class="row" id="rowkelga1"> -->
									<div class="row" id="rowkelga">
										<!-- <div class="col-md-1">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputkeluargano" class="col-sm-12 col-form-label">1</label>
											</div>
										</div> -->
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputkeluarganama[]" name="inputkeluarganama[]" placeholder="Nama" value="Istri">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputkeluargatempat1[]" placeholder="Tempat" value="Jakarta" disabled>
												<input type="hidden" class="form-control" id="inputkeluargatempat[]" name="inputkeluargatempat[]" placeholder="Tempat" value="Jakarta">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputkeluargatanggallahir1[]" placeholder="Tempat" value="2018-01-01" disabled>
												<input type="hidden" class="form-control" id="inputkeluargatanggallahir[]" name="inputkeluargatanggallahir[]" placeholder="Tempat" value="2018-01-01">
											</div>
										</div>

										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="hidden" class="form-control" id="inputkeluargasex[]" name="inputkeluargasex[]" placeholder="Tempat" value="P">
												<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputkeluargasex1[]" disabled> 
																									<option value="L" >L (Laki Laki)</option>
																									<option value="P" selected>P (Perempuan)</option>
																								</select>

											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="hidden" class="form-control" id="inputkeluargastatus[]" name="inputkeluargastatus[]" placeholder="Tempat" value="2">
												<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputkeluargastatus1[]" disabled> 
																									<option value="1" >Suami/Istri</option>
																									<option value="2" selected>Anak</option>
																									<option value="3" >Orang Tua</option>
																									<option value="4" >Saudara</option>
																								</select>
											</div>
										</div>

										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-9">
													<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputkeluargapendidikan[]" name="inputkeluargapendidikan[]" id="styledatakeluarga"> 
																											<option value="SMP" >SMP</option>
																											<option value="SMA" >SMA</option>
																											<option value="DIPLOMA" selected>Diploma/Akademi</option>
																											<option value="S1" >S1/D4</option>
																											<option value="S2" >S2</option>
																										</select>
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="1" class="btn btn-danger btn_remove3">X</button> -->
												</div>
											</div>
										</div>
									</div>
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
												<label for="inputhobby" class="col-sm-3 col-form-label">Hobby</label>
												<div class="col-sm-9">
													<!-- <input type="text" class="form-control" id="inputkelktp" placeholder="Kelurahan"> -->
													<div class="input-group">
													<textarea class="form-control" rows="10" id="inputhobby" name="inputhobby" placeholder="Enter ...">makan bakso
</textarea>
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
												<label for="inputbtkush" class="col-sm-3 col-form-label">Bentuk Usaha</label>
												<div class="col-sm-9">
													<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputbtkush" name="inputbtkush" style="font-size: 1rem;;"> 
																											<option value="2" >Badan Usaha Milik Negara/Daerah</option>
																											<option value="3" >Perorangan</option>
																											<option value="4" >Koperasi</option>
																											<option value="1" selected>Badan Usaha Milik Swasta</option>
																										</select>

												</div>
											</div>

											<div class="form-group row">
												<label for="inputtipeush" class="col-sm-3 col-form-label">Tipe Badan Hukum</label>
												<div class="col-sm-9">
												<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputtipeush" name="inputtipeush" style="font-size: 1rem;;"> 
																											<option value="1" >PT</option>
																											<option value="2" >CV</option>
																											<option value="3" >UD</option>
																											<option value="4" >PTE</option>
																											<option value="5" >LTD</option>
																											<option value="8" >Others</option>
																											<option value="6" >Firma (Fa)</option>
																											<option value="7" >Yayasan</option>
																											<option value="8" >Perum</option>
																											<option value="9" >Perjan</option>
																											<option value="10" >Persero</option>
																										</select>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputnamausaha" class="col-sm-3 col-form-label">Nama Usaha</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputnamausaha" name="inputnamausaha" placeholder="Nama Usaha" value="BAROKAH">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputlmusaha" class="col-sm-3 col-form-label">Lama Usaha</label>
												<div class="col-sm-6">	
													<input type="number" class="form-control" id="inputlmusaha" name="inputlmusaha" placeholder="Lama Usaha" value="10.0">
												</div>
												<label for="inputlmusaha" class="col-sm-3 col-form-label">Tahun</label>
											</div>

										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputnpwp" class="col-sm-3 col-form-label">NPWP</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputnpwp" name="inputnpwp" placeholder="NPWP" value="1213211">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputheadgrp" class="col-sm-3 col-form-label">Head Group</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputheadgrp" name="inputheadgrp" placeholder="Head Group" value="123">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkodesap" class="col-sm-3 col-form-label">Kode SAP</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkodesap" name="inputkodesap" placeholder="kode Sap" value="111223">
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
																	<input type="hidden" id="optstatususaha" value="&lt;option value=&quot;&quot;&gt;-&lt;/option&gt;&lt;option value=&quot;1&quot;&gt;Agent / Distributor&lt;/option&gt;&lt;option value=&quot;2&quot;&gt;Petambak&lt;/option&gt;&lt;option value=&quot;3&quot;&gt;Toko / Retailer&lt;/option&gt;&lt;option value=&quot;8&quot;&gt;Lainnya&lt;/option&gt;&lt;option value=&quot;4&quot;&gt;Toko Online&lt;/option&gt;&lt;option value=&quot;5&quot;&gt;Modern Trade&lt;/option&gt;&lt;option value=&quot;6&quot;&gt;HORECA&lt;/option&gt;&lt;option value=&quot;7&quot;&gt;Klinik/RSH&lt;/option&gt;">
																	<!-- <div class="row" id="rowsstatususaha0"> -->
									<div class="row" id="rowsstatususaha">
										<div class="col-md-5">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="hidden" class="form-control" id="inputstatusush[]" name="inputstatusush[]" placeholder="Tempat" value="4">
													<select class="form-control btn btn-default btn-default btn-lg " id="inputstatusush1[]" style="color:white;height: 60px;background: rgba(51,122,183,1);" disabled> 
																											<option value="1" >Agent / Distributor</option>
																											<option value="2" >Petambak</option>
																											<option value="3" >Toko / Retailer</option>
																											<option value="8" >Lainnya</option>
																											<option value="4" selected>Toko Online</option>
																											<option value="5" >Modern Trade</option>
																											<option value="6" >HORECA</option>
																											<option value="7" >Klinik/RSH</option>
																										</select>
												</div>
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group row">
												<!-- <div class="col-sm-12">
													<button type="button" name="remove" id="0" class="btn btn-danger btn_removeb">X</button>
												</div> -->
											</div>
										</div>
									</div>
																		<!-- <div class="row" id="rowsstatususaha1"> -->
									<div class="row" id="rowsstatususaha">
										<div class="col-md-5">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="hidden" class="form-control" id="inputstatusush[]" name="inputstatusush[]" placeholder="Tempat" value="4">
													<select class="form-control btn btn-default btn-default btn-lg " id="inputstatusush1[]" style="color:white;height: 60px;background: rgba(51,122,183,1);" disabled> 
																											<option value="1" >Agent / Distributor</option>
																											<option value="2" >Petambak</option>
																											<option value="3" >Toko / Retailer</option>
																											<option value="8" >Lainnya</option>
																											<option value="4" selected>Toko Online</option>
																											<option value="5" >Modern Trade</option>
																											<option value="6" >HORECA</option>
																											<option value="7" >Klinik/RSH</option>
																										</select>
												</div>
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group row">
												<!-- <div class="col-sm-12">
													<button type="button" name="remove" id="1" class="btn btn-danger btn_removeb">X</button>
												</div> -->
											</div>
										</div>
									</div>
																		<!-- <div class="row" id="rowsstatususaha2"> -->
									<div class="row" id="rowsstatususaha">
										<div class="col-md-5">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="hidden" class="form-control" id="inputstatusush[]" name="inputstatusush[]" placeholder="Tempat" value="2">
													<select class="form-control btn btn-default btn-default btn-lg " id="inputstatusush1[]" style="color:white;height: 60px;background: rgba(51,122,183,1);" disabled> 
																											<option value="1" >Agent / Distributor</option>
																											<option value="2" selected>Petambak</option>
																											<option value="3" >Toko / Retailer</option>
																											<option value="8" >Lainnya</option>
																											<option value="4" >Toko Online</option>
																											<option value="5" >Modern Trade</option>
																											<option value="6" >HORECA</option>
																											<option value="7" >Klinik/RSH</option>
																										</select>
												</div>
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group row">
												<!-- <div class="col-sm-12">
													<button type="button" name="remove" id="2" class="btn btn-danger btn_removeb">X</button>
												</div> -->
											</div>
										</div>
									</div>
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
												<label for="inputalmtrmh" class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9">
													<!-- <input type="text" class="form-control" id="inputfullname" placeholder="Nama Lengkap"> -->
													<textarea class="form-control" rows="10" id="inputalmtush" name="inputalmtush" placeholder="Enter ...">Perumahan Dmapple Residence Blok F 5</textarea>
												</div>
											</div>
										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputkelrmh" class="col-sm-3 col-form-label">Kelurahan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkelush" name="inputkelush" placeholder="Kelurahan" onchange="mykelurahan(3,this)" name="RATU JAYA">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkecrmh" class="col-sm-3 col-form-label">Kecamatan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkecush1"  placeholder="Kecamatan" value="CIPAYUNG" disabled>
													<input type="hidden" class="form-control" id="inputkecush" name="inputkecush" placeholder="Kecamatan" value="CIPAYUNG">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkotaush" class="col-sm-3 col-form-label">Kabupaten</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkotaush1" placeholder="Kabupaten" value="DEPOK" disabled>
													<input type="hidden" class="form-control" id="inputkotaush" name="inputkotaush" placeholder="Kabupaten" value="DEPOK">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputproprmh" class="col-sm-3 col-form-label">Provinsi</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputpropush1" placeholder="Provinsi" value="JAWA BARAT" disabled>
													<input type="hidden" class="form-control" id="inputpropush" name="inputpropush" placeholder="Provinsi" value="JAWA BARAT">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkdposush" class="col-sm-3 col-form-label">Kode Pos</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkdposush1"  placeholder="Kode Pos" value="16439" disabled>
													<input type="hidden" class="form-control" id="inputkdposush" name="inputkdposush" placeholder="Kode Pos" value="16439">
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
												<label for="inputtlpush" class="col-sm-3 col-form-label">No Telp.</label>
												<div class="col-sm-9">
													<div class="input-group">
														<input type="text" id="inputtlpush" name="inputtlpush" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true" value="234">
													</div>
												</div>
											</div>

											<div class="form-group row">
												<label for="inputfaxush" class="col-sm-3 col-form-label">Fax.</label>
												<div class="col-sm-9">
													<div class="input-group">
														<input type="text" class="form-control" id="inputfaxush" name="inputfaxush" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true"  value="567">
													</div>
												</div>
											</div>
										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputhpush" class="col-sm-3 col-form-label">No HP</label>
												<div class="col-sm-9">
													<div class="input-group">
														<input type="text" class="form-control" id="inputhpush" name="inputhpush" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true" value="123456">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputemailush" class="col-sm-3 col-form-label">Email</label>
												<div class="col-sm-9">
													<input type="email" class="form-control" id="inputemailush" name="inputemailush" placeholder="Email" value="123@">
												</div>
											</div>
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
								</div>


																<input type="hidden" id="optmedsos" value="&lt;option value=&quot;&quot;&gt;-&lt;/option&gt;&lt;option value=&quot;Account ID Medsos&quot;&gt;Account ID Medsos&lt;/option&gt;">
								
								<div class="card-body" id="inpmedsosush">
																		<div class="row" id="rowmedsos0">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputusahamediasosial" class="col-sm-3 col-form-label">Media Sosial</label>
												<div class="col-sm-9">
													
													<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputmedsosush[]" name="inputmedsosush[]"> 
																											<option value="1" selected>Account ID Medsos</option>
																										</select>

												</div>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="text" class="form-control" id="inputmedsosakunush[]" name="inputmedsosakunush[]" placeholder="Nama Akun Media Sosial" value="@1234">
												</div>
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group row">
												<div class="col-sm-12">
													<!-- <button type="button" name="remove" id="0" class="btn btn-danger btn_remove2">X</button> -->
												</div>
											</div>
										</div>
										<!-- /.col -->
									</div>
																		<div class="row" id="rowmedsos1">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputusahamediasosial" class="col-sm-3 col-form-label">Media Sosial</label>
												<div class="col-sm-9">
													
													<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputmedsosush[]" name="inputmedsosush[]"> 
																											<option value="1" selected>Account ID Medsos</option>
																										</select>

												</div>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="text" class="form-control" id="inputmedsosakunush[]" name="inputmedsosakunush[]" placeholder="Nama Akun Media Sosial" value="@5678">
												</div>
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group row">
												<div class="col-sm-12">
													<!-- <button type="button" name="remove" id="1" class="btn btn-danger btn_remove2">X</button> -->
												</div>
											</div>
										</div>
										<!-- /.col -->
									</div>
									
									<!-- /.row -->
								</div>

								<div class="col-md-1">
									<div class="form-group row ">
										<div class="col-sm-12">
											<button type="button" style="height:50px;width:50px" name="addmedsosush" id="addmedsosush" class="btn btn-success">Add</button>
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
										<!-- <div class="col-md-1">
											<div class="form-group row kotakexcel">
												<label for="inputbtkush" class="col-sm-12 col-form-label">No</label>
												
											</div>
										</div> -->
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
										<div class="col-md-4">
											<div class="form-group row kotakexcel">
												<label for="inputlamausaha" class="col-sm-12 col-form-label">Hubungan</label>
												
											</div>
										</div>
									</div>
								</div>

																<input type="hidden" id="optagenhub" value="&lt;option value=&quot;&quot;&gt;-&lt;/option&gt;&lt;option value=&quot;Kakak Kandung&quot;&gt;Kakak Kandung&lt;/option&gt;&lt;option value=&quot;Adik kandung&quot;&gt;Adik kandung&lt;/option&gt;&lt;option value=&quot;Kakak Angkat&quot;&gt;Kakak Angkat&lt;/option&gt;&lt;option value=&quot;Adik Angkat&quot;&gt;Adik Angkat&lt;/option&gt;&lt;option value=&quot;Paman&quot;&gt;Paman&lt;/option&gt;&lt;option value=&quot;Bibi&quot;&gt;Bibi&lt;/option&gt;&lt;option value=&quot;Kakek &quot;&gt;Kakek &lt;/option&gt;&lt;option value=&quot;Nenek&quot;&gt;Nenek&lt;/option&gt;&lt;option value=&quot;Keponakan&quot;&gt;Keponakan&lt;/option&gt;&lt;option value=&quot;Kakak Ipar&quot;&gt;Kakak Ipar&lt;/option&gt;&lt;option value=&quot;Adik Ipar&quot;&gt;Adik Ipar&lt;/option&gt;&lt;option value=&quot;Sepupu&quot;&gt;Sepupu&lt;/option&gt;&lt;option value=&quot;&quot;&gt;&lt;/option&gt;">

								<div class="card-body" id="inpagenhub">
																				<div class="row" id="rowsagenhub0">
												<!-- <div class="col-md-1">
													<div class="form-group row kotakexcel_kosong">
														<label for="inputbtkush" class="col-sm-12 co<input type="text" class="form-control">1</label>
													</div>
												</div> -->
												<div class="col-md-4">
													<div class="form-group row kotakexcel_kosong">
														<input type="text" class="form-control" id="inputagenhubnama[]" name="inputagenhubnama[]" placeholder="Nama" value="Hendra">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group row kotakexcel_kosong">
														<input type="text" class="form-control" id="inputagenaubkode[]" name="inputagenaubkode[]" placeholder="No Sap" value="200087">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group row kotakexcel_kosong">
														<div class="col-sm-10">
															<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputAgenHubStatus[]" name="inputAgenHubStatus[]"> 
																															<option value="Kakak Kandung" >Kakak Kandung</option>
																															<option value="Adik kandung" >Adik kandung</option>
																															<option value="Kakak Angkat" >Kakak Angkat</option>
																															<option value="Adik Angkat" >Adik Angkat</option>
																															<option value="Paman" >Paman</option>
																															<option value="Bibi" >Bibi</option>
																															<option value="Kakek " >Kakek </option>
																															<option value="Nenek" >Nenek</option>
																															<option value="Keponakan" selected>Keponakan</option>
																															<option value="Kakak Ipar" >Kakak Ipar</option>
																															<option value="Adik Ipar" >Adik Ipar</option>
																															<option value="Sepupu" >Sepupu</option>
																															<option value="" ></option>
																														</select>	

														</div>
														<div class="col-sm-2">
															<!-- <button type="button" name="remove" id="0" class="btn btn-danger btn_remove4">X</button> -->
														</div>
													</div>
												</div>
											</div>
																						<div class="row" id="rowsagenhub1">
												<!-- <div class="col-md-1">
													<div class="form-group row kotakexcel_kosong">
														<label for="inputbtkush" class="col-sm-12 co<input type="text" class="form-control">2</label>
													</div>
												</div> -->
												<div class="col-md-4">
													<div class="form-group row kotakexcel_kosong">
														<input type="text" class="form-control" id="inputagenhubnama[]" name="inputagenhubnama[]" placeholder="Nama" value="Bismo">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group row kotakexcel_kosong">
														<input type="text" class="form-control" id="inputagenaubkode[]" name="inputagenaubkode[]" placeholder="No Sap" value="20098">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group row kotakexcel_kosong">
														<div class="col-sm-10">
															<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputAgenHubStatus[]" name="inputAgenHubStatus[]"> 
																															<option value="Kakak Kandung" >Kakak Kandung</option>
																															<option value="Adik kandung" >Adik kandung</option>
																															<option value="Kakak Angkat" selected>Kakak Angkat</option>
																															<option value="Adik Angkat" >Adik Angkat</option>
																															<option value="Paman" >Paman</option>
																															<option value="Bibi" >Bibi</option>
																															<option value="Kakek " >Kakek </option>
																															<option value="Nenek" >Nenek</option>
																															<option value="Keponakan" >Keponakan</option>
																															<option value="Kakak Ipar" >Kakak Ipar</option>
																															<option value="Adik Ipar" >Adik Ipar</option>
																															<option value="Sepupu" >Sepupu</option>
																															<option value="" ></option>
																														</select>	

														</div>
														<div class="col-sm-2">
															<!-- <button type="button" name="remove" id="1" class="btn btn-danger btn_remove4">X</button> -->
														</div>
													</div>
												</div>
											</div>
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
												<label for="inputbtkush" class="col-sm-12 col-form-label">Area</label>
												
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel">
												<label for="inputbtkush" class="col-sm-12 col-form-label">Jenis</label>
												
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

																<input type="hidden" id="optareasubagen" value="&lt;option value=&quot;&quot;&gt;-&lt;/option&gt;&lt;option value=&quot;Agen/Sub Agen&quot;&gt;Agen/Sub Agen&lt;/option&gt;&lt;option value=&quot;Petambak&quot;&gt;Petambak&lt;/option&gt;&lt;option value=&quot;Lainnya&quot;&gt;Lainnya&lt;/option&gt;">
								

								<div class="card-body" id="inpareasubagen">
																		<div class="row" id="rowsareasubagen0">
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<select class="form-control" id="inputNamaarea[]" name="inputNamaarea[]"> 
												
													<option value="AREA_SUBAGEN" selected >AREA_SUBAGEN</option>

													
													<option value="AREA_PETAMBAK"  >AREA_PETAMBAK</option>

													
													<option value="AREA_LAIN"  >AREA_LAIN</option>

													
													
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputNamaSubAgen[]" name="inputNamaSubAgen[]" placeholder="Nama" value="AGENT LAIN">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												
												<input type="text" class="form-control" id="inputQtySubAgen[]" name="inputQtySubAgen[]" placeholder="qty" value="1,200">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputLokasiSubAgen[]" name="inputLokasiSubAgen[]" placeholder="lokasi" value="DPK">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">

												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputInfoSubAgen[]" name="inputInfoSubAgen[]" placeholder="info" value="ok">
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="0" class="btn btn-danger btn_remove5">X</button> -->
												</div>
											</div>
										</div>
									</div>
									<!-- /.row -->

																		<div class="row" id="rowsareasubagen1">
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<select class="form-control" id="inputNamaarea[]" name="inputNamaarea[]"> 
												
													<option value="AREA_SUBAGEN" selected >AREA_SUBAGEN</option>

													
													<option value="AREA_PETAMBAK"  >AREA_PETAMBAK</option>

													
													<option value="AREA_LAIN"  >AREA_LAIN</option>

													
													
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputNamaSubAgen[]" name="inputNamaSubAgen[]" placeholder="Nama" value="AGENT TENGAH">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												
												<input type="text" class="form-control" id="inputQtySubAgen[]" name="inputQtySubAgen[]" placeholder="qty" value="1,500">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputLokasiSubAgen[]" name="inputLokasiSubAgen[]" placeholder="lokasi" value="JOG">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">

												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputInfoSubAgen[]" name="inputInfoSubAgen[]" placeholder="info" value="no">
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="1" class="btn btn-danger btn_remove5">X</button> -->
												</div>
											</div>
										</div>
									</div>
									<!-- /.row -->

																		<div class="row" id="rowsareasubagen2">
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<select class="form-control" id="inputNamaarea[]" name="inputNamaarea[]"> 
												
													<option value="AREA_SUBAGEN"  >AREA_SUBAGEN</option>

													
													<option value="AREA_PETAMBAK" selected >AREA_PETAMBAK</option>

													
													<option value="AREA_LAIN"  >AREA_LAIN</option>

													
													
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputNamaSubAgen[]" name="inputNamaSubAgen[]" placeholder="Nama" value="SURADI">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												
												<input type="text" class="form-control" id="inputQtySubAgen[]" name="inputQtySubAgen[]" placeholder="qty" value="1">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputLokasiSubAgen[]" name="inputLokasiSubAgen[]" placeholder="lokasi" value="TNG">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">

												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputInfoSubAgen[]" name="inputInfoSubAgen[]" placeholder="info" value="ok">
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="2" class="btn btn-danger btn_remove5">X</button> -->
												</div>
											</div>
										</div>
									</div>
									<!-- /.row -->

																		<div class="row" id="rowsareasubagen3">
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<select class="form-control" id="inputNamaarea[]" name="inputNamaarea[]"> 
												
													<option value="AREA_SUBAGEN"  >AREA_SUBAGEN</option>

													
													<option value="AREA_PETAMBAK"  >AREA_PETAMBAK</option>

													
													<option value="AREA_LAIN" selected >AREA_LAIN</option>

													
													
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputNamaSubAgen[]" name="inputNamaSubAgen[]" placeholder="Nama" value="LAIN LAIN">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												
												<input type="text" class="form-control" id="inputQtySubAgen[]" name="inputQtySubAgen[]" placeholder="qty" value="2">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputLokasiSubAgen[]" name="inputLokasiSubAgen[]" placeholder="lokasi" value="KAL">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">

												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputInfoSubAgen[]" name="inputInfoSubAgen[]" placeholder="info" value="ok">
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="3" class="btn btn-danger btn_remove5">X</button> -->
												</div>
											</div>
										</div>
									</div>
									<!-- /.row -->

																		
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
												<label for="inputbtkush" class="col-sm-12 col-form-label">No</label>
												
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
																		<div class="row" id="rowskompetitor0">
										<div class="col-md-4">
											<div class="col-sm-12">	
												<input type="text" class="form-control" id="inputPakanJualC[]" name="inputPakanJualC[]" value="PROTEMA">	
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-12">	
													<input type="text" class="form-control" id="inputPakanJual[]" name="inputPakanJual[]" value="PRO2">	
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputPakanJualV[]" name="inputPakanJualV[]" value="22">	
												</div>
												<div class="col-sm-2">
													<button type="button" name="remove" id="0" class="btn btn-danger btn_remove6">X</button>
												</div>
											</div>
										</div>
									</div>
																		<div class="row" id="rowskompetitor1">
										<div class="col-md-4">
											<div class="col-sm-12">	
												<input type="text" class="form-control" id="inputPakanJualC[]" name="inputPakanJualC[]" value="CPRO ">	
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-12">	
													<input type="text" class="form-control" id="inputPakanJual[]" name="inputPakanJual[]" value="CJ PRO">	
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputPakanJualV[]" name="inputPakanJualV[]" value="21">	
												</div>
												<div class="col-sm-2">
													<button type="button" name="remove" id="1" class="btn btn-danger btn_remove6">X</button>
												</div>
											</div>
										</div>
									</div>
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

																				<div class="row" id="rowsbisnislain0">
											<div class="col-md-6">
												<div class="form-group row">
													<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis Lain</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis" value="KOPERASI">	
													</div>
												</div>
											</div>

											<!-- /.col -->
											<div class="col-md-5">
												<div class="form-group row">
													<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Omset (Rp)</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="Nilai Omset" value="2,500">	
													</div>
												</div>
											</div>

											<div class="col-md-1">
												<div class="form-group row">
													<div class="col-sm-12">
														<button type="button" name="remove" id="0" class="btn btn-danger btn_remove7">X</button>
													</div>
												</div>
											</div>
										</div>
																				<div class="row" id="rowsbisnislain1">
											<div class="col-md-6">
												<div class="form-group row">
													<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis Lain</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis" value="TOKO BANGUNAN">	
													</div>
												</div>
											</div>

											<!-- /.col -->
											<div class="col-md-5">
												<div class="form-group row">
													<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Omset (Rp)</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="Nilai Omset" value="3,500">	
													</div>
												</div>
											</div>

											<div class="col-md-1">
												<div class="form-group row">
													<div class="col-sm-12">
														<button type="button" name="remove" id="1" class="btn btn-danger btn_remove7">X</button>
													</div>
												</div>
											</div>
										</div>
																				
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

									

																		<!-- <input type="hidden" id="optassetpribadi" value="&lt;option value=&quot;&quot;&gt;-&lt;/option&gt;&lt;option value=&quot;Agen/Sub Agen&quot;&gt;Agen/Sub Agen&lt;/option&gt;&lt;option value=&quot;Petambak&quot;&gt;Petambak&lt;/option&gt;&lt;option value=&quot;Lainnya&quot;&gt;Lainnya&lt;/option&gt;"> -->
																		
									<div class="card-body" id="inpassetpribadi">
																			<div class="row" id="rowsassetpribadi-1">
											<div class="col-md-2">
												<div class="form-group row">
													<div class="col-sm-12">
														<input type="text" class="form-control" id="inputasetpribadi[]" name="inputasetpribadi[]" value="Rumah">
													</div>
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group row">
													<label for="inputbisnislainrp" class="col-sm-2 col-form-label">Luas</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputAssetValue[]" name="inputAssetValue[]" value="2,000">	
														<input type="hidden" class="form-control" id="inputAssetSseq[]" name="inputAssetSseq[]" value="1">	
													</div>
													<label for="inputbisnislainrp" class="col-sm-2 col-form-label">M2</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group row">
													<label for="inputasetpribadirp" class="col-sm-4 col-form-label">Alamat</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputAssetAlamat[]" name="inputAssetAlamat[]" value="cinere">	
													</div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="form-group row">
													<div class="col-sm-10">
														<input type="text" class="form-control" id="inputAssetLain[]" name="inputAssetLain[]" value="oke">	
													</div>
													<div class="col-sm-2">
														<!-- <button type="button" name="remove" id="-1" class="btn btn-danger btn_remove8">X</button> -->
													</div>
												</div>
											</div>

											
										</div>
																				<div class="row" id="rowsassetpribadi-1">
											<div class="col-md-2">
												<div class="form-group row">
													<div class="col-sm-12">
														<input type="text" class="form-control" id="inputasetpribadi[]" name="inputasetpribadi[]" value="Apartment">
													</div>
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group row">
													<label for="inputbisnislainrp" class="col-sm-2 col-form-label">Luas </label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputAssetValue[]" name="inputAssetValue[]" value="250">	
														<input type="hidden" class="form-control" id="inputAssetSseq[]" name="inputAssetSseq[]" value="2">	
													</div>
													<label for="inputbisnislainrp" class="col-sm-2 col-form-label">M2</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group row">
													<label for="inputasetpribadirp" class="col-sm-4 col-form-label">Alamat</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputAssetAlamat[]" name="inputAssetAlamat[]" value="bandung">	
													</div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="form-group row">
													<div class="col-sm-10">
														<input type="text" class="form-control" id="inputAssetLain[]" name="inputAssetLain[]" value="ok">	
													</div>
													<div class="col-sm-2">
														<!-- <button type="button" name="remove" id="-1" class="btn btn-danger btn_remove8">X</button> -->
													</div>
												</div>
											</div>

											
										</div>
																				<div class="row" id="rowsassetpribadi-1">
											<div class="col-md-2">
												<div class="form-group row">
													<div class="col-sm-12">
														<input type="text" class="form-control" id="inputasetpribadi[]" name="inputasetpribadi[]" value="Kapal">
													</div>
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group row">
													<label for="inputbisnislainrp" class="col-sm-2 col-form-label">Jenis</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputAssetValue[]" name="inputAssetValue[]" value="RORO">	
														<input type="hidden" class="form-control" id="inputAssetSseq[]" name="inputAssetSseq[]" value="3">	
													</div>
													<label for="inputbisnislainrp" class="col-sm-2 col-form-label"></label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group row">
													<label for="inputasetpribadirp" class="col-sm-4 col-form-label"></label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputAssetAlamat[]" name="inputAssetAlamat[]" value="">	
													</div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="form-group row">
													<div class="col-sm-10">
														<input type="text" class="form-control" id="inputAssetLain[]" name="inputAssetLain[]" value="">	
													</div>
													<div class="col-sm-2">
														<!-- <button type="button" name="remove" id="-1" class="btn btn-danger btn_remove8">X</button> -->
													</div>
												</div>
											</div>

											
										</div>
																				<!-- /.row -->
										
									</div>
									<div class="col-md-1">
											<div class="form-group row ">
												<div class="col-sm-12">
													<select class="btn btn-success" id="addassetpribadi" name="addassetpribadi"> 
													<option value="">Add</option>
																											<option value="1/Rumah/Luas/M2/Alamat/Keterangan lain">Asset Pribadi bentuk Rumah</option>
																												<option value="2/Apartment/Luas /M2/Alamat/Keterangan lain">Asset Pribadi bentuk Apartment</option>
																												<option value="3/Bungalow/Luas/M2/Alamat/Keterangan lain">Asset Pribadi bentuk Bungalow</option>
																												<option value="4/Tambak/Kolam/Luas/M2/Alamat/Keterangan lain">Asset Pribadi bentuk Tambak/Kolam</option>
																												<option value="5/Villa/Luas/M2/Alamat/Keterangan lain">Asset Pribadi bentuk Villa</option>
																												<option value="6/Gudang/Luas/M2/Alamat/Keterangan lain">Asset Pribadi bentuk Gudang</option>
																												<option value="7/Mobil/Jenis/-/-/-">Asset Pribadi bentuk Mobil</option>
																												<option value="8/Motor/Jenis/-/-/-">Asset Pribadi bentuk Motor</option>
																												<option value="9/Kapal/Jenis/-/-/-">Asset Pribadi bentuk Kapal</option>
																											</select>
													
													<!-- <button type="button" style="height:50px;width:50px" name="addassetpribadi" id="addassetpribadi" class="btn btn-success">Add</button> -->
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
															<label for="inputmodalsendiripersent" class="col-sm-2 col-form-label">SENDIRI</label>
															<div class="col-sm-3">
																<input type="text" class="form-control" id="inputmodal[]" name="inputmodal[]" placeholder="%" value="SENDIRI">	
																<input type="hidden" id="inputmodalid[]" name="inputmodalid[]" value="1">	
															</div>
															<label for="inputmodalsendiripersent" class="col-sm-2 col-form-label">%</label>
														</div>
													</div>

																									<div class="col-md-12">
														<div class="form-group row">
															<label for="inputmodalsendiripersent" class="col-sm-2 col-form-label">LAINNYA</label>
															<div class="col-sm-3">
																<input type="text" class="form-control" id="inputmodal[]" name="inputmodal[]" placeholder="%" value="LAINNYA">	
																<input type="hidden" id="inputmodalid[]" name="inputmodalid[]" value="2">	
															</div>
															<label for="inputmodalsendiripersent" class="col-sm-2 col-form-label">%</label>
														</div>
													</div>

																						</div>
									</div>
									
																		<input type="hidden" id="optmodalbank" value="&lt;option value=&quot;&quot;&gt;-&lt;/option&gt;">
																		

									<div class="card-body" id="inpmodalbank">
											
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
																		<div class="row" id="rowsjaminan0">
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="text" class="form-control" id="inputJaminanPribadi[]" name="inputJaminanPribadi[]" value="Rumah">	
													<input type="hidden" class="form-control" id="inputJaminanid[]" name="inputJaminanid[]" value="1">	
												</div>
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group row">
												<label for="inputbisnislain" class="col-sm-3 col-form-label">Luas</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="inputJaminanValue[]" name="inputJaminanValue[]" value="2,131">	
													<input type="hidden" id="inputJaminanSseq[]" name="inputJaminanSseq[]" value="1">
												</div>
												<label for="inputbisnislain" class="col-sm-3 col-form-label">M2</label>
											</div>
										</div>

										<!-- /.col -->
										<div class="col-md-3">
											<div class="form-group row">
												<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputJaminanAlamat[]" name="inputJaminanAlamat[]" value="231231">	
												</div>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputJaminanLain[]" name="inputJaminanLain[]" value="2312313">	
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="0" class="btn btn-danger btn_removea">X</button> -->
												</div>
											</div>
										</div>
									</div>
																		<div class="row" id="rowsjaminan1">
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="text" class="form-control" id="inputJaminanPribadi[]" name="inputJaminanPribadi[]" value="Apartment">	
													<input type="hidden" class="form-control" id="inputJaminanid[]" name="inputJaminanid[]" value="6">	
												</div>
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group row">
												<label for="inputbisnislain" class="col-sm-3 col-form-label">Luas </label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="inputJaminanValue[]" name="inputJaminanValue[]" value="2,313,123">	
													<input type="hidden" id="inputJaminanSseq[]" name="inputJaminanSseq[]" value="2">
												</div>
												<label for="inputbisnislain" class="col-sm-3 col-form-label">M2</label>
											</div>
										</div>

										<!-- /.col -->
										<div class="col-md-3">
											<div class="form-group row">
												<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputJaminanAlamat[]" name="inputJaminanAlamat[]" value="">	
												</div>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputJaminanLain[]" name="inputJaminanLain[]" value="">	
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="1" class="btn btn-danger btn_removea">X</button> -->
												</div>
											</div>
										</div>
									</div>
																		<div class="row" id="rowsjaminan2">
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="text" class="form-control" id="inputJaminanPribadi[]" name="inputJaminanPribadi[]" value="Bungalow">	
													<input type="hidden" class="form-control" id="inputJaminanid[]" name="inputJaminanid[]" value="7">	
												</div>
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group row">
												<label for="inputbisnislain" class="col-sm-3 col-form-label">Luas</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="inputJaminanValue[]" name="inputJaminanValue[]" value="3213123">	
													<input type="hidden" id="inputJaminanSseq[]" name="inputJaminanSseq[]" value="3">
												</div>
												<label for="inputbisnislain" class="col-sm-3 col-form-label">M2</label>
											</div>
										</div>

										<!-- /.col -->
										<div class="col-md-3">
											<div class="form-group row">
												<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputJaminanAlamat[]" name="inputJaminanAlamat[]" value="">	
												</div>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputJaminanLain[]" name="inputJaminanLain[]" value="">	
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="2" class="btn btn-danger btn_removea">X</button> -->
												</div>
											</div>
										</div>
									</div>
																		<div class="row" id="rowsjaminan3">
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="text" class="form-control" id="inputJaminanPribadi[]" name="inputJaminanPribadi[]" value="Tambak/Kolam">	
													<input type="hidden" class="form-control" id="inputJaminanid[]" name="inputJaminanid[]" value="9">	
												</div>
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group row">
												<label for="inputbisnislain" class="col-sm-3 col-form-label">Luas</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="inputJaminanValue[]" name="inputJaminanValue[]" value="214214124124">	
													<input type="hidden" id="inputJaminanSseq[]" name="inputJaminanSseq[]" value="4">
												</div>
												<label for="inputbisnislain" class="col-sm-3 col-form-label">M2</label>
											</div>
										</div>

										<!-- /.col -->
										<div class="col-md-3">
											<div class="form-group row">
												<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputJaminanAlamat[]" name="inputJaminanAlamat[]" value="">	
												</div>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputJaminanLain[]" name="inputJaminanLain[]" value="">	
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="3" class="btn btn-danger btn_removea">X</button> -->
												</div>
											</div>
										</div>
									</div>
																		<div class="row" id="rowsjaminan4">
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="text" class="form-control" id="inputJaminanPribadi[]" name="inputJaminanPribadi[]" value="Villa">	
													<input type="hidden" class="form-control" id="inputJaminanid[]" name="inputJaminanid[]" value="10">	
												</div>
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group row">
												<label for="inputbisnislain" class="col-sm-3 col-form-label">Luas</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="inputJaminanValue[]" name="inputJaminanValue[]" value="200">	
													<input type="hidden" id="inputJaminanSseq[]" name="inputJaminanSseq[]" value="5">
												</div>
												<label for="inputbisnislain" class="col-sm-3 col-form-label">M2</label>
											</div>
										</div>

										<!-- /.col -->
										<div class="col-md-3">
											<div class="form-group row">
												<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputJaminanAlamat[]" name="inputJaminanAlamat[]" value="">	
												</div>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputJaminanLain[]" name="inputJaminanLain[]" value="">	
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="4" class="btn btn-danger btn_removea">X</button> -->
												</div>
											</div>
										</div>
									</div>
																		<div class="row" id="rowsjaminan5">
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="text" class="form-control" id="inputJaminanPribadi[]" name="inputJaminanPribadi[]" value="Gudang">	
													<input type="hidden" class="form-control" id="inputJaminanid[]" name="inputJaminanid[]" value="11">	
												</div>
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group row">
												<label for="inputbisnislain" class="col-sm-3 col-form-label">Luas</label>
												<div class="col-sm-6">
													<input type="text" class="form-control" id="inputJaminanValue[]" name="inputJaminanValue[]" value="dwad">	
													<input type="hidden" id="inputJaminanSseq[]" name="inputJaminanSseq[]" value="6">
												</div>
												<label for="inputbisnislain" class="col-sm-3 col-form-label">M2</label>
											</div>
										</div>

										<!-- /.col -->
										<div class="col-md-3">
											<div class="form-group row">
												<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputJaminanAlamat[]" name="inputJaminanAlamat[]" value="">	
												</div>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputJaminanLain[]" name="inputJaminanLain[]" value="">	
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="5" class="btn btn-danger btn_removea">X</button> -->
												</div>
											</div>
										</div>
									</div>
									
									<!-- /.row -->
									
								</div>
								<div class="col-md-4">
									<div class="form-group row ">
										<div class="col-sm-12">

											<select class="btn btn-success" id="addjaminan" name="addjaminan"> 
											<option value="">Add</option>
																							<option value="1/Rumah/Luas/M2/Alamat/Keterangan lain">create Jaminan dalam bentuk Rumah</option>
																								<option value="2/Apartment/Luas /M2/Alamat/Keterangan lain">create Jaminan dalam bentuk Apartment</option>
																								<option value="3/Bungalow/Luas/M2/Alamat/Keterangan lain">create Jaminan dalam bentuk Bungalow</option>
																								<option value="4/Tambak/Kolam/Luas/M2/Alamat/Keterangan lain">create Jaminan dalam bentuk Tambak/Kolam</option>
																								<option value="5/Villa/Luas/M2/Alamat/Keterangan lain">create Jaminan dalam bentuk Villa</option>
																								<option value="6/Gudang/Luas/M2/Alamat/Keterangan lain">create Jaminan dalam bentuk Gudang</option>
																								<option value="7/Mobil/Jenis/-/-/-">create Jaminan dalam bentuk Mobil</option>
																								<option value="8/Motor/Jenis/-/-/-">create Jaminan dalam bentuk Motor</option>
																								<option value="9/Kapal/Jenis/-/-/-">create Jaminan dalam bentuk Kapal</option>
																							</select>
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
													<textarea class="form-control" rows="10" id="inputkarakteristik" name="inputkarakteristik" placeholder="Enter ...">Agen yang bagus</textarea>
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
														<button type="button" name="remove" id="5" class="btn btn-danger btn_removea">X</button>
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
				
					<div class="row" >
						<div class="col-md-4">
						</div>
						
						<div class="col-md-2">
							<div class="form-group row">
								<div class="col-sm-12">
									<input type="submit" class="btn btn-block btn-primary btn-lg" style="background: rgba(15,199,89,1);" id="save" value="Save">
								</div>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group row">
								<div class="col-sm-12">
									<!-- <button type="button" class="btn btn-block btn-danger btn-lg">Cancel</button> -->
									<a href="/detail1/FISH FEED/157" class="btn btn-block btn-danger btn-lg">Cancel</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
						</div>
						
					</div>
				</form>	
							
			</div>

		
	</div>

	<!-- <script src="http://localhost:8000/plugins/jquery/jquery.min.js"></script> -->
	<!-- Bootstrap 4 -->
	<script src="http://localhost:8000/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables -->

	<script src="http://localhost:8000/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="http://localhost:8000/plugins/datatables/jquery.dataTables.js"></script>
	<script src="http://localhost:8000/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="http://localhost:8000/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="http://localhost:8000/dist/js/demo.js"></script>

	<script type="text/javascript">
		$(function(){
			$(".inputbirthdate").datepicker({
				format: 'dd.mm.yyyy',
				autoclose: true,
				todayHighlight: true,
			});
		});


		// $(".tm").on("change", function() {
		//  this.setAttribute(
		//      "data-date",
		//      moment(this.value, "dd.mm.yyyy"))
		//    //   .format( this.getAttribute("data-date-format") )
		//  )
		//  }).trigger("change")

	</script>

	<script type="text/javascript">
			var route = "http://localhost:8000/autocomplete";
			$('#inputkelrmh').typeahead({
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
			var route = "http://localhost:8000/autocomplete";
			$('#inputkelktp').typeahead({
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
			var route = "http://localhost:8000/autocomplete";
			$('#inputkelush').typeahead({
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
			document.getElementById("inputalmtrmh").value    = document.getElementById("inputalmtktp").value;
			document.getElementById("inputkelrmh").value = document.getElementById("inputkelktp").value;
			document.getElementById("inputkecrmh").value = document.getElementById("inputkecktp").value;
			document.getElementById("inputkotarmh").value      = document.getElementById("inputkotaktp").value;
			document.getElementById("inputproprmh").value  = document.getElementById("inputpropktp").value;
			document.getElementById("inputkdposrmh").value   = document.getElementById("inputkdposktp").value;

			
			document.getElementById("inputkecrmh1").value = document.getElementById("inputkecktp").value;
			document.getElementById("inputkotarmh1").value      = document.getElementById("inputkotaktp").value;
			document.getElementById("inputproprmh1").value  = document.getElementById("inputpropktp").value;
			document.getElementById("inputkdposrmh1").value   = document.getElementById("inputkdposktp").value;
		}
	</script>

	<script type="text/javascript">

			$(document).ready(function(){
			var postURL = "http://localhost:8000/addmore";
				var i=1;  
				var isioptions=document.getElementById("optmedsos").value;
			$('#addmedsosush').click(function(){  
					i++;  
				var txt = '<div class="row" id="rowmedsosush'+i+'">'+
									'<div class="col-md-6">'+
										'<div class="form-group row">'+
											'<label for="inputnotelp" class="col-sm-3 col-form-label">Media Sosial</label>'+
											'<div class="col-sm-9">'+
												'<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputmedsosush[]" name="inputmedsosush[]">'+isioptions+
												'</select>'+
											'</div>'+
										'</div>'+
									'</div>'+
									'<div class="col-md-5">'+
										'<div class="form-group row ">'+
											'<div class="col-sm-12">'+
												'<input type="text" class="form-control" id="inputmedsosakunush[]" name="inputmedsosakunush[]" placeholder="Nama Akun Media Sosial">'+
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
				$('#inpmedsosush').append(txt);
			}); 

			$(document).on('click', '.btn_remove2', function(){  
				var button_id = $(this).attr("id");   
				$('#rowmedsosush'+button_id+'').remove();  
				});  

		});  
	</script>


	<script type="text/javascript">

			$(document).ready(function(){
			var postURL = "http://localhost:8000/addmore";
				var i=1;  
				var isioptions=document.getElementById("optmedsos").value;
			$('#addmedsospri').click(function(){  
					i++;  
				var txt = '<div class="row" id="rowsmedsospri'+i+'">'+
									'<div class="col-md-6">'+
										'<div class="form-group row">'+
											'<label for="inputnotelp" class="col-sm-3 col-form-label">Media Sosial</label>'+
											'<div class="col-sm-9">'+
												'<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputmedsospri[]" name="inputmedsospri[]">'+isioptions+
												'</select>'+
											'</div>'+
										'</div>'+
									'</div>'+
									'<div class="col-md-5">'+
										'<div class="form-group row ">'+
											'<div class="col-sm-12">'+
												'<input type="text" class="form-control" id="inputmedsosakunpri[]" name="inputmedsosakunpri[]" placeholder="Nama Akun Media Sosial">'+
											'</div>'+
										'</div>'+
									'</div>'+
									'<div class="col-md-1">'+
										'<div class="form-group row">'+
											'<div class="col-sm-12">'+
												'<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove2x">X</button>'+
											'</div>'+
										'</div>'+
									'</div>';
				$('#inpmedsospri').append(txt);
			}); 

			$(document).on('click', '.btn_remove2x', function(){  
				var button_id = $(this).attr("id");   
				$('#rowsmedsospri'+button_id+'').remove();  
				});  

		});  
	</script>


	<script type="text/javascript">

			$(document).ready(function(){
			var postURL = "http://localhost:8000/addmore";
				var i=1;  
			var isioptions=document.getElementById("optsex").value;
			var isioptions2=document.getElementById("opthubkelga").value;
			var isioptions3=document.getElementById("optsekolah").value;

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
												'<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputkeluargasex[]" name="inputkeluargasex[]" id="styledatakeluarga">'+isioptions+
												'</select>'+
											'</div>'+
										'</div>'+
										'<div class="col-md-2">'+
											'<div class="form-group row kotakexcel_kosong">'+
												'<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputkeluargastatus[]" name="inputkeluargastatus[]" id="styledatakeluarga">'+isioptions2+
												'</select>'+
											'</div>'+
										'</div>'+
										'<div class="col-md-2">'+
											'<div class="form-group row kotakexcel_kosong">'+
												'<div class="col-sm-9">'+
													'<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputkeluargapendidikan[]" name="inputkeluargapendidikan[]" id="styledatakeluarga">'+isioptions3+
													'</select>'+
												'</div>'+
												'<div class="col-sm-3">'+
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
			var postURL = "http://localhost:8000/addmore";
				var i=1;  
			
			var isioptions=document.getElementById("optagenhub").value;
			$('#addagenhub').click(function(){ 

				var txt ='<div class="row" id="rowsagenhub'+i+'">'+
													
													'<div class="col-md-4">'+
														'<div class="form-group row kotakexcel_kosong">'+
															'<input type="text" class="form-control" id="inputagenhubnama[]" name="inputagenhubnama[]" placeholder="Nama">'+
														'</div>'+
													'</div>'+
													'<div class="col-md-4">'+
														'<div class="form-group row kotakexcel_kosong">'+
															'<input type="text" class="form-control" id="inputagenaubkode[]" name="inputagenaubkode[]" placeholder="No Sap">'+
														'</div>'+
													'</div>'+
													'<div class="col-md-4">'+
														'<div class="form-group row kotakexcel_kosong">'+
															'<div class="col-sm-10">'+
																'<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputAgenHubStatus[]" name="inputAgenHubStatus[]">'+isioptions+ 
																'</select>'+
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
			var postURL = "http://localhost:8000/addmore";
				var i=1; 

			var isioptions=document.getElementById("optareasubagen").value; 

			$('#addareasubagen').click(function(){ 
							var txt = '<div class="row" id="rowsareasubagen'+i+'">'+
											'<div class="col-md-2">'+
												'<div class="form-group row kotakexcel_kosong">'+
													'<select class="form-control" id="inputNamaarea[]" name="inputNamaarea[]">'+isioptions+
													'</select>'+
												'</div>'+
											'</div>'+
											'<div class="col-md-2">'+
												'<div class="form-group row kotakexcel_kosong">'+
													'<input type="text" class="form-control" id="inputNamaSubAgen[]" placeholder="Nama" name="inputNamaSubAgen[]" >'+
												'</div>'+
											'</div>'+
											'<div class="col-md-2">'+
												'<div class="form-group row kotakexcel_kosong">'+
													'<input type="text" class="form-control" id="inputQtySubAgen[]" placeholder="qty" name="inputQtySubAgen[]">'+
												'</div>'+
											'</div>'+
											'<div class="col-md-3">'+
												'<div class="form-group row kotakexcel_kosong">'+
													'<input type="text" class="form-control" id="inputLokasiSubAgen[]" placeholder="sub agent" name="inputLokasiSubAgen[]">'+
												'</div>'+
											'</div>'+
											'<div class="col-md-3">'+
												'<div class="form-group row kotakexcel_kosong">'+
													'<div class="col-sm-10">'+
														'<input type="text" class="form-control" id="inputInfoSubAgen[]" placeholder="info" name="inputInfoSubAgen[]">'+
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
			var postURL = "http://localhost:8000/addmore";
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
			var postURL = "http://localhost:8000/addmore";
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
		$(document).ready(function() {
			$('select[name="addassetpribadi"]').on('change', function() {
					
				var stateID = $(this).val();
				
				if(stateID) {
					$.ajax({
						url: '/getmsg2/'+stateID,
						type: "GET",
						dataType: "json",
						success:function(data) {
							$("#inpassetpribadi").append(data.msg);
						}
					});
				}
			});
			$(document).on('click', '.btn_remove8', function(){  
				var button_id = $(this).attr("id");   
				$('#rowsassetpribadi'+button_id+'').remove();  
			});  
		});


		//  $(document).ready(function(){
		//    var i=1;  
		// 	var isioptions=document.getElementById("optassetpribadi").value;

			
			
		// 	$('#addassetpribadi').click(function(){ 
		// 		var txt = 	'<div class="row" id="rowsassetpribadi'+i+'">'+
		// 						'	<div class="col-md-2">'+
		// 						'		<div class="form-group row">'+
		// 						'			<div class="col-sm-12">'+
		// 						'				<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputasetpribadi[]" name="inputasetpribadi[]">'+isioptions+ 
		// 						'           </select>'+	
		// 						'			</div>'+
		// 						'		</div>'+
		// 						'	</div>'+
		// 						'	<div class="col-md-5">'+
		// 						'		<div class="form-group row">'+
		// 						'			<label for="inputbisnislainrp" class="col-sm-2 col-form-label">Luas</label>'+
		// 						'			<div class="col-sm-8">'+
		// 						'				<input type="text" class="form-control" id="inputAssetValue[]" name="inputAssetValue[]">	'+
		// 						'				<input type="hidden" class="form-control" id="inputAssetSseq[]" name="inputAssetSseq[]">	'+
		// 						'			</div>'+
		// 						'			<label for="inputbisnislainrp" class="col-sm-2 col-form-label">M2</label>'+
		// 						'		</div>'+
		// 						'	</div>'+
		// 						'	<div class="col-md-3">'+
		// 						'		<div class="form-group row">'+
		// 						'			<label for="inputAssetAlamat" class="col-sm-4 col-form-label">Alamat</label>'+
		// 						'			<div class="col-sm-8">'+
		// 						'				<input type="text" class="form-control" id="inputAssetAlamat[]" name="inputAssetAlamat[]" >	'+
		// 						'			</div>'+
		// 						'		</div>'+
		// 						'	</div>'+
		// 						'	<div class="col-md-2">'+
		// 						'		<div class="form-group row">'+
		// 						'			<div class="col-sm-10">'+
		// 						'				<input type="text" class="form-control" id="inputAssetLain[]" name="inputAssetLain[]">	'+
		// 						'			</div>'+
		// 						'			<div class="col-sm-2">'+
		// 						'				<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove8">X</button>'+
		// 						'			</div>'+
		// 						'		</div>'+
		// 						'	</div>'+
		// 						'</div>';
		// 		$('#inpassetpribadi').append(txt);
		// 	});


		// 	$(document).on('click', '.btn_remove8', function(){  
		// 		var button_id = $(this).attr("id");   
		// 		$('#rowsassetpribadi'+button_id+'').remove();  
		//    });  
		// });  
	</script>



	<script type="text/javascript">

			$(document).ready(function(){
			var postURL = "http://localhost:8000/addmore";
			
				var i=1;  

			var isioptions=document.getElementById("optmodalbank").value;
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
								'				<select class="form-control" id="inputmodalbanknama[]" name="inputmodalbanknama[]"> '+isioptions+
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
			$(document).ready(function() {
					$('select[name="addjaminan"]').on('change', function() {
					
							var stateID = $(this).val();
					
							if(stateID) {
									$.ajax({
											url: '/getmsg/'+stateID,
											type: "GET",
											dataType: "json",
											success:function(data) {
									$("#inpjaminan").append(data.msg);
											}
									});
							}
					});
				$(document).on('click', '.btn_removea', function(){  
				var button_id = $(this).attr("id");   
				$('#rowsjaminan'+button_id+'').remove();  
				});  
			});
	</script>


	<script type="text/javascript">

			$(document).ready(function(){
			var postURL = "http://localhost:8000/addmore";
				var i=1;  
			var isioptions=document.getElementById("optstatususaha").value;
			

			$('#addstatususaha').click(function(){ 
				var txt = 	'<div class="row" id="rowsstatususaha'+i+'">'+
								'	<div class="col-md-5">'+
								'		<div class="form-group row">'+
								'			<div class="col-sm-12">'+
								'				<select class="form-control btn btn-default btn-default btn-lg" id="inputstatusush[]" name="inputstatusush[]" style="height: 60px;background: rgba(51,122,183,1); color:white;">'+isioptions+
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
		function myduplikatalamatusaha() 
		{
			document.getElementById("inputalmtush").value    = document.getElementById("inputalmtktp").value;
			document.getElementById("inputkelush").value = document.getElementById("inputkelktp").value;
			document.getElementById("inputkecush").value = document.getElementById("inputkecktp").value;
			document.getElementById("inputkotaush").value      = document.getElementById("inputkotaktp").value;
			document.getElementById("inputpropush").value  = document.getElementById("inputpropktp").value;
			document.getElementById("inputkdposush").value   = document.getElementById("inputkdposktp").value;

			document.getElementById("inputkecush1").value = document.getElementById("inputkecktp").value;
			document.getElementById("inputkotaush1").value      = document.getElementById("inputkotaktp").value;
			document.getElementById("inputpropush1").value  = document.getElementById("inputpropktp").value;
			document.getElementById("inputkdposush1").value   = document.getElementById("inputkdposktp").value;
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
					document.getElementById("inputkelktp").value = nkelurahan;
					document.getElementById("inputkecktp").value = nkecamatan;
					document.getElementById("inputkotaktp").value = nkabupaten;
					document.getElementById("inputpropktp").value = nprovinsi;
					document.getElementById("inputkdposktp").value = nkodepos;

					document.getElementById("inputkecktp1").value = nkecamatan;
					document.getElementById("inputkotaktp1").value = nkabupaten;
					document.getElementById("inputpropktp1").value = nprovinsi;
					document.getElementById("inputkdposktp1").value = nkodepos;
				} else if (kode == 2){
					document.getElementById("inputkelrmh").value = nkelurahan;
					document.getElementById("inputkecrmh").value = nkecamatan;
					document.getElementById("inputkotarmh").value = nkabupaten;
					document.getElementById("inputproprmh").value = nprovinsi;
					document.getElementById("inputkdposrmh").value = nkodepos;

					document.getElementById("inputkecrmh1").value = nkecamatan;
					document.getElementById("inputkotarmh1").value = nkabupaten;
					document.getElementById("inputproprmh1").value = nprovinsi;
					document.getElementById("inputkdposrmh1").value = nkodepos;
				} else {
					document.getElementById("inputkelush").value = nkelurahan;
					document.getElementById("inputkecush").value = nkecamatan;
					document.getElementById("inputkotaush").value = nkabupaten;
					document.getElementById("inputpropush").value = nprovinsi;
					document.getElementById("inputkdposush").value = nkodepos;

					document.getElementById("inputkecush1").value = nkecamatan;
					document.getElementById("inputkotaush1").value = nkabupaten;
					document.getElementById("inputpropush1").value = nprovinsi;
					document.getElementById("inputkdposush1").value = nkodepos;
				}
			}
		}
	</script>




	<script type="text/javascript">


		// $('#save').click(function(){
		// 	alert('test');
		// })


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
	
		}
	</script>



</body>
</html>