<?php 
$putih = "white";
$hitam = "rgba(84,84,84,1)";
if ($idedit == "0"){
	$stsedit = "";
	$stssave = 'style="display:block"';
	$tomboladd = "background: none;border: none;";
	$tomboladd2 = "display:block;";
	$pos_ke = 1;
} else {
	$pos_ke = 231;
	$tomboladd = "background: none;border: none; display:none;";
	
	if($edit_noedit == 0){
		$stsedit = "disabled";
		$stssave = 'style="display:none"';
		$tomboladd2 = "display:none;";
	} else {
		$stsedit = "";
		$stssave = 'style="display:block"';
		$tomboladd2 = "display:none;";
	}
}
$ttl_photo = count($data_photo);

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
	<title>Customer</title>
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap"> -->
	<link rel="stylesheet" href="{{asset('css/roboto.css')}}">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
	<!-- Google Font: Source Sans Pro -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
	<!-- daterange picker -->
	<!-- <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}"> -->
	<!-- <link rel="stylesheet" href="{{asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">  -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script> -->

	<link rel="stylesheet" href="{{asset('ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css')}}" />
	<script src="{{asset('ajax/libs/jquery/1.9.1/jquery.js')}}"></script>
	<script src="{{asset('ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js')}}"></script>
	<script src="{{asset('ajax/libs/moment.js/2.10.3/moment.min.js')}}"></script>


	<!-- date-range-picker -->
	<!-- <script src="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}"></script> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> -->


	<style type="text/css">
	.dropdown-menu-lg {
    /* max-width: 300px; */
    /* min-width: 280px; */
    /* padding: 0; */
}
			/* input[type=file]{
        display: inline;
		  opacity:0 
        } */
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
      top: 100px;
      left:0px;
      width: 100%;
      height: 100px;
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
	.imglogin {
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

	.font_14 {
    font-size: 14px;
	 position: relative;
	 margin: auto;left:0;right:0;top:0; bottom:0;
	 height:80px;
	 margin: 0 auto;
	 top:50%;
	 font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		color: rgba(51,122,183,1);
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
      top:180px;
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

	.font28{
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 28px;
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
		width: 75%;
	}
	.cmd2 {
		border-radius: 24px;
		background: rgba(207,161,62,1); 
		/* rgba(84,84,84,1); */
		color: white;
		margin-left: 10px;
		height:50px;
		width: 75%;
	}

	

#thing:hover {
   background-color: yellow
}
#Dashboard_bt {
		/* left: 60px;
		top: 35.286px; */
      /* position: fixed;
      overflow: visible;
      width: 117px; */
      white-space: nowrap;
      text-align: left;
      font-family: Roboto;
      font-style: normal;
      font-weight: normal;
      font-size: 24px;
      color: rgba(255,255,255,1);
    }
		#Rectangle_375 {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_375 {
		position: fixed;
		overflow: visible;
		width: 255px;
		height: 6px;
		left: 310px;
		top: 80px;
	}
  </style>

	

</head>
<body class="hold-transition sidebar-mini">
	@if (Auth::check())

	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light atas"
	style="margin-left: 0px;">
		<!-- Left navbar links -->
		<!-- <div class="atas"> -->
		<ul class="navbar-nav">
		
			<li class="nav-item d-none d-sm-inline-block" >
				<a href="/home" class="nav-link" id="Dashboard_bt">Dashboard /</a>
			</li>
			
			
			<li class="nav-item d-none d-sm-inline-block" id="garis_tipis">
				<a href="/subcompany1/{{$idx}}/{{$idy}}" class="nav-link atas back"  id="Dashboard_bt">{{$pilcompany}} /</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block" >
				<a href="#" class="nav-link" id="Dashboard_bt">Customer Information</a>
			</li>
			<?php 
			
			?>
			
		</ul>
		@include('layouts.logo')
		<svg class="Rectangle_375">
			<rect id="Rectangle_375" rx="0" ry="0" x="0" y="0" width="255" height="6">
			</rect>
		</svg>

		<div class="atas1">
			<div class="card-body">
				<div class="row" id="case1"> 
				
					<div class="col-md-1">
					</div>
					<div class="col-md-2">
						<div class="form-group row">
								<!-- <button class="form-control cmd" id="pil1" onclick="myFunction(1)">Data Pribadi</button> -->
								<button class="form-control cmd2 " id="pil1" onclick="myFunction(1)">Data Pribadi</button>
								<img src="{{asset('image/panah.png')}}">
								
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group row">
								<button class="form-control cmd" id="pil2" onclick="myFunction(2)">Data Usaha</button>
								<img src="{{asset('image/panah.png')}}">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group row">
								<button class="form-control cmd" id="pil3" id="cmd pil3" onclick="myFunction(3)">Data Kepemilikan</button>
								<img src="{{asset('image/panah.png')}}">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group row">
							<button class="form-control cmd" id="pil4" onclick="myFunction(4)">Data Jaminan</button>
							<img src="{{asset('image/panah.png')}}">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group row">
						<button class="form-control cmd" id="pil5" onclick="myFunction(5)">Karakteristik</button>
								<!-- <button class="form-control cmd2 collapse" id="pil5" onclick="myFunction(5)">Karakteristik</button> -->
						</div>
					</div>
					<div class="col-md-1">
					</div>
				</div>
		</div>
	</nav>

	<!-- Main Sidebar Container -->
	<div class="formwrapper awal" style="
		position: relative;">
			<?php
				if ($tbluser){
					$inputuid           = $tbluser->uid;
					$inputuser_id       = $tbluser->user_id; 
					$inputpassword      = $tbluser->password; 
					$inputfullname      = $tbluser->fullname; 
					$inputbirthplace    = $tbluser->birthplace; 
					$inputbirthdate     = $tbluser->birthdate; 
					$inputuserdesc      = $tbluser->userdesc; 
					$inputusergroup     = $tbluser->usergroup; 
					$inputcreateddate   = $tbluser->createddate; 
					$inputupdateddate   = $tbluser->updateddate; 
					$inputcreatedby     = $tbluser->createdby; 
					$inputupdatedby     = $tbluser->updatedby; 
					$inputlastsync      = $tbluser->lastsync; 
					$inputlocked        = $tbluser->locked; 
					$inputlockcount     = $tbluser->lockcount; 
					$inputpasswd_date   = $tbluser->passwd_date; 
					$inputemail         = $tbluser->email; 
					$inputemail2        = $tbluser->email2; 
					$inputtracehost     = $tbluser->tracehost; 
					$inputcompany       = $tbluser->company; 
					$inputsess_forgot   = $tbluser->sess_forgot; 
					$inputforgot_stat   = $tbluser->forgot_stat; 
					$inputmacaddress    = $tbluser->macaddress; 
					$inputnik           = $tbluser->nik; 
					$inputbranch        = $tbluser->branch; 
					$inputvalidfrom     = $tbluser->validfrom; 
					$inputvalidto       = $tbluser->validto; 
					$inputstatnew       = $tbluser->statnew; 
					$inputflag          = $tbluser->flag; 
					$inputimei          = $tbluser->imei; 
					$inputoffice        = $tbluser->office; 
					$inputphone1        = $tbluser->phone1; 
					$inputphone2        = $tbluser->phone2; 
					$inputsvisorid      = $tbluser->svisorid; 
					$inputsvisorname    = $tbluser->svisorname; 
					$inputcreatorid     = $tbluser->creatorid; 
					$inputlastchangeby  = $tbluser->lastchangeby; 
					$inputldap          = $tbluser->ldap; 
					$inputinactive      = $tbluser->inactive;
					
				} else {
					$inputuid           = "";
					$inputuser_id       = "";
					$inputpassword      = "";
					$inputfullname      = "";
					$inputbirthplace    = "";
					$inputbirthdate     = "";
					$inputuserdesc      = "";
					$inputusergroup     = "";
					$inputcreateddate   = "";
					$inputupdateddate   = "";
					$inputcreatedby     = "";
					$inputupdatedby     = "";
					$inputlastsync      = "";
					$inputlocked        = "";
					$inputlockcount     = "";
					$inputpasswd_date   = "";
					$inputemail         = "";
					$inputemail2        = "";
					$inputtracehost     = "";
					$inputcompany       = "";
					$inputsess_forgot   = "";
					$inputforgot_stat   = "";
					$inputmacaddress    = "";
					$inputnik           = "";
					$inputbranch        = "";
					$inputvalidfrom     = "";
					$inputvalidto       = "";
					$inputstatnew       = "";
					$inputflag          = "";
					$inputimei          = "";
					$inputoffice        = "";
					$inputphone1        = "";
					$inputphone2        = "";
					$inputsvisorid      = "";
					$inputsvisorname    = "";
					$inputcreatorid     = "";
					$inputlastchangeby  = "";
					$inputldap          = "";
					$inputinactive      = "";
				}
				
				// foreach ($usr_profile as $key => $profile) {
				// $inputuser_id              = $data_profile->user_id; 
				if ($data_profile){
					$inputkodesap              = $data_profile->kodesap; 

					$inputnoktp                = $data_profile->noktp; 
					$inputalmtktp              = $data_profile->almtktp; 
					$inputkelktp               = $data_profile->kelktp; 
					$inputkecktp               = $data_profile->kecktp; 
					// echo $inputkecktp;
					$inputkotaktp              = $data_profile->kotaktp; 
					$inputpropktp              = $data_profile->propktp; 
					$inputkdposktp             = $data_profile->kdposktp; 
					$inputalmtrmh              = $data_profile->almtrmh; 
					$inputkelrmh               = $data_profile->kelrmh; 
					$inputkecrmh               = $data_profile->kecrmh; 
					$inputkotarmh              = $data_profile->kotarmh; 
					$inputproprmh              = $data_profile->proprmh; 
					$inputkdposrmh             = $data_profile->kdposrmh; 
					$inputtlppri               = $data_profile->tlppri; 
					$inputfaxpri               = $data_profile->faxpri; 
					$inputhppri                = $data_profile->hppri; 
					$inputemailpri             = $data_profile->emailpri; 
					$inputhobby                = $data_profile->hobby; 
					$inputnamapsgn             = $data_profile->namapsgn; 
					$inputtmptlhrpsgn          = $data_profile->tmptlhrpsgn; 
					$inputtgllhrpsgn           = $data_profile->tgllhrpsgn; 
					$inputbtkush               = $data_profile->btkush; 
					$inputtipeush              = $data_profile->tipeush; 
					$inputnpwp                 = $data_profile->npwp; 
					$inputstatus               = $data_profile->status; 
					$inputalmtush              = $data_profile->almtush; 
					$inputkelush               = $data_profile->kelush; 
					$inputkecush               = $data_profile->kecush; 
					$inputkotaush              = $data_profile->kotaush; 
					$inputpropush              = $data_profile->propush; 
					$inputkdposush             = $data_profile->kdposush; 
					$inputtlpush               = $data_profile->tlpush; 
					$inputfaxush               = $data_profile->faxush; 
					$inputhpush                = $data_profile->hpush; 

					$inputkontakush            = $data_profile->kontakush; 
					$inputhubunganush          = $data_profile->hubunganush; 


					$inputemailush             = $data_profile->emailush; 
					$inputlmusaha              = $data_profile->lmusaha; 
					$inputkarakteristik        = $data_profile->karakteristik; 
					$inputtrackrecord        = $data_profile->trackrecord; 
					$inputnamausaha            = $data_profile->namausaha; 
					$inputnamaalias            = $data_profile->namaalias; 
					$inputagama                = $data_profile->agama; 
					$inputgoldarah             = $data_profile->goldarah; 
					$inputheadgrp              = $data_profile->headgrp;

				} else {
					$inputkodesap              = "";
					$inputnoktp                = "";
					$inputalmtktp              = "";
					$inputkelktp               = "";
					$inputkecktp               = "";
					$inputkotaktp              = "";
					$inputpropktp              = "";
					$inputkdposktp             = "";
					$inputalmtrmh              = "";
					$inputkelrmh               = "";
					$inputkecrmh               = "";
					$inputkotarmh              = "";
					$inputproprmh              = "";
					$inputkdposrmh             = "";
					$inputtlppri               = "";
					$inputfaxpri               = "";
					$inputhppri                = "";
					$inputemailpri             = "";
					$inputhobby                = "";
					$inputnamapsgn             = "";
					$inputtmptlhrpsgn          = "";
					$inputtgllhrpsgn           = "";
					$inputbtkush               = "";
					$inputtipeush              = "";
					$inputnpwp                 = "";
					$inputstatus               = "";
					$inputalmtush              = "";
					$inputkelush               = "";
					$inputkecush               = "";
					$inputkotaush              = "";
					$inputpropush              = "";
					$inputkdposush             = "";
					$inputtlpush               = "";
					$inputfaxush               = "";
					$inputhpush                = "";
					$inputemailush             = "";
					$inputlmusaha              = "";
					$inputkontakush            = "";
					$inputhubunganush          = "";

					$inputkarakteristik        = "";
					$inputtrackrecord        = "";
					$inputnamausaha            = "";
					$inputnamaalias            = "";
					$inputagama                = "";
					$inputgoldarah             = "";
					$inputheadgrp              = "";

				}
			// }
			
			?>

		

			<form method="post" action="/detailsave/{{$id}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" id="bck" name="bck" value="subcompany1/{{$idx}}/{{$idy}}">
				<input type="hidden" id="para1" name="para1" value="{{$idx}}">
				<input type="hidden" id="para2" name="para2" value="{{$idy}}">
				<input type="hidden" id="para3" name="para3" value="{{$id}}">
				<input type="hidden" id="pos_page" name="pos_page" value="{{$pos_page}}">
				<input type="hidden" id="idedit" name="idedit" value="{{$idedit}}">
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
						<input type="hidden" id="inputuid" name="inputuid" value="{{$inputuid}}">
						
						<div class="tab-pane fade active show" id="tab1" role="tabpanel" aria-labelledby="custom-content-below-home-tab">

							<div class="card card-default">
								<div class="card-header">
									<h3 class="card-title font36">Nama Sesuai KUL : <?php echo ($inputfullname==''?'-':$inputfullname) ?></h3>

									<div class="card-tools">
									<img src="{{asset('image/edit.png')}}" onclick="klikedit(1)" class="klikedit">
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group row">
												<div class="col-sm-12">
													<img src="/storeimage/{{ $inputuser_id }}" id="files-tag" width="80%" style="
																border-radius: 50%;
																margin: auto;">   
													<!-- <span id='val' style="display:none"></span> -->
													<input type="file" name="files" id="files" style="display:none;" onchange="readURL(this)">
												</div>
											</div>
											<div class="form-group row">
												<div class="col-sm-12">
													<span id='button' khususinput2='yes' style="display: block; margin: auto;display:none;" onclick="ambilphoto()">Rubah Foto Profil</span>
												</div>
											</div>
										</div>
										

										<!-- /.col -->
										<div class="col-md-8">
											<?php 
											if ($inputuser_id == "0"){
												?>
												<div class="form-group row">
													<label for="inputfullname" class="col-sm-3 col-form-label">Customer ID</label>
													<div class="col-sm-9">

														<input type="text" class="form-control @error('inputuserid') is-invalid @enderror" required autocomplete="inputuserid" autofocus
															id="inputuserid" name="inputuserid" koded="{{$idcusto}}" placeholder="Customer ID" value="{{$idcusto}}"  {{$stsedit}} khususinput="yes" onfocusout="myFunction_onfocusout()">
														@error('inputuserid')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
												<?php
											} else {
												?>
												<input type="hidden" id="inputuserid" name="inputuserid" value="{{$inputuser_id}}">
												<?php
											}
											?>
											<div class="form-group row">
												<label for="inputfullname" class="col-sm-3 col-form-label">Nama Lengkap</label>
												<div class="col-sm-9">

												@if ($inputuser_id == "0")
													<input type="text" class="form-control @error('inputfullname') is-invalid @enderror" required autocomplete="inputfullname" autofocus id="inputfullname" name="inputfullname" placeholder="Nama Lengkap" value="{{$inputfullname}}" {{$stsedit}} khususinput="yes">
													@error('inputfullname')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												@else
												<input type="text" class="form-control" id="inputfullname" name="inputfullname" placeholder="Nama Lengkap" value="{{$inputfullname}}" {{$stsedit}} khususinput="yes">
												@endif	
												</div>
											</div>
											<div class="form-group row">
												<label for="inputnamaalias" class="col-sm-3 col-form-label">Alias</label>
												<div class="col-sm-9">
													@if ($inputuser_id == "0")
													<input type="text" class="form-control @error('inputnamaalias') is-invalid @enderror" required autocomplete="inputnamaalias" autofocus id="inputnamaalias" name="inputnamaalias" placeholder="Alias" value="{{$inputnamaalias}}" {{$stsedit}} khususinput="yes">
													@error('inputnamaalias')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
													@else
													<input type="text" class="form-control" id="inputnamaalias" name="inputnamaalias" placeholder="Alias" value="{{$inputnamaalias}}" {{$stsedit}} khususinput="yes">
													@endif
												</div>
											</div>
											

											<div class="form-group row">
												<label for="inputbirthdate" class="col-sm-3 col-form-label">Tanggal Lahir</label>
												<div class="col-sm-9">
													<!-- <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="far fa-calendar-alt"></i>
														</span>
													</div> -->
													@if ($inputuser_id == "0")
													<input type="date" class="form-control  pull-right  @error('inputbirthdate') is-invalid @enderror" required autocomplete="inputbirthdate" autofocus id="inputbirthdate" name="inputbirthdate" placeholder="dd.mm.yyyy" value="{{$inputbirthdate}}" {{$stsedit}} khususinput="yes">
													@error('inputbirthdate')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
													@else
													<input type="date" class="form-control" id="inputbirthdate" name="inputbirthdate" placeholder="dd.mm.yyyy" value="{{$inputbirthdate}}" {{$stsedit}} khususinput="yes">
													@endif
												</div>
											</div>
											<div class="form-group row">
												<label for="inputbirthplace" class="col-sm-3 col-form-label">Tempat Lahir</label>
												<div class="col-sm-9">
													@if ($inputuser_id == "0")
													<input type="text" class="form-control  @error('inputbirthplace') is-invalid @enderror" required autocomplete="inputbirthplace" autofocus id="inputbirthplace" name="inputbirthplace" placeholder="Tempat Lahir" value="{{$inputbirthplace}}" {{$stsedit}} khususinput="yes">
													@error('inputbirthplace')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
													@else
													<input type="text" class="form-control" id="inputbirthplace" name="inputbirthplace" placeholder="Tempat Lahir" value="{{$inputbirthplace}}" {{$stsedit}} khususinput="yes">
													@endif
												</div>
											</div>

											<div class="form-group row">
												<label for="inputnoktp" class="col-sm-3 col-form-label">No KTP</label>
												<div class="col-sm-9">
												@if ($inputuser_id == "0")
													<input type="text" class="form-control"  autocomplete="inputnoktp" autofocus id="inputnoktp" name="inputnoktp" placeholder="No KTP" value="{{$inputnoktp}}" {{$stsedit}} khususinput="yes">
													@else
													<input type="text" class="form-control" id="inputnoktp" name="inputnoktp" placeholder="No KTP" value="{{$inputnoktp}}" {{$stsedit}} khususinput="yes">
													@endif
												</div>
											</div>
											<div class="form-group row">
												<label for="inputagama" class="col-sm-3 col-form-label">Agama</label>
												<div class="col-sm-4">
												@if ($inputuser_id == "0")
													<select class="form-control @error('inputagama') is-invalid @enderror" required autocomplete="inputagama" autofocus id="inputagama" name="inputagama" {{$stsedit}} khususinput="yes"> 
													<option value="">--- Select Agama ---</option>
													<?php 
													foreach ($tblagama as $key => $value) {
														?>
														<option value="{{$value->id}}" <?php echo ($value->id == $inputagama?'selected':'');?>>{{$value->agama}}</option>
														<?php
													}
													?>
													</select>
													@error('inputagama')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
													@else
													<select class="form-control" id="inputagama" name="inputagama" {{$stsedit}} khususinput="yes"> 
													<option value="">--- Select Agama ---</option>
													<?php 
													foreach ($tblagama as $key => $value) {
														?>
														<option value="{{$value->id}}" <?php echo ($value->id == $inputagama?'selected':'');?>>{{$value->agama}}</option>
														<?php
													}
													?>
													</select>
													@endif
												</div>
											</div>

											<div class="form-group row">
												<label for="inputgoldarah" class="col-sm-3 col-form-label">Golongan Darah</label>
												<div class="col-sm-4">
												@if ($inputuser_id == "0")
													<select class="form-control" id="inputgoldarah" name="inputgoldarah" {{$stsedit}} khususinput="yes"> 
													<option value="">--- Select Golongan Darah ---</option>
													<?php 
													foreach ($tbldarah  as $key => $value) {
														?>
														<option value="{{$value->id}}" <?php echo ($value->id == $inputgoldarah?'selected':'');?>>{{$value->darah}}</option>
														<?php
													}
													?>
													</select>
													
													@else
													<select class="form-control" id="inputgoldarah" name="inputgoldarah" {{$stsedit}} khususinput="yes"> 
													<option value="">--- Select Golongan Darah ---</option>
													<?php 
													foreach ($tbldarah  as $key => $value) {
														?>
														<option value="{{$value->id}}" <?php echo ($value->id == $inputgoldarah?'selected':'');?>>{{$value->darah}}</option>
														<?php
													}
													?>
													</select>
													@endif

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
									<img src="{{asset('image/edit.png')}}" onclick="klikedit(1)" class="klikedit">
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputalmtktp" class="col-sm-3 col-form-label">Alamat</label>
												<div class="col-sm-9">
												@if ($inputuser_id == "0")
													<textarea class="form-control @error('inputalmtktp') is-invalid @enderror" required autocomplete="inputalmtktp" autofocus rows="10" id="inputalmtktp" name="inputalmtktp" placeholder="Contoh : Jl. Cendrawasih 11 no.43 Surakarta" {{$stsedit}} khususinput="yes" maxlength="50" style="background: #f8f9fa;">{{$inputalmtktp}}</textarea>
													@error('inputalmtktp')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
													@else
													<textarea class="form-control" rows="10" id="inputalmtktp" name="inputalmtktp" placeholder="Contoh : Jl. Cendrawasih 11 no.43 Surakarta"  {{$stsedit}} khususinput="yes" maxlength="50" style="background: #f8f9fa;">{{$inputalmtktp}}</textarea>
													@endif

												</div>
											</div>

											
										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
											
												<label for="inputkelktp" class="col-sm-3 col-form-label">Kelurahan</label>
												
												<div class="col-sm-9">
												@if ($inputuser_id == "0")
													<input type="text" class="form-control @error('inputkelktp') is-invalid @enderror" required autocomplete="inputkelktp" autofocus name="inputkelktp" id="inputkelktp" placeholder="Kelurahan" 
													onchange="mykelurahan(1,this)" value="{{$inputkelktp}}"  {{$stsedit}} khususinput="yes">
													@error('inputkelktp')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
													@else
													<input type="text" class="form-control" name="inputkelktp" id="inputkelktp" placeholder="Kelurahan" 
													onchange="mykelurahan(1,this)" value="{{$inputkelktp}}"  {{$stsedit}} khususinput="yes">
													@endif
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkecktp" class="col-sm-3 col-form-label">Kecamatan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkecktp1" placeholder="Kecamatan" value="{{$inputkecktp}}" disabled>
													<input type="text" class="form-control" style="display:none" id="inputkecktp" name="inputkecktp" placeholder="Kecamatan" value="{{$inputkecktp}}">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkotaktp" class="col-sm-3 col-form-label">Kabupaten</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkotaktp1" placeholder="Kabupaten" value="{{$inputkotaktp}}" disabled>
													<input type="text" class="form-control" style="display:none" id="inputkotaktp" name="inputkotaktp" placeholder="Kabupaten" value="{{$inputkotaktp}}">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputpropktp" class="col-sm-3 col-form-label">Provinsi</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputpropktp1" placeholder="Provinsi" value="{{$inputpropktp}}" disabled>
													<input type="text" class="form-control" style="display:none" id="inputpropktp" name="inputpropktp" placeholder="Provinsi" value="{{$inputpropktp}}">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkdposktp" class="col-sm-3 col-form-label">Kode Pos</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkdposktp1" placeholder="Kode Pos" value="{{$inputkdposktp}}" disabled>
													<input type="text" class="form-control" style="display:none" id="inputkdposktp" name="inputkdposktp" placeholder="Kode Pos" value="{{$inputkdposktp}}">
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
									
										<h3 class="card-title font36" stype="width:250px;">Alamat Rumah </h3>
										<button type="button" class="font_14" style="height:50px;width:200px;background: none;border:none;margin-left:{{$pos_ke}}px;{{$tomboladd}}
										::after, ::before {
												/* box-sizing: border-box; */
										}
										" onclick="myduplikatalamat()" khususinput2="yes"><ion-icon name="add-circle" ></ion-icon>Copy from Alamat KTP</button>
										
										
									<div class="card-tools">
										<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
										<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
										<img src="{{asset('image/edit.png')}}" onclick="klikedit(1)" class="klikedit">
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
													<textarea class="form-control" rows="10" id="inputalmtrmh" name="inputalmtrmh" placeholder="Contoh : Jl. Cendrawasih 11 no.43 Surakarta"  value="{{$inputalmtrmh}}" {{$stsedit}} khususinput="yes" maxlength="50" style="background: #f8f9fa;">{{$inputalmtrmh}}</textarea>
												</div>
											</div>
										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputkelrmh" class="col-sm-3 col-form-label">Kelurahan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkelrmh" name="inputkelrmh" placeholder="Kelurahan" onchange="mykelurahan(2,this)" value="{{$inputkelrmh}}" {{$stsedit}}  khususinput="yes">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkecrmh" class="col-sm-3 col-form-label">Kecamatan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkecrmh1" placeholder="Kecamatan" value="{{$inputkecrmh}}" disabled>
													<input type="text" class="form-control" style="display:none" id="inputkecrmh" name="inputkecrmh" placeholder="Kecamatan" value="{{$inputkecrmh}}">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkotarmh" class="col-sm-3 col-form-label">Kabupaten</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkotarmh1" placeholder="Kabupaten" value="{{$inputkotarmh}}" disabled>
													<input type="text" class="form-control" style="display:none" id="inputkotarmh" name="inputkotarmh" placeholder="Kabupaten" value="{{$inputkotarmh}}">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputproprmh" class="col-sm-3 col-form-label">Provinsi</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputproprmh1"  placeholder="Provinsi" value="{{$inputproprmh}}" disabled>
													<input type="text" class="form-control" style="display:none" id="inputproprmh" name="inputproprmh" placeholder="Provinsi" value="{{$inputproprmh}}">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkdposrmh" class="col-sm-3 col-form-label">Kode Pos</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkdposrmh1" placeholder="Kode Pos" value="{{$inputkdposrmh}}" disabled>
													<input type="text" class="form-control" style="display:none" id="inputkdposrmh" name="inputkdposrmh" placeholder="Kode Pos" value="{{$inputkdposrmh}}">
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
									<h3 class="card-title font36">Kontak Usaha</h3>

									<div class="card-tools">
										
										<button type="button" khususinput2='yes' style="{{$tomboladd}}" name="addmedsospri" id="addmedsospri">
											<i class="fas fa-plus-circle fa-3x" style="color:rgb(51 122 183);"></i>
										</button>
										
									</div>
								</div>


								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputtlppri" class="col-sm-3 col-form-label">No Telp.</label>
												<div class="col-sm-9">
													<div class="input-group">
														<input type="text" class="form-control" id="inputtlppri" name="inputtlppri" ata-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true" value="{{$inputtlppri}}" {{$stsedit}} khususinput="yes">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputfaxpri" class="col-sm-3 col-form-label">Fax.</label>
												<div class="col-sm-9">
													<div class="input-group">
														<input type="text" class="form-control" id="inputfaxpri" name="inputfaxpri" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true" value="{{$inputfaxpri}}" {{$stsedit}}>
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
														<input type="text" class="form-control" id="inputhppri" name="inputhppri" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true" value="{{$inputhppri}}" {{$stsedit}} khususinput="yes">
													</div>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputemailpri" class="col-sm-3 col-form-label">Email</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputemailpri" name="inputemailpri" placeholder="Email" value="{{$inputemailpri}}" onchange="myemail(this)" {{$stsedit}}>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card card-default">
								<div class="card-body" id="inpmedsospri">
										<?php 
										$medsos_i=-1;
										foreach ($data_additional as $key => $data) {
										if ($data->type == 'MEDSOS'){
										$medsos_i++;
										?>
										<div class="row" id="rowsmedsospri{{$medsos_i}}">
											<div class="col-md-6">
												<div class="form-group row">
													<label for="inputusahamediasosial" class="col-sm-3 col-form-label">Media Sosial</label>
													<div class="col-sm-9">
														
														<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputmedsospri[]" name="inputmedsospri[]" {{$stsedit}} khususinput="yes"> 
														<?php 
														foreach ($tblmedsos as $key => $value) {
														?>
															<option value="{{$value->seq}}" <?php echo ($value->seq == $data->seq?'selected':'');?>>{{$value->desc}}</option>
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
														<input type="text" class="form-control" id="inputmedsosakunpri[]" name="inputmedsosakunpri[]" placeholder="Nama Akun Media Sosial" value="{{$data->desc}}" {{$stsedit}} khususinput="yes">
													</div>
												</div>
											</div>
											<div class="col-md-1">
												<div class="form-group row">
													<div class="col-sm-12">
														<button type="button" name="removemedsospri" id="{{$medsos_i}}" class="btn btn-danger btn_remove2x" khususinput='yes' style="display:none;">X</button>
													</div>
												</div>
											</div>
											<!-- /.col -->
										</div>
										<?php 
										}
										}
										$medsos_i++;
										?>
										@if ($idedit == "0")

										<div class="row" id="rowsmedsospri{{$medsos_i}}">
											<div class="col-md-6">
												<div class="form-group row">
													<label for="inputusahamediasosial" class="col-sm-3 col-form-label">Media Sosial</label>
													<div class="col-sm-9">
														
														<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputmedsospri[]" name="inputmedsospri[]"> 
														<option value="">--- Pilih Account Media Sosial ---</option>
														<?php 
														foreach ($tblmedsos as $key => $value) {
														?>
															<option value="{{$value->seq}}">{{$value->desc}}</option>
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
														<input type="text" class="form-control" id="inputmedsosakunpri[]" name="inputmedsosakunpri[]" placeholder="Nama Akun Media Sosial">
													</div>
												</div>
											</div>
											<div class="col-md-1">
												<div class="form-group row">
													<div class="col-sm-12">
														<button type="button" name="removemedsospri" id="{{$medsos_i}}" class="btn btn-danger btn_remove2x" khususinput='yes'>X</button>
													</div>
												</div>
											</div>
											<!-- /.col -->
										</div>
										@endif


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
										<img src="{{asset('image/edit.png')}}" onclick="klikedit(1)" class="klikedit">
										<button type="button" khususinput2='yes' style="{{$tomboladd}}" name="addkelga" id="addkelga">
											<i class="fas fa-plus-circle fa-3x" style="color:rgb(51 122 183);"></i>
										</button>
										
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

									<?php 
									$txt='<option value="">-</option>';
									foreach ($tblhubkelga as $key => $value) {
										$txt.= '<option value="'.$value->seq.'">'.$value->desc.'</option>';
									}
									$txt1="";
									foreach ($tblsex as $key => $value) {
										$txt1.= '<option value="'.$value->seq.'">'.$value->desc.'</option>';
									}
									$txt2="";
									foreach ($tblsekolah as $key => $value) {
										$txt2.= '<option value="'.$value->seq.'">'.$value->desc.'</option>';
									}
									?>
									<input type="hidden" id="opthubkelga" value="{{$txt}}">
									<input type="hidden" id="optsex" value="{{$txt1}}">
									<input type="hidden" id="optsekolah" value="{{$txt2}}">
								<div class="card-body"  id="inpkelga">
								
									<?php 
									$data_keluarga_i=-1;
									foreach ($data_additional as $key => $data) {
									if ($data->type == 'DATA_KELUARGA'){
									$data_keluarga_i++;
									?>
									<div class="row" id="rowkelga{{$data_keluarga_i}}">
										<!-- <div class="col-md-1">
											<div class="form-group row kotakexcel_kosong">
												<label for="inputkeluargano" class="col-sm-12 col-form-label">{{$data_keluarga_i}}</label>
											</div>
										</div> -->
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputkeluarganama[]" khususinput="yes" name="inputkeluarganama[]" placeholder="Nama" value="{{$data->value1}}" {{$stsedit}} khususinput="yes">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputkeluargatempat1[]" placeholder="Tempat" value="{{$data->value2}}" disabled>
												<input type="hidden" class="form-control" id="inputkeluargatempat[]" name="inputkeluargatempat[]" placeholder="Tempat" value="{{$data->value2}}">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputkeluargatanggallahir1[]" placeholder="Tempat" value="{{$data->value3}}" disabled>
												<input type="hidden" class="form-control" id="inputkeluargatanggallahir[]" name="inputkeluargatanggallahir[]" placeholder="Tempat" value="{{$data->value3}}">
											</div>
										</div>

										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="hidden" class="form-control" id="inputkeluargasex[]" name="inputkeluargasex[]" placeholder="Tempat" value="{{$data->value4}}">
												<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputkeluargasex1[]" disabled> 
												<?php 
												foreach ($tblsex as $key => $value) {
												?>
													<option value="{{$value->info}}" <?php echo ($value->info == $data->value4?'selected':'');?>>{{$value->desc}}</option>
												<?php
												}
												?>
												</select>

											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="hidden" class="form-control" id="inputkeluargastatus[]" name="inputkeluargastatus[]" placeholder="Tempat" value="{{$data->seq}}">
												<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputkeluargastatus1[]" disabled> 
												<?php 
												foreach ($tblhubkelga as $key => $value) {
												?>
													<option value="{{$value->seq}}" <?php echo ($value->seq == $data->seq?'selected':'');?>>{{$value->desc}}</option>
												<?php
												}
												?>
												</select>
											</div>
										</div>

										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-9">
													<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputkeluargapendidikan[]" name="inputkeluargapendidikan[]" id="styledatakeluarga" {{$stsedit}} khususinput="yes"> 
													<?php 
													foreach ($tblsekolah as $key => $value) {
													?>
														<option value="{{$value->info}}" <?php echo ($value->info == $data->value6?'selected':'');?>>{{$value->desc}}</option>
													<?php
													}
													?>
													</select>
												</div>
												<div class="col-sm-2">
													<button type="button" name="remove" id="{{$data_keluarga_i}}" class="btn btn-danger btn_remove3">X</button>
												</div>
											</div>
										</div>
									</div>
									<?php
										}
									}
									$data_keluarga_i++;
									?>
									@if ($idedit == "0")
									<div class="row" id="rowkelga{{$data_keluarga_i}}">
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" placeholder="Nama" 
													id="inputkeluarganama[]" name="inputkeluarganama[]">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="date" class="form-control" placeholder="Tempat Lahir"
													id="inputkeluargatempat[]" name="inputkeluargatempat[]">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" placeholder="Tanggal lahir"
													id="inputkeluargatanggallahir[]" name="inputkeluargatanggallahir[]">
											</div>
										</div>

										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" 
													id="inputkeluargasex[]"  name="inputkeluargasex[]"> 
													<option value="">--- Pilih Sex ---</option>
												<?php 
												foreach ($tblsex as $key => $value) {
												?>
													<option value="{{$value->info}}">{{$value->desc}}</option>
												<?php
												}
												?>
												</select>

											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" 
													id="inputkeluargastatus[]">  
													<option value="">--- Pilih Hubungan Keluarga---</option>
												<?php 
												foreach ($tblhubkelga as $key => $value) {
												?>
													<option value="{{$value->seq}}">{{$value->desc}}</option>
												<?php
												}
												?>
												</select>
											</div>
										</div>

										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-9">
													<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" 
														id="inputkeluargapendidikan[]" name="inputkeluargapendidikan[]"> 
														<option value="">--- Pilih Pendidikan ---</option>
													<?php 
													foreach ($tblsekolah as $key => $value) {
													?>
														<option value="{{$value->info}}">{{$value->desc}}</option>
													<?php
													}
													?>
													</select>
												</div>
												<div class="col-sm-2">
													<button type="button" name="remove" id="{{$data_keluarga_i}}" class="btn btn-danger btn_remove3">X</button>
												</div>
											</div>
										</div>
									</div>
									@endif


								</div>
								
								<!-- 
								<div class="col-md-1">
									<div class="form-group row ">
										<div class="col-sm-12">
											<button type="button" khususinput2='yes' style="{{$tomboladd}}" name="addkelga" id="addkelga">
												<i class="fas fa-plus-circle fa-3x" style="color:rgb(51 122 183);"></i>
											</button>
										</div>
									</div>
								</div> 
								-->
								
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
										<img src="{{asset('image/edit.png')}}" onclick="klikedit(1)" class="klikedit">
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
													<textarea class="form-control" rows="10" id="inputhobby" name="inputhobby" placeholder="Enter ..." {{$stsedit}} khususinput="yes">{{$inputhobby}}</textarea>
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
										<img src="{{asset('image/edit.png')}}" onclick="klikedit(2)" class="klikedit">
									</div>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputbtkush" class="col-sm-3 col-form-label">Bentuk Usaha</label>
												<div class="col-sm-9">
													<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputbtkush" name="inputbtkush" style="font-size: 1rem;;" {{$stsedit}} khususinput="yes"> 
													<?php 
													foreach ($tabelbentukusaha as $key => $value) {
													?>
														<option value="{{$value->seq}}" <?php echo ($value->seq == $inputbtkush?'selected':'');?>>{{$value->desc}}</option>
													<?php
													}
													?>
													</select>

												</div>
											</div>

											<div class="form-group row">
												<label for="inputtipeush" class="col-sm-3 col-form-label">Tipe Badan Hukum</label>
												<div class="col-sm-9">
												<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputtipeush" name="inputtipeush" style="font-size: 1rem;" {{$stsedit}} khususinput="yes"> 
													<?php 
													foreach ($tabelbadanhukum as $key => $value) {
													?>
														<option value="{{$value->seq}}" <?php echo ($value->seq == $inputtipeush?'selected':'');?>>{{$value->desc}}</option>
													<?php
													}
													?>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputnamausaha" class="col-sm-3 col-form-label">Nama Usaha</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputnamausaha" name="inputnamausaha" placeholder="Nama Usaha" value="{{$inputnamausaha}}" {{$stsedit}} khususinput="yes">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputlmusaha" class="col-sm-3 col-form-label">Lama Usaha</label>
												<div class="col-sm-6">	
													<input type="number" class="form-control" id="inputlmusaha" name="inputlmusaha" placeholder="Lama Usaha" value="{{$inputlmusaha}}" {{$stsedit}} khususinput="yes">
												</div>
												<label for="inputlmusaha" class="col-sm-3 col-form-label">Tahun</label>
											</div>

										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputnpwp" class="col-sm-3 col-form-label">NPWP</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputnpwp" name="inputnpwp" placeholder="NPWP" value="{{$inputnpwp}}" {{$stsedit}} khususinput="yes">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputheadgrp" class="col-sm-3 col-form-label">Head Group</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputheadgrp" name="inputheadgrp" placeholder="Head Group" value="{{$inputheadgrp}}" {{$stsedit}} khususinput="yes">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkodesap" class="col-sm-3 col-form-label">Kode SAP</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkodesap" name="inputkodesap" placeholder="kode Sap" value="{{$inputkodesap}}" {{$stsedit}} khususinput="yes">
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
										<img src="{{asset('image/edit.png')}}" onclick="klikedit(2)" class="klikedit">
										<button type="button" khususinput2='yes' style="{{$tomboladd}}" name="addstatususaha" id="addstatususaha" class="btn btn-success"><i class="fas fa-plus-circle fa-3x" style="color:rgb(51 122 183);"></i></button>
									</div>
								</div>
								<!-- /.card-header -->

								<div class="card-body" id="inpstatususaha">
								<?php 
								$txt='<option value="">-</option>';
								foreach ($tabelstatus_usaha as $key => $value) {
									$txt.= '<option value="'.$value->seq.'">'.$value->desc.'</option>';
								}
								?>
									<input type="hidden" id="optstatususaha" value="{{$txt}}">
								<?php 
									$statususaha_i=-1;
									foreach ($data_additional as $key => $data) {
									if ($data->type == 'STATUSUSAHA'){
									$statususaha_i++;
									?>
									<div class="row" id="rowsstatususaha{{$statususaha_i}}">
										<div class="col-md-5">
											<div class="form-group row">
												<div class="col-sm-12">
													<select class="form-control btn btn-default btn-default btn-lg " id="inputstatusush[]" name="inputstatusush[]" style="color:white;height: 60px;background: rgba(51,122,183,1);"  {{$stsedit}} khususinput="yes"> 
													<?php 
													foreach ($tabelstatus_usaha as $key => $value) {
													?>
														<option value="{{$value->seq}}" <?php echo ($value->seq == $data->desc?'selected':'');?>>{{$value->desc}}</option>
													<?php
													}
													?>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group row">
												<!-- <div class="col-sm-12">
													<button type="button" name="remove" id="{{$statususaha_i}}" class="btn btn-danger btn_removeb">X</button>
												</div> -->
											</div>
										</div>
									</div>
									<?php 
									}
									}
									$statususaha_i++;
									?>
@if ($idedit == "0")
									<div class="row" id="rowsstatususaha{{$statususaha_i}}">
										<div class="col-md-5">
											<div class="form-group row">
												<div class="col-sm-12">
													<select class="form-control btn btn-default btn-default btn-lg " id="inputstatusush[]" name="inputstatusush[]" style="color:white;height: 60px;background: rgba(51,122,183,1);"> 
													<option value="">--- Pilih Status Usaha ---</option>
													<?php 
													foreach ($tabelstatus_usaha as $key => $value) {
													?>
														<option value="{{$value->seq}}">{{$value->desc}}</option>
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
													<button type="button" name="remove" id="{{$statususaha_i}}" class="btn btn-danger btn_removeb">X</button>
												</div>
											</div>
										</div>
									</div>
													@endif
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
										<h3 class="card-title font36" style="width:250px">Alamat usaha</h3>
										<!-- <button type="button" style="height:50px;width:50px;{{$tomboladd}}" onclick="myduplikatalamatusaha()"><ion-icon name="add-circle"></ion-icon>Dup</button>
										Duplicat -->

										<!-- <button type="button" class="font_14" style="height:50px;width:200px;background: none;margin-left:{{$pos_ke}}px;{{$tomboladd}}border:none;
										::after, ::before {
												/* box-sizing: border-box; */
										}
										" onclick="myduplikatalamatusaha()" khususinput2="yes"><ion-icon name="add-circle" ></ion-icon>Copy from Alamat KTP</button>
										 -->

									</div>
									<div class="card-tools">
									<img src="{{asset('image/edit.png')}}" onclick="klikedit(2)" class="klikedit">
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
													<textarea class="form-control" rows="10" id="inputalmtush" name="inputalmtush" placeholder="Contoh : Jl. Cendrawasih 11 no.43 Surakarta"  {{$stsedit}} khususinput="yes" maxlength="50" style="background: #f8f9fa;">{{$inputalmtush}}</textarea>
												</div>
											</div>
										</div>
										<!-- /.col -->
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputkelrmh" class="col-sm-3 col-form-label">Kelurahan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkelush" name="inputkelush" placeholder="Kelurahan" onchange="mykelurahan(3,this)" name="{{$inputkelush}}" {{$stsedit}} khususinput="yes">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkecrmh" class="col-sm-3 col-form-label">Kecamatan</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkecush1"  placeholder="Kecamatan" value="{{$inputkecush}}" disabled>
													<input type="text" class="form-control" style="display:none" id="inputkecush" name="inputkecush" placeholder="Kecamatan" value="{{$inputkecush}}">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkotaush" class="col-sm-3 col-form-label">Kabupaten</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkotaush1" placeholder="Kabupaten" value="{{$inputkotaush}}" disabled>
													<input type="text" class="form-control" style="display:none" id="inputkotaush" name="inputkotaush" placeholder="Kabupaten" value="{{$inputkotaush}}">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputproprmh" class="col-sm-3 col-form-label">Provinsi</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputpropush1" placeholder="Provinsi" value="{{$inputpropush}}" disabled>
													<input type="text" class="form-control" style="display:none" id="inputpropush" name="inputpropush" placeholder="Provinsi" value="{{$inputpropush}}">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputkdposush" class="col-sm-3 col-form-label">Kode Pos</label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="inputkdposush1"  placeholder="Kode Pos" value="{{$inputkdposush}}" disabled>
													<input type="text" class="form-control" style="display:none" id="inputkdposush" name="inputkdposush" placeholder="Kode Pos" value="{{$inputkdposush}}">
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
										<button type="button" khususinput2='yes' style="{{$tomboladd}}" name="addmedsosush" id="addmedsosush" class="btn btn-success">
											<i class="fas fa-plus-circle fa-3x" style="color:rgb(51 122 183);"></i>
										</button>
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
														<input type="text" id="inputtlpush" name="inputtlpush" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true" value="{{$inputtlpush}}" {{$stsedit}} khususinput="yes">
													</div>
												</div>
											</div>
											
											<div class="form-group row">
												<label for="inputfaxush" class="col-sm-3 col-form-label">Fax.</label>
												<div class="col-sm-9">
													<div class="input-group">
														<input type="text" class="form-control" id="inputfaxush" name="inputfaxush" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true"  value="{{$inputfaxush}}" {{$stsedit}} khususinput="yes">
													</div>
												</div>
											</div>

											<div class="form-group row">
												<label for="inputfaxush" class="col-sm-3 col-form-label">Nama Kontak</label>
												<div class="col-sm-9">
													<div class="input-group">
														<input type="text" class="form-control" id="inputkontakush" name="inputkontakush" value="{{$inputkontakush}}" {{$stsedit}} khususinput="yes">
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
														<input type="text" class="form-control" id="inputhpush" name="inputhpush" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true" value="{{$inputhpush}}" {{$stsedit}} khususinput="yes">
													</div>
												</div>
											</div>
											

											<div class="form-group row">
												<label for="inputemailush" class="col-sm-3 col-form-label">Email</label>
												<div class="col-sm-9">
												<!-- tutup -->
													<input type="text" class="form-control" id="inputemailush" name="inputemailush" placeholder="Email" value="{{$inputemailush}}" {{$stsedit}} khususinput="yes">
												</div>
											</div>

											<div class="form-group row">
												<label for="inputfaxush" class="col-sm-3 col-form-label">Hubungannya</label>
												<div class="col-sm-9">
													<div class="input-group">
														<input type="text" class="form-control" id="inputhubunganush" name="inputhubunganush" value="{{$inputhubunganush}}" {{$stsedit}} khususinput="yes">
													</div>
												</div>
											</div>
										</div>
										<!-- /.col -->
									</div>
									<!-- /.row -->
								</div>

								<?php 
								$txt='<option value="">-</option>';
								foreach ($tblmedsos as $key => $value) {
									$txt.= '<option value="'.$value->seq.'">'.$value->desc.'</option>';
								}
								?>
								<input type="hidden" id="optmedsos" value="{{$txt}}">
								<?php 

								?>

								<div class="card-body" id="inpmedsosush">
									<?php 
									$medsosush_i=-1;
									foreach ($data_additional as $key => $data) {
									if ($data->type == 'MEDSOSUSH'){
									$medsosush_i++;
									?>
									<div class="row" id="rowmedsos{{$medsosush_i}}">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputusahamediasosial" class="col-sm-3 col-form-label">Media Sosial</label>
												<div class="col-sm-9">
													
													<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputmedsosush[]" name="inputmedsosush[]" {{$stsedit}} khususinput="yes"> 
													<?php 
													foreach ($tblmedsos as $key => $value) {
													?>
														<option value="{{$value->seq}}" <?php echo ($value->seq == $data->sseq?'selected':'');?>>{{$value->desc}}</option>
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
													<input type="text" class="form-control" id="inputmedsosakunush[]" name="inputmedsosakunush[]" placeholder="Nama Akun Media Sosial" value="{{$data->desc}}" {{$stsedit}} khususinput="yes">
												</div>
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group row">
												<div class="col-sm-12">
													<button type="button" name="remove" id="{{$medsosush_i}}" class="btn btn-danger btn_remove20" khususinput='yes' style="display:none;">X</button>
												</div>
											</div>
										</div>
										<!-- /.col -->
									</div>
									<?php 
									}
									}
									$medsosush_i++;
									?>
@if ($idedit == "0")
									<div class="row" id="rowmedsos{{$medsosush_i}}">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="inputusahamediasosial" class="col-sm-3 col-form-label">Media Sosial</label>
												<div class="col-sm-9">
													
													<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputmedsosush[]" name="inputmedsosush[]"> 
													<option value="">--- Pilih Account Media Sosial ---</option>
													<?php 
													foreach ($tblmedsos as $key => $value) {
													?>
														<option value="{{$value->seq}}" >{{$value->desc}}</option>
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
													<input type="text" class="form-control" id="inputmedsosakunush[]" name="inputmedsosakunush[]" placeholder="Nama Akun Media Sosial">
												</div>
											</div>
										</div>
										<div class="col-md-1">
											<div class="form-group row">
												<div class="col-sm-12">
													<button type="button" name="remove" id="{{$medsosush_i}}" class="btn btn-danger btn_remove20" khususinput='yes'>X</button>
												</div>
											</div>
										</div>
										<!-- /.col -->
									</div>
@endif
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
									<h3 class="card-title font36">Saudara atau kerabat yang masih memiliki KUL Aktif di CPP Grup yang jadi Agen / Distributor</h3>

									<div class="card-tools">
										<img src="{{asset('image/edit.png')}}" onclick="klikedit(2)" class="klikedit">
										<button type="button" khususinput2='yes' style="{{$tomboladd}}" name="addagenhub" id="addagenhub" class="btn btn-success">
											<i class="fas fa-plus-circle fa-3x" style="color:rgb(51 122 183);"></i>
										</button>
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

								<?php 
									$txt='<option value="">-</option>';
									foreach ($tblagenhubunganstatus as $key => $value) {
										$txt.= '<option value="'.$value->desc.'">'.$value->desc.'</option>';
									}
									?>
								<input type="hidden" id="optagenhub" value="{{$txt}}">

								<div class="card-body" id="inpagenhub">
								
									<?php 
									$agen_hub_i=-1;
									foreach ($data_additional as $key => $data) {
										if ($data->type == 'AGEN_HUB'){
											$agen_hub_i++;
											?>
											
											<div class="row" id="rowsagenhub{{$agen_hub_i}}">

												<div class="col-md-4">
													<div class="form-group row kotakexcel_kosong">
														<input type="text" class="form-control" id="inputagenhubnama[]" name="inputagenhubnama[]" placeholder="Nama" value="{{$data->value1}}" {{$stsedit}} khususinput="yes">
													</div>
												</div>
												
												<div class="col-md-4">
													<div class="form-group row kotakexcel_kosong">
														<input type="text" class="form-control" id="inputagenaubkode[]" name="inputagenaubkode[]" placeholder="No Sap" value="{{$data->value2}}" {{$stsedit}} khususinput="yes">
													</div>
												</div>
												
												<div class="col-md-4">
													<div class="form-group row kotakexcel_kosong">
														<div class="col-sm-10">
															<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputAgenHubStatus[]" name="inputAgenHubStatus[]" {{$stsedit}} khususinput="yes"> 
															<?php 
															foreach ($tblagenhubunganstatus as $key => $value) {
															?>
																<option value="{{$value->desc}}" <?php echo ($value->desc == $data->value4?'selected':'');?>>{{$value->desc}}</option>
															<?php
															}
															?>
															</select>	

														</div>
														<div class="col-sm-2">
															<!-- <button type="button" name="remove" id="{{$agen_hub_i}}" class="btn btn-danger btn_remove4">X</button> -->
														</div>
													</div>
												</div>
												
											</div>
											<?php 
										}
									}
									$agen_hub_i++;
									?>

@if ($idedit == "0")
									<div class="row" id="rowsagenhub{{$agen_hub_i}}">
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputagenhubnama[]" name="inputagenhubnama[]" placeholder="Nama" >
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputagenaubkode[]" name="inputagenaubkode[]" placeholder="No Sap">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-10">
													<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputAgenHubStatus[]" name="inputAgenHubStatus[]"> 
													<?php 
													foreach ($tblagenhubunganstatus as $key => $value) {
													?>
														<option value="{{$value->desc}}">{{$value->desc}}</option>
													<?php
													}
													?>
													</select>	

												</div>
												<div class="col-sm-2">
													<button type="button" name="remove" id="{{$agen_hub_i}}" class="btn btn-danger btn_remove4">X</button>
												</div>
											</div>
										</div>
									</div>
									@endif

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
									<h3 class="card-title font36">Tipe / Jenis Penjualan</h3>

									<div class="card-tools">
										<img src="{{asset('image/edit.png')}}" onclick="klikedit(2)" class="klikedit">
										<button type="button" khususinput2='yes' style="{{$tomboladd}}" name="addareasubagen" id="addareasubagen" class="btn btn-success">
											<i class="fas fa-plus-circle fa-3x" style="color:rgb(51 122 183);"></i>
										</button>
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
												<label for="inputbtkush" class="col-sm-12 col-form-label">Nama Pembeli</label>
												
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel">
												<label for="inputtipebadanhukum" class="col-sm-12 col-form-label">Volume (Rp)/Bulan</label>
												
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

								

								<?php 
								$txt='<option value="">-</option>';
								foreach ($tabelarea_usaha as $key => $value) {
									$txt.= '<option value="'.$value->desc.'">'.$value->desc.'</option>';
								}
								?>
								<input type="hidden" id="optareasubagen" value="{{$txt}}">
								<?php 

								?>


								<div class="card-body" id="inpareasubagen">
									<?php
									$area_i=-1;
									foreach ($data_additional as $key => $data) {
										if   (($data->type == 'AREA_SUBAGEN')
											or ($data->type == 'AREA_PETAMBAK')
											or ($data->type == 'AREA_LAIN')
										){
											$area_i++;
											?>
									<div class="row" id="rowsareasubagen{{$area_i}}">
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<select class="form-control" id="inputNamaarea[]" name="inputNamaarea[]" {{$stsedit}} khususinput="yes"> 
												<?php
												foreach ($tabelarea_usaha as $key => $value) {
													?>

													<option value="{{$value->type}}" <?php echo ($value->type == $data->type?'selected':'');?> >{{$value->type}}</option>

													<?php
												}
												?>

													
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputNamaSubAgen[]" name="inputNamaSubAgen[]" placeholder="Nama" value="{{$data->value1}}" {{$stsedit}} khususinput="yes">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												
												<input type="text" class="form-control" id="inputQtySubAgen[]" name="inputQtySubAgen[]" placeholder="qty" value="{{$data->desc}}" {{$stsedit}} khususinput="yes">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputLokasiSubAgen[]" name="inputLokasiSubAgen[]" placeholder="lokasi" value="{{$data->value2}}" {{$stsedit}} khususinput="yes">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">

												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputInfoSubAgen[]" name="inputInfoSubAgen[]" placeholder="info" value="{{$data->value3}}" {{$stsedit}} khususinput="yes">
												</div>
												<div class="col-sm-2">
													<!-- <button type="button" name="remove" id="{{$area_i}}" class="btn btn-danger btn_remove5">X</button> -->
												</div>
											</div>
										</div>
									</div>
									<!-- /.row -->

									<?php
											}
										}
										$area_i++;
									?>
									@if ($idedit == "0")
									<div class="row" id="rowsareasubagen{{$area_i}}">
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<select class="form-control" id="inputNamaarea[]" name="inputNamaarea[]"> 
												<?php
												foreach ($tabelarea_usaha as $key => $value) {
													?>

													<option value="{{$value->type}}">{{$value->type}}</option>

													<?php
												}
												?>

													
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputNamaSubAgen[]" name="inputNamaSubAgen[]" placeholder="Nama">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row kotakexcel_kosong">
												
												<input type="text" class="form-control" id="inputQtySubAgen[]" name="inputQtySubAgen[]" placeholder="qty">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<input type="text" class="form-control" id="inputLokasiSubAgen[]" name="inputLokasiSubAgen[]" placeholder="lokasi">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">

												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputInfoSubAgen[]" name="inputInfoSubAgen[]" placeholder="info">
												</div>
												<div class="col-sm-2">
													<button type="button" name="remove" id="{{$area_i}}" class="btn btn-danger btn_remove5">X</button>
												</div>
											</div>
										</div>
									</div>
									@endif
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
										<img src="{{asset('image/edit.png')}}" onclick="klikedit(2)" class="klikedit">
										<button type="button" khususinput2='yes' style="{{$tomboladd}}" name="addkompetitor" id="addkompetitor" class="btn btn-success">
											<i class="fas fa-plus-circle fa-3x" style="color:rgb(51 122 183);"></i>
										</button>
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
										<div class="col-md-3">
											<div class="form-group row kotakexcel">
												<label for="inputtipebadanhukum" class="col-sm-12 col-form-label">PT Kompetitor</label>
												
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel">
												<label for="inputnamausaha" class="col-sm-12 col-form-label">Jenis / Kode Product</label>
												
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel">
												<label for="inputlamausaha" class="col-sm-12 col-form-label">Nilai (Rp) / Bulan</label>
												
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel">
												<label for="inputlamausaha" class="col-sm-12 col-form-label">Brand / Product</label>
												
											</div>
										</div>
									</div>
								</div>
								<div class="card-body" id="inpkompetitor">
									<?php
									$pakan_jual_i=-1;
									foreach ($data_additional as $key => $data) {
										if   ($data->type == 'PAKAN_JUAL')
										{
											$pakan_jual_i++;
											?>
									<div class="row" id="rowskompetitor{{$pakan_jual_i}}">
										<div class="col-md-3">
											<div class="col-sm-12">	
												<input type="text" class="form-control" id="inputPakanJualC[]" name="inputPakanJualC[]" value="{{$data->value2}}" {{$stsedit}} khususinput="yes">	
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-12">	
													<input type="text" class="form-control" id="inputPakanJual[]" name="inputPakanJual[]" value="{{$data->desc}}" {{$stsedit}} khususinput="yes">	
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-12">	
													<input type="text" class="form-control" id="inputPakanJualV[]" name="inputPakanJualV[]" value="{{$data->value1}}" {{$stsedit}} khususinput="yes">	
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputPakanbranch[]" name="inputPakanbranch[]" value="{{$data->value3}}" {{$stsedit}} khususinput="yes">	
												</div>
												<div class="col-sm-2">
													<button type="button" name="removekompetitor" id="{{$pakan_jual_i}}" class="btn btn-danger btn_remove6" khususinput='yes' style="display:none;">X</button>
												</div>
											</div>
										</div>
									</div>
									<?php
											}
										}
										$pakan_jual_i++;
									?>
									@if ($idedit == "0")
									<div class="row" id="rowskompetitor{{$pakan_jual_i}}">
										<div class="col-md-3">
											<div class="col-sm-12">	
												<input type="text" class="form-control" id="inputPakanJualC[]" name="inputPakanJualC[]">	
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-12">	
													<input type="text" class="form-control" id="inputPakanJual[]" name="inputPakanJual[]">	
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-12">	
													<input type="text" class="form-control" id="inputPakanJualV[]" name="inputPakanJualV[]">	
												</div>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group row kotakexcel_kosong">
												<div class="col-sm-10">
													<input type="text" class="form-control" id="inputPakanbranch[]" name="inputPakanbranch[]">	
												</div>
												<div class="col-sm-2">
													<button type="button" name="removekompetitor" id="{{$pakan_jual_i}}" class="btn btn-danger btn_remove6" khususinput='yes'>X</button>
												</div>
											</div>
										</div>
									</div>
									@endif
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
											<img src="{{asset('image/edit.png')}}" onclick="klikedit(3)" class="klikedit">
											<button type="button" khususinput2='yes' style="{{$tomboladd}}" name="addbisnislain" id="addbisnislain" class="btn btn-success">
												<i class="fas fa-plus-circle fa-3x" style="color:rgb(51 122 183);"></i></button>
										</div>
									</div>
									<!-- /.card-header -->
									
									<div class="card-body" id="inpbisnislain">

										<?php
											$bisnis_lain_i=-1;
											foreach ($data_additional as $key => $data) {
												if   ($data->type == 'BISNIS_LAIN')
												{
													$i++;
													?>
										<div class="row" id="rowsbisnislain{{$bisnis_lain_i}}">
											<div class="col-md-6">
												<div class="form-group row">
													<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis Lain</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis" value="{{$data->desc}}" {{$stsedit}} khususinput="yes">	
													</div>
												</div>
											</div>

											<!-- /.col -->
											<div class="col-md-5">
												<div class="form-group row">
													<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Omset (Rp)</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="Nilai Omset" value="{{$data->value1}}" {{$stsedit}} khususinput="yes">	
													</div>
												</div>
											</div>

											<div class="col-md-1">
												<div class="form-group row">
													<div class="col-sm-12">
														<button type="button" name="removebisnislain" id="{{$bisnis_lain_i}}" class="btn btn-danger btn_remove7" khususinput='yes' style="display:none;">X</button>
													</div>
												</div>
											</div>
										</div>
										<?php
												}
											}
											$bisnis_lain_i++;
										?>
										@if ($idedit == "0")
										<div class="row" id="rowsbisnislain{{$bisnis_lain_i}}">
											<div class="col-md-6">
												<div class="form-group row">
													<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis Lain</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis">	
													</div>
												</div>
											</div>

											<!-- /.col -->
											<div class="col-md-5">
												<div class="form-group row">
													<label for="inputbisnislainrp" class="col-sm-3 col-form-label">Omset (Rp)</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="Nilai Omset">	
													</div>
												</div>
											</div>

											<div class="col-md-1">
												<div class="form-group row">
													<div class="col-sm-12">
														<button type="button" name="removebisnislain" id="{{$bisnis_lain_i}}" class="btn btn-danger btn_remove7" khususinput='yes'>X</button>
													</div>
												</div>
											</div>
										</div>
										@endif
									</div>
									<!-- /.row -->
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
										<img src="{{asset('image/edit.png')}}" onclick="klikedit(3)" class="klikedit">
											<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
											<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
										</div>
									</div>
									<!-- /.card-header -->

									

									<?php 
									// $txt='<option value="">-</option>';
									// foreach ($tblassetpribadi as $key => $value) {
									// 	$txt.= '<option value="'.$value->desc.'">'.$value->desc.'</option>';
									// }
									?>
									<!-- <input type="hidden" id="optassetpribadi" value="{{$txt}}"> -->
									<?php 

									?>
									
									<div class="card-body" id="inpassetpribadi">
									<?php
											$i=-1;
											foreach ($data_add_asset as $key => $data) {
												if   ($data->type == 'ASSET_PRIBADI'){
													?>
										<div class="row" id="rowsassetpribadi{{$i}}">
											<div class="col-md-2">
												<div class="form-group row">
													<div class="col-sm-12">
														<input type="text" class="form-control" id="inputasetpribadi[]" name="inputasetpribadi[]" value="{{$data->desc}}" {{$stsedit}} khususinput="yes">
													</div>
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group row">
													<label for="inputbisnislainrp" class="col-sm-2 col-form-label">{{$data->info}}</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputAssetValue[]" name="inputAssetValue[]" value="{{$data->value1}}" {{$stsedit}} khususinput="yes">	
														<input type="hidden" class="form-control" id="inputAssetSseq[]" name="inputAssetSseq[]" value="{{$data->seq}}">	
													</div>
													<label for="inputbisnislainrp" class="col-sm-2 col-form-label">{{$data->info2}}</label>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group row">
													<label for="inputasetpribadirp" class="col-sm-4 col-form-label">{{$data->info3}}</label>
													<div class="col-sm-8">
														<input type="text" class="form-control" id="inputAssetAlamat[]" name="inputAssetAlamat[]" value="{{$data->value2}}" {{$stsedit}} khususinput="yes">	
													</div>
												</div>
											</div>
											<div class="col-md-2">
												<div class="form-group row">
													<div class="col-sm-10">
														<input type="text" class="form-control" id="inputAssetLain[]" name="inputAssetLain[]" value="{{$data->value3}}" {{$stsedit}} khususinput="yes">	
													</div>
													<div class="col-sm-2">
														<!-- <button type="button" name="remove" id="{{$i}}" class="btn btn-danger btn_remove8">X</button> -->
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
													<select class="btn btn-success" id="addassetpribadi" name="addassetpribadi" khususinput2="yes" style="{{$tomboladd2}}"> 
													<option value="">Add</option>
													<?php 
													foreach ($tblassetpribadi as $key => $value) {
														?>
														<option value="{{$value->seq}}">Asset Pribadi bentuk {{$value->desc}}</option>
														<?php
													}
													?>
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
											<img src="{{asset('image/edit.png')}}" onclick="klikedit(3)" class="klikedit">
											<button type="button" khususinput2='yes' style="{{$tomboladd}}" name="addmodalbank" id="addmodalbank" class="btn btn-success">
												<i class="fas fa-plus-circle fa-3x" style="color:rgb(51 122 183);"></i></button>
										</div>
									</div>
									<!-- /.card-header -->

									

									
									
									<div class="card-body">
										<div class="row">
											<?php
											$i=-1;
											foreach ($data_add_modalsendiri as $key => $data) {
												
													?>
													<div class="col-md-12">
														<div class="form-group row">
															<label for="inputmodalsendiripersent" class="col-sm-2 col-form-label">{{$data->desc1}}</label>
															<div class="col-sm-3">
																<input type="text" class="form-control" id="inputmodal[]" name="inputmodal[]" placeholder="%" value="{{$data->desc}}" {{$stsedit}} khususinput="yes">	
																<input type="hidden" id="inputmodalid[]" name="inputmodalid[]" value="{{$data->seq}}">	
															</div>
															<label for="sendiripersent" class="col-sm-2 col-form-label">{{$data->info}}</label>
														</div>
													</div>

												<?php
												
											}
											?>
										</div>
									</div>
									
									<?php 
									
									foreach ($tbljudulbank as $key => $value) {
										$judul = $value->desc;
										$persent = $value->info;
									}

									$txt='<option value="">-</option>';
									foreach ($tblbank as $key => $value) {
										$txt.= '<option value="'.$value->desc.'">'.$value->desc.'</option>';
									}
									?>
									<input type="hidden" id="optmodalbank" value="{{$txt}}">
									<?php 

									?>
									

									<div class="card-body" id="inpmodalbank">
										<?php
											$modal_bank_i=-1;
											foreach ($data_add_modalbank as $key => $data) {
												if   ($data->type == 'MODAL_BANK')
												{
													$modal_bank_i++;
										?>	
										<div class="row" id="rowsmodalbank{{$modal_bank_i}}">
											<div class="col-md-6">
												<div class="form-group row">
													<label for="bankpersent" class="col-sm-4 col-form-label">{{$judul}}</label>
													<div class="col-sm-6">
														<input type="text" class="form-control" id="inputmodalbankpersent[]" name="inputmodalbankpersent[]" placeholder="%" value="{{$data->value1}}" {{$stsedit}} khususinput="yes">	
													</div>
													<label for="inputmodalbankpersent" class="col-sm-2 col-form-label">{{$persent}}</label>
												</div>
											</div>
											<!-- /.col -->
											<div class="col-md-5">
												<div class="form-group row">
													<div class="col-sm-10">
														<input type="hidden" class="form-control" id="inputmodalbanknamaid[]" name="inputmodalbanknamaid[]" placeholder="%" value="{{$data->value2}}" {{$stsedit}} khususinput="yes">	
														<select class="form-control" id="inputmodalbanknama[]" name="inputmodalbanknama[]" disabled>
														<?php 
														foreach ($tblbank as $key => $value) {
														?>
															<option value="{{$value->desc}}" <?php echo ($value->desc == $data->value2?'selected':'');?>>{{$value->desc}}</option>
														<?php	
														}
														?>
														</select>

													</div>
													<div class="col-sm-2">
														<!-- <button type="button" name="remove" id="{{$modal_bank_i}}" class="btn btn-danger btn_remove9">X</button> -->
													</div>
												</div>
											</div>
											

											
										</div>
										<?php
												}
											}
											$modal_bank_i++;
											?>	
											@if ($idedit == "0")
											<div class="row" id="rowsmodalbank{{$modal_bank_i}}">
											<div class="col-md-6">
												<div class="form-group row">
													<label for="bankpersent" class="col-sm-4 col-form-label">{{$judul}}</label>
													<div class="col-sm-6">
														<input type="text" class="form-control" id="inputmodalbankpersent[]" name="inputmodalbankpersent[]" placeholder="%">	
													</div>
													<label for="inputmodalbankpersent" class="col-sm-2 col-form-label">{{$persent}}</label>
												</div>
											</div>
											<!-- /.col -->
											<div class="col-md-5">
												<div class="form-group row">
													<div class="col-sm-10">
														<input type="hidden" class="form-control" id="inputmodalbanknamaid[]" name="inputmodalbanknamaid[]" placeholder="%">	
														<select class="form-control" id="inputmodalbanknama[]" name="inputmodalbanknama[]">
														<?php 
														foreach ($tblbank as $key => $value) {
														?>
															<option value="{{$value->desc}}">{{$value->desc}}</option>
														<?php	
														}
														?>
														</select>

													</div>
													<div class="col-sm-2">
														<button type="button" name="remove" id="{{$modal_bank_i}}" class="btn btn-danger btn_remove9">X</button>
													</div>
												</div>
											</div>
										</div>
										@endif
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
									<img src="{{asset('image/edit.png')}}" onclick="klikedit(4)" class="klikedit">
										<!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
										<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
									</div>
								</div>
								<!-- /.card-header -->
								
								<div class="card-body" id="inpjaminan">
									<?php
									$i=-1;
									foreach ($data_add_jaminanpribadi as $key => $data) {
										if   ($data->type == 'JAMINAN_PRIBADI')
										{
											$dis2=($data->info=="Luas"?"text":"text");
											$dis5=($data->info3==""?"hidden":"text");
											$i++;
									?>
									<div class="row" id="rowsjaminan{{$i}}">
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-12">
													<input type="text" class="form-control" id="inputJaminanPribadi[]" name="inputJaminanPribadi[]" value="{{$data->desc}}" disabled>	
													<input type="hidden" class="form-control" id="inputJaminanid[]" name="inputJaminanid[]" value="{{$data->sseq}}">	
												</div>
											</div>
										</div>

										<div class="col-md-5">
											<div class="form-group row">
												<label for="inputbisnislain" class="col-sm-3 col-form-label">{{$data->info}}</label>
												<div class="col-sm-6">
													<input type="{{$dis2}}" class="form-control" id="inputJaminanValue1[]" name="inputJaminanValue1[]" value="{{$data->value1}}" disabled>	
													<input type="hidden" id="inputJaminanValue[]" name="inputJaminanValue[]" value="{{$data->value1}}">
												</div>
												<label for="inputbisnislain" class="col-sm-3 col-form-label">{{$data->info2}}</label>
											</div>
										</div>

										<!-- /.col -->
										<div class="col-md-3">
											<div class="form-group row">
												<label for="inputbisnislainrp" class="col-sm-3 col-form-label">{{$data->info3}}</label>
												<div class="col-sm-9">
													<input type="{{$dis5}}" class="form-control" id="inputJaminanAlamat1[]" name="inputJaminanAlamat1[]" value="{{$data->value2}}" disabled>	
													<input type="hidden" class="form-control" id="inputJaminanAlamat[]" name="inputJaminanAlamat[]" value="{{$data->value2}}">	
												</div>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group row">
												<div class="col-sm-10">
													<input type="{{$dis5}}" class="form-control" id="inputJaminanLain1[]" name="inputJaminanLain1[]" value="{{$data->value3}}" disabled>	
													<input type="hidden" class="form-control" id="inputJaminanLain[]" name="inputJaminanLain[]" value="{{$data->value3}}">	
												</div>
												<div class="col-sm-2">
													<button type="button" name="removejaminan" id="{{$i}}" class="btn btn-danger btn_removea" khususinput='yes' style="display:none;">X</button>
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
								<div class="col-md-4">
									<div class="form-group row ">
										<div class="col-sm-12">

											<select class="btn btn-success" id="addjaminan" name="addjaminan" style="{{$tomboladd2}}" khususinput2="yes"> 
											<option value="">Add</option>
											<?php 
											foreach ($tbljaminanpribadi as $key => $value) {
												?>
												<option value="{{$value->seq}}">create Jaminan dalam bentuk {{$value->desc}}</option>
												<?php
											}
											?>
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
									<img src="{{asset('image/edit.png')}}" onclick="klikedit(5)" class="klikedit">
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
													<textarea class="form-control" rows="10" id="inputkarakteristik" name="inputkarakteristik" placeholder="Enter ..." {{$stsedit}} khususinput="yes">{{$inputkarakteristik}}</textarea>
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
									<h3 class="card-title font36">Track Record Customer</h3>

									<div class="card-tools">
									<img src="{{asset('image/edit.png')}}" onclick="klikedit(5)" class="klikedit">
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
													<textarea class="form-control" rows="10" id="inputtrackrecord" name="inputtrackrecord" placeholder="Enter ..." {{$stsedit}} khususinput="yes">{{$inputtrackrecord}}</textarea>
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

									File type : jpg, gif, bmp dan png max size 900kb

									<div class="card-tools">
										<img src="{{asset('image/edit.png')}}" onclick="klikedit(5)" class="klikedit">
										<button type="button" khususinput2='yes' style="{{$tomboladd}}" name="addphoto" id="addphoto">
											<i class="fas fa-plus-circle fa-3x" style="color:rgb(51 122 183);"></i></button>
									</div>
								</div>
								<!-- /.card-header -->
								
								<div class="card-body">
									
										<!-- <div class="row" id="rowsstatususaha{{$i}}"> -->
									<div class="row" id="inpphoto">
										<?php 
										$urut = 1;
										foreach ($data_photo as $key => $data) {
											$urut = $data->seq;
										?>
										<div class="col-lg-2 col-6" id="rowsphoto{{$urut}}">
											<div class="form-group row">
												<div class="col-sm-10">

													<a target="_blank" href="/storeimageadd/{{ $data->id }}">
														<img id="blah{{ $urut }}" name="gambar[]" src="/storeimageadd/{{ $data->id }}" alt="your image" style="width: 200px;height: auto;">
													</a>
													<input type="file" name="filenames{{$urut}}" id="filenames{{$urut}}" class="myfrm form-control" onchange="readURL2(this,{{$urut}})" style="display:none;">
												</div>
												<div class="col-sm-2">
													<button type="button" name="remove" id="{{$urut}}" class="btn btn-danger btn_removez" style="display:none" khususinput2="yes">X</button>
													<input type="hidden" name="idgambar[]" value="{{$urut}}">
												</div>
											</div>
										</div>
										<?php 
										}
										?>
										<input type="hidden" id="urutgambar" value="{{$urut}}">
									</div>

									
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<!-- Visit <a href="Alamat Rumahhttps://select2.github.io/">Select2 documentation</a> for more examples and information about
									the plugin. -->
								</div>

							</div>
						</div>
			</div>
			
			<?php 
			$xsave = '/detail1/'.$idx.'/'.$idy.'/'.$id.'/1';

			?>
			<input type="hidden" value="{{$xsave}}" id="xtombolsave">
			<div class="row" id="tombolsave">
			
			</div>
		</form>	

		
	</div>

	<!-- <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script> -->
	<!-- Bootstrap 4 -->
	<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<!-- DataTables -->

	<!-- <script src="{{asset('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script> -->
	<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
	<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{asset('dist/js/demo.js')}}"></script>

	<script type="text/javascript">
		// $(function(){
		// 	$(".inputbirthdate").datepicker({
		// 		format: 'dd.mm.yyyy',
		// 		autoclose: true,
		// 		todayHighlight: true,
		// 	});
		// });


		// $(".tm").on("change", function() {
		//  this.setAttribute(
		//      "data-date",
		//      moment(this.value, "dd.mm.yyyy"))
		//    //   .format( this.getAttribute("data-date-format") )
		//  )
		//  }).trigger("change")

		
	</script>

<script>
	// $(document).ready(function(){
			// $("#inputuserid").change(function(){
				function myFunction_onfocusout(){
					var inp = $('#inputuserid');
					var inputUserId = inp.val();
					var inpdefault = inp.attr("koded");
					var kode1 = inputUserId.substring(0,inpdefault.length);
					var n = kode1.localeCompare(inpdefault);
					if (n != 0){
						alert('Iniatial Userid bukan di area ini');
						document.getElementById("inputuserid").value = inpdefault;
						// document.getElementById("inputuserid").focus({preventScroll:false});
						document.getElementById("inputuserid").focus();
						return false;
								
					// // // 				document.getElementById("inputuserid").value = inpdefault;
					// // // 				document.getElementById("inputuserid").focus({preventScroll:false});
					
					} else {
					if(inputUserId) {
						$.ajax({
							url: '/getmsg6/'+inputUserId,
							type: "GET",
							dataType: "json",
							success:function(data) {
								// $("#inputcek").append(data.msg);
								if(data == 1){
									alert('Nomer Sudah ada');
									document.getElementById("inputuserid").value = inpdefault;
									// document.getElementById("inputuserid").focus({preventScroll:false});
									document.getElementById("inputuserid").focus();
									return false;
								}
								
							}
						});
					}
			}
				}
				
			// });
	// });
</script>


	<script type="text/javascript">
			var route = "{{ url('autocomplete') }}";
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
			var route = "{{ url('autocomplete') }}";
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
			var route = "{{ url('autocomplete') }}";
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

	<!-- <script type="text/javascript">
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
	</script> -->

	<script type="text/javascript">

			$(document).ready(function(){

				var i=10;  
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
												'<button type="button" name="removemedsosush" id="'+i+'" class="btn btn-danger btn_remove20">X</button>'+
											'</div>'+
										'</div>'+
									'</div>';
				$('#inpmedsosush').append(txt);
			}); 

			$(document).on('click', '.btn_remove20', function(){  
				var button_id = $(this).attr("id");   
				$('#rowmedsosush'+button_id+'').remove();  
				});  

		});  
	</script>


	<script type="text/javascript">

			$(document).ready(function(){
			
				var i=10;  
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
												'<button type="button" name="removemedsospri" id="'+i+'" class="btn btn-danger btn_remove2x">X</button>'+
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
			
				var i=10;  
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
												'<input type="date" class="form-control" id="inputkeluargatanggallahir[]" name="inputkeluargatanggallahir[]" placeholder="Tanggal">'+
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
													'<button type="button" name="removekelga" id="'+i+'" class="btn btn-danger btn_remove3">X</button>'+
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
																'<button type="button" name="removeagenhub" id="'+i+'" class="btn btn-danger btn_remove4">X</button>'+
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
			
				var i=10; 

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
														'<button type="button" name="removeareasubagen" id="'+i+'" class="btn btn-danger btn_remove5">X</button>'+
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
			
				var i=10;  

			$('#addkompetitor').click(function(){ 
				var txt = '<div class="row" id="rowskompetitor'+i+'">'+
											'<div class="col-md-3">'+
												'<div class="col-sm-12">'+
													'<input type="text" class="form-control" id="inputPakanJualC[]" name="inputPakanJualC[]">'+
												'</div>'+
											'</div>'+
											'<div class="col-md-3">'+
												'<div class="form-group row kotakexcel_kosong">'+
													'<div class="col-sm-12">'+
														'<input type="text" class="form-control" id="inputPakanJual[]" name="inputPakanJual[]">'+	
													'</div>'+
												'</div>'+
											'</div>'+
											'<div class="col-md-3">'+
												'<div class="form-group row kotakexcel_kosong">'+
													'<div class="col-sm-12">'+
														'<input type="text" class="form-control" id="inputPakanJualV[]" name="inputPakanJualV[]">'+	
													'</div>'+
												'</div>'+
											'</div>'+
											'<div class="col-md-3">'+
												'<div class="form-group row kotakexcel_kosong">'+
													'<div class="col-sm-10">'+
														'<input type="text" class="form-control" id="inputPakanbranch[]" ="inputPakanbranch[]">'+
													'</div>'+
													'<div class="col-sm-2">'+
														'<button type="button" name="removekompetitor" id="'+i+'" class="btn btn-danger btn_remove6">X</button>'+
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
			
				var i=10;  

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
							'				<button type="button" name="removebisnislain" id="'+i+'" class="btn btn-danger btn_remove7">X</button>'+
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


		
	</script>



	<script type="text/javascript">

			$(document).ready(function(){
			
			
				var i=10;  

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
								'				<select class="form-control" id="inputmodalbanknamaid[]" name="inputmodalbanknamaid[]"> '+isioptions+
								'				</select>'+
								'			</div>'+
								'			<div class="col-sm-2">'+
								'				<button type="button" name="removemodalbank" id="'+i+'" class="btn btn-danger btn_remove9">X</button>'+
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
			$('#addphoto').click(function(){ 
				
				var i = document.getElementById("urutgambar").value;
				i++;
				document.getElementById("urutgambar").value = i;
				var txt = ''+
					'<div class="col-lg-2 col-6" id="rowsphoto'+i+'">'+
						'<div class="form-group row">'+
							'<div class="col-sm-10">'+
								'<img id="blah'+i+'" name="gambar[]" src="#" alt="your image" style="width:200px;height: auto;">'+
								'<input type="file" name="filenames'+i+'" id="filenames'+i+'" class="myfrm form-control" onchange="readURL2(this,'+i+')" style="display:none;">'+
							'</div>'+
						// '</div>'+
						// '<div class="form-group row">'+
							'<div class="col-sm-2">'+
								'<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removez">X</button>'+
								'<input type="hidden" name="idgambar[]" value="'+i+'">'+
							'</div>'+
						'</div>'+
					'</div>';
				$('#inpphoto').append(txt);
				$('#filenames'+i).click();
			});


			$(document).on('click', '.btn_removez', function(){  
				var button_id = $(this).attr("id");   
				$('#rowsphoto'+button_id+'').remove();  
				});  
		});  
	</script>






	


	<script type="text/javascript">

			$(document).ready(function(){
				var i=10;  
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
								'				<button type="button" name="removestatususaha" id="'+i+'" class="btn btn-danger btn_removeb">X</button>'+
								'			</div>'+
								'		</div>'+
								'	</div>'+
								'</div>'
				$('#inpstatususaha').append(txt);
			});


			$(document).on('click', '.btn_removeb', function(){  
				var button_id = $(this).attr("id");   
				$('#rowsstatususaha'+button_id).remove();  
				});  
		});  
	</script>


							


	<script type="text/javascript">
		function readURL(input) {
			// alert('supram');
			if (input.files && input.files[0]) {
				
					var reader = new FileReader();
					
					reader.onload = function (e) {
							$('#files-tag').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
			}
		}
		// $("#files").change(function(){
		// 		readURL(this);
		// });
	</script>

<script type="text/javascript">
		function readURL2(input, pos) {
			var nmfile=document.getElementById("filenames"+pos).value;
			var n = nmfile.search(".jpg") + nmfile.search(".JPG") + 
				nmfile.search(".gif") + nmfile.search(".GIF") + 
				nmfile.search(".png") + nmfile.search(".PNG") +
				nmfile.search(".bmp") + nmfile.search(".BMP");
			if (n == -8){
				alert('Please upload file type jpg, gif, bmp dan png max size 900kb.');
				$('#rowsphoto'+pos).remove();  
    		return false;
			} else {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#blah'+pos).attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
			}
		}
		
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

			document.getElementById("inputkecush1").value = document.getElementById("inputkecktp1").value;
			document.getElementById("inputkotaush1").value      = document.getElementById("inputkotaktp1").value;
			document.getElementById("inputpropush1").value  = document.getElementById("inputpropktp1").value;
			document.getElementById("inputkdposush1").value   = document.getElementById("inputkdposktp1").value;
		}

		function myduplikatalamat() 
		{
			document.getElementById("inputalmtrmh").value    = document.getElementById("inputalmtktp").value;
			document.getElementById("inputkelrmh").value = document.getElementById("inputkelktp").value;
			document.getElementById("inputkecrmh").value = document.getElementById("inputkecktp").value;
			document.getElementById("inputkotarmh").value      = document.getElementById("inputkotaktp").value;
			document.getElementById("inputproprmh").value  = document.getElementById("inputpropktp").value;
			document.getElementById("inputkdposrmh").value   = document.getElementById("inputkdposktp").value;

			document.getElementById("inputkecrmh1").value = document.getElementById("inputkecktp1").value;
			document.getElementById("inputkotarmh1").value      = document.getElementById("inputkotaktp1").value;
			document.getElementById("inputproprmh1").value  = document.getElementById("inputpropktp1").value;
			document.getElementById("inputkdposrmh1").value   = document.getElementById("inputkdposktp1").value;
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
					
					$('#inputkecktp1').show();
					$('#inputkecktp').hide();

					$('#inputkecktp1').show();
					$('#inputkecktp').hide();

					$('#inputkotaktp1').show();
					$('#inputkotaktp').hide();

					$('#inputpropktp1').show();
					$('#inputpropktp').hide();

					$('#inputkdposktp1').show();
					$('#inputkdposktp').hide();

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
					
					$('#inputkecrmh1').show();
					$('#inputkecrmh').hide();

					$('#inputkecrmh1').show();
					$('#inputkecrmh').hide();

					$('#inputkotarmh1').show();
					$('#inputkotarmh').hide();

					$('#inputproprmh1').show();
					$('#inputproprmh').hide();

					$('#inputkdposrmh1').show();
					$('#inputkdposrmh').hide();

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
					
					$('#inputkecush1').show();
					$('#inputkecush').hide();

					$('#inputkecush1').show();
					$('#inputkecush').hide();

					$('#inputkotaush1').show();
					$('#inputkotaush').hide();

					$('#inputpropush1').show();
					$('#inputpropush').hide();

					$('#inputkdposush1').show();
					$('#inputkdposush').hide();

				}
			} else {
				if (kode == 1){
					
					$('#inputkecktp1').hide();
					$('#inputkecktp').show();

					$('#inputkecktp1').hide();
					$('#inputkecktp').show();

					$('#inputkotaktp1').hide();
					$('#inputkotaktp').show();

					$('#inputpropktp1').hide();
					$('#inputpropktp').show();

					$('#inputkdposktp1').hide();
					$('#inputkdposktp').show();
					document.getElementById("inputkecktp").focus();
				} else if (kode == 2){
					
					$('#inputkecrmh1').hide();
					$('#inputkecrmh').show();

					$('#inputkecrmh1').hide();
					$('#inputkecrmh').show();

					$('#inputkotarmh1').hide();
					$('#inputkotarmh').show();

					$('#inputproprmh1').hide();
					$('#inputproprmh').show();

					$('#inputkdposrmh1').hide();
					$('#inputkdposrmh').show();
					document.getElementById("inputkecrmh").focus();
					
				} else {
					
					$('#inputkecush1').hide();
					$('#inputkecush').show();

					$('#inputkecush1').hide();
					$('#inputkecush').show();

					$('#inputkotaush1').hide();
					$('#inputkotaush').show();

					$('#inputpropush1').hide();
					$('#inputpropush').show();

					$('#inputkdposush1').hide();
					$('#inputkdposush').show();
					document.getElementById("inputkecush").focus();
				}
			}
		}
	</script>

<script type="text/javascript">
	function klikedit(id) {
		
		var isioptions=document.getElementById("xtombolsave").value;
		$xsave = '<div class="col-md-4">'+
				'</div>'+
				'<div class="col-md-2">'+
					'<div class="form-group row">'+
						'<div class="col-sm-12">'+
							'<input type="submit" onclick="cekallinputan();" class="btn btn-block btn-primary btn-lg" style="background: rgba(15,199,89,1);" id="save" value="Save">'+
						'</div>'+
					'</div>'+
				'</div>'+
				'<div class="col-md-2">'+
					'<div class="form-group row">'+
						'<div class="col-sm-12">'+
							'<a href="'+isioptions+'" class="btn btn-block btn-danger btn-lg">Cancel</a>'+
						'</div>'+
					'</div>'+
				'</div>'+
				'<div class="col-md-4">'+
				'</div>';

		$(".klikedit").hide();
		$("this :input").prop("disabled", false);
		$("#tombolsave").append($xsave);

		var  arr =$("div").find(`[khususinput3='yes']`);
		for(i=0;i<arr.length;i++){
				arr[i].style.display="block"
		}
		
		var  arr =$("div").find(`[khususinput='yes']`);
		for(i=0;i<arr.length;i++){
			if(arr[i].type == 'button'){
				arr[i].style.display="block"
			} else {
				$(arr[i]).prop("disabled",false);
			}
			
		}

		var  arr =$("div").find(`[khususinput2='yes']`);
		for(i=0;i<arr.length;i++){
				arr[i].style.display="block"
		}

		$("#addkelga").click();
		$("#addmedsospri").click();
		$("#addstatususaha").click();
		$("#addmedsosush").click();
		$("#addagenhub").click();
		$("#addareasubagen").click();
		$("#addkompetitor").click();
		$("#addbisnislain").click();
		$("#addmodalbank").click();
		
		

		
	}
	</script>
	<script type="text/javascript">
		@if ($idedit == "0")
			
			$(".klikedit").hide();
			var isioptions=document.getElementById("bck").value;
			$xsave = '<div class="col-md-4">'+
					'</div>'+
					'<div class="col-md-2">'+
						'<div class="form-group row">'+
							'<div class="col-sm-12">'+
								'<input type="submit" class="btn btn-block btn-primary btn-lg" style="background: rgba(15,199,89,1);" id="save" value="Save">'+
							'</div>'+
						'</div>'+
					'</div>'+
					'<div class="col-md-2">'+
						'<div class="form-group row">'+
							'<div class="col-sm-12">'+
								'<a href="/'+isioptions+'" class="btn btn-block btn-danger btn-lg">Cancel</a>'+
							'</div>'+
						'</div>'+
					'</div>'+
					'<div class="col-md-4">'+
					'</div>';
			$("#tombolsave").append($xsave);
		@endif
	</script>

	<script type="text/javascript">
		// @if ($idedit == "0")
		// 	$("#addkelga").click();
		// @endif
	</script>


	<script type="text/javascript">
		function ambilphoto(){
			$('#files').click();
		}

		function ambilphoto2(){
			var i = document.getElementById("urutgambar").value;
			$('#files'+i).click();
		}
		
		
		function myFunction(id) {
			document.getElementById("pos_page").value = id;
			for (let i = 1; i < 6; i++) {
				if(i==id){
					$('#pil'+i).css('border', 'none');
					$('#pil'+i).css('background-color', 'rgba(207,161,62,1)');
					$('#pil'+i).css('color', 'white');
				} else {
					$('#pil'+i).css('border', 'none');
					$('#pil'+i).css('background-color', 'white');
					$('#pil'+i).css('color', 'black');
				}
			}
			
			$('#custom-content-below-settings-tab-'+id).click();
			// if (id == 1){
			// 	$("#custom-content-below-settings-tab-1").click();
			// } else if (id == 2){
			// 	$("#custom-content-below-settings-tab-2").click();
			// } else if (id == 3){
			// 	$("#custom-content-below-settings-tab-3").click();
			// } else if (id == 4){
			// 	$("#custom-content-below-settings-tab-4").click();
			// } else if (id == 5){
			// 	$("#custom-content-below-settings-tab-5").click();
			// } 
	
		}
	</script>

	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

		function cekallinputan(){
			// alert('supram');
			// return false;
		}
	</script>
	@else
		<?php
			// header('Location: http://01659440.dyn.cbn.net.id:8815/login');

			die();
		?>
	@endif	
</body>
</html>