<?php 
$putih = "white";
$hitam = "rgba(84,84,84,1)";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Customer</title>
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap"> -->
	<link rel="stylesheet" href="{{asset('css/roboto.css')}}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
	<link rel="stylesheet" href="{{asset('ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
  @include('include.incsetting1')
  
  <style id="applicationStylesheet" type="text/css">
	.dropdown-menu-lg {
    /* max-width: 300px; */
    /* min-width: 280px; */
    /* padding: 0; */
}
	.imglogin {
		border-radius: 50%;
	}
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
   #fon_24_wh{
      color: white;
      font-size:24px;
   }
	 #fon_28_wh{
      color: white;
      font-size:28px;
   }
   .awal{
      top:25px;
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
    
   
  </style>
</head>
<body class="hold-transition sidebar-mini">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light atas"
	style="margin-left: 0px;">
   <!-- Left navbar links -->
   <!-- <div class="atas"> -->
      <ul class="navbar-nav">
      
         <li class="nav-item d-none d-sm-inline-block" >
            <a href="/home" class="nav-link" id="fon_28_wh">Dashboard/</a>
         </li>
         <li class="nav-item d-none d-sm-inline-block" >
            <a href="#" class="nav-link" id="fon_28_wh">Setting</a>
         </li>
         
         
			</ul>
			@include('layouts.logo')
   
</nav>

<!-- /.navbar -->

  <!-- Main Sidebar Container -->
<div class="wrapper awal" style="position: relative;">

		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content bg-default">
					<!-- <div class="modal-header">
						<h4 class="modal-title">default Modal</h4>
					</div> -->
					<div class="modal-body">
						<form method="post" action="/export_excel" enctype="multipart/form-data">
            {{ csrf_field() }}
						<div class="col-md-12">
							<div class="form-group row">
								<label for="inputalmtktp" class="col-sm-3 col-form-label">Bussines Unit</label>
								<div class="col-sm-9">
									<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputbu" name="inputbu" > 
										<option value="">-- Select --</option>
										<?php 
										foreach ($databu as $key => $value) {
										?>
											<option value="{{$value->objname}}">{{$value->desc}}</option>
										<?php
										}
										?>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="inputalmtktp" class="col-sm-3 col-form-label">Company</label>
								<div class="col-sm-9">
									<select class="form-control btn btn-default btn-default btn-sm styledatakeluarga" id="inputcompany" name="inputcompany" > 
											<option value="">-- Select --</option>
									</select>
								</div>
							</div>

						</div>

					</div>
					<div class="modal-footer justify-content-between"  id="showexcel" style="display:none;background:rgba(0,167,110,1);" >
						<!-- <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button> -->
						<!-- <span type="submit" id="showinfo" style="width:100%;background:rgba(0,167,110,1);color:white;text-align: center;font-size:28px" onclick="prsexcel()" >Download Data to Excel</span> -->
						<button type="submit" id="showinfo" style="width:100%;background:rgba(0,167,110,1);color:white;text-align: center;font-size:26px" class="btn btn-primary">Import</button>
					</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper" style="/* min-height: 320.012px; */background: white;">
      <!-- Main content -->
      <section class="content">
			<div class="row">
            <div id="Group_399_bk" style="
					padding-top: 20px;
					font-size: 36px;
					color: rgba(88,88,88,1);
					height: 100px;">
              <div id="Welcome_Aditya_Yudha_bl">
                <span>Welcome,</span>
                <span style="font-style:normal;font-weight:normal;color:rgba(56,154,198,1);">{{$user->fullname}}!</span>
              </div>
            </div>
          </div>
        </div>
         <div class="row">
				<a href="/upload1" id="Group_731_cg"
					style="top:110px; left:0px">
					<svg class="Rectangle_515_cg">
						<rect id="Rectangle_515_cg" rx="0" ry="0" x="0" y="0" width="613" height="97">
						</rect>
					</svg>
					<svg class="Rectangle_516_cg">
						<rect id="Rectangle_516_cg" rx="0" ry="0" x="0" y="0" width="136" height="97">
						</rect>
					</svg>
					<div id="Upload_Data_from_Excel_cg">
						<span>Upload Data from Excel</span>
					</div>
					<div id="upload_from_excel" class="upload_from_excel">
						<svg class="Path_197_cg" viewBox="85.25 0 32.188 48.258">
							<path id="Path_197_cg" d="M 117.4377136230469 0 L 91.73336029052734 0 L 85.25000762939453 6.483443260192871 L 85.25000762939453 41.58528900146484 L 97.10243988037109 41.58528900146484 L 97.10243988037109 48.25799560546875 L 105.5852890014648 48.25799560546875 L 105.5852890014648 41.58528900146484 L 117.4377136230469 41.58528900146484 L 117.4377136230469 0 Z M 92.67099761962891 3.061272382736206 L 92.67099761962891 7.420986652374268 L 88.31128692626953 7.420986652374268 L 92.67099761962891 3.061272382736206 Z M 102.7576751708984 45.43038177490234 L 99.9300537109375 45.43038177490234 L 99.9300537109375 31.53226470947266 L 96.46990203857422 31.53226470947266 L 101.3438568115234 24.59564971923828 L 106.2179260253906 31.53236198425293 L 102.7576751708984 31.53236198425293 L 102.7576751708984 45.43038177490234 Z M 114.6100997924805 38.75767517089844 L 105.5852890014648 38.75767517089844 L 105.5852890014648 34.35997772216797 L 110.3104248046875 34.35997772216797 L 110.3104248046875 32.43842315673828 L 102.1680145263672 20.85019111633301 L 100.5197067260742 20.85019111633301 L 92.37729644775391 32.43842315673828 L 92.37729644775391 34.35988235473633 L 97.10243988037109 34.35988235473633 L 97.10243988037109 38.75758361816406 L 88.07762908935547 38.75758361816406 L 88.07762908935547 10.2486047744751 L 95.49861145019531 10.2486047744751 L 95.49861145019531 2.827617406845093 L 114.6100997924805 2.827617406845093 L 114.6100997924805 38.75767517089844 Z">
						</path>
					</svg>
				</a>
			</div>

<!-- <a href="/download" id="Group_732_cg" style=" -->
   <div onclick="downloadmodal()" id="Group_732_cg" style="
    top: 237px;
    left: 0px;
">
		<svg class="Rectangle_517_cg">
			<rect id="Rectangle_517_cg" rx="0" ry="0" x="0" y="0" width="613" height="97">
			</rect>
		</svg>
		<svg class="Rectangle_518_cha">
			<rect id="Rectangle_518_cha" rx="0" ry="0" x="0" y="0" width="136" height="97">
			</rect>
		</svg>
		<div id="Download_Data_to_Excel_chb">
			<span>Download Data to Excel</span>
		</div>
		<div id="download_to_excel" class="download_to_excel">
			<div id="Group_736_chd">
				<div id="Group_735_che">
					<svg class="Path_199_chf" viewBox="0 16.01 32.5 54.164">
						<path id="Path_199_chf" d="M 31.84629440307617 16.4228572845459 C 31.43462944030762 16.08341407775879 30.88935089111328 15.94258117675781 30.36213111877441 16.04008102416992 L 1.473328948020935 21.45673179626465 C 0.6174981594085693 21.61561965942383 0 22.35950660705566 0 23.22978210449219 L 0 62.95188522338867 C 0 63.81854629516602 0.6174981594085693 64.56604766845703 1.473328948020935 64.72493743896484 L 30.36213111877441 70.14159393310547 C 30.47046279907227 70.16325378417969 30.58602142333984 70.17409515380859 30.6943531036377 70.17409515380859 C 31.1096305847168 70.17409515380859 31.52129554748535 70.02964782714844 31.84629440307617 69.75881195068359 C 32.26156997680664 69.41575622558594 32.49990463256836 68.90298461914063 32.49990463256836 68.36854553222656 L 32.49990463256836 17.81313133239746 C 32.49990463256836 17.27507781982422 32.26156997680664 16.76591300964355 31.84629440307617 16.4228572845459 Z M 28.88880348205566 66.19104766845703 L 3.611100435256958 61.45327377319336 L 3.611100435256958 24.72838973999023 L 28.88880348205566 19.99062538146973 L 28.88880348205566 66.19104766845703 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_738_chg">
				<div id="Group_737_chh">
					<svg class="Path_200_chi" viewBox="256 79.99 28.889 39.722">
						<path id="Path_200_chi" d="M 283.083251953125 79.99000549316406 L 257.8055419921875 79.99000549316406 C 256.8088989257813 79.99000549316406 256 80.79888916015625 256 81.79555511474609 C 256 82.79221343994141 256.8088989257813 83.60110473632813 257.8055419921875 83.60110473632813 L 281.2777099609375 83.60110473632813 L 281.2777099609375 116.1009979248047 L 257.8055419921875 116.1009979248047 C 256.8088989257813 116.1009979248047 256 116.9098815917969 256 117.9065551757813 C 256 118.9032135009766 256.8088989257813 119.7121124267578 257.8055419921875 119.7121124267578 L 283.083251953125 119.7121124267578 C 284.0799255371094 119.7121124267578 284.8887939453125 118.9032135009766 284.8887939453125 117.9065551757813 L 284.8887939453125 81.79555511474609 C 284.8887939453125 80.79888916015625 284.0799255371094 79.99000549316406 283.083251953125 79.99000549316406 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_740_chj">
				<div id="Group_739_chk">
					<svg class="Path_201_chl" viewBox="256 143.99 10.833 3.611">
						<path id="Path_201_chl" d="M 265.0277404785156 143.989990234375 L 257.8055419921875 143.989990234375 C 256.8088989257813 143.989990234375 256 144.7988739013672 256 145.7955474853516 C 256 146.7922210693359 256.8088989257813 147.6010894775391 257.8055419921875 147.6010894775391 L 265.0277404785156 147.6010894775391 C 266.0244140625 147.6010894775391 266.8333129882813 146.7922210693359 266.8333129882813 145.7955474853516 C 266.8333129882813 144.7988739013672 266.0244140625 143.989990234375 265.0277404785156 143.989990234375 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_742_chm">
				<div id="Group_741_chn">
					<svg class="Path_202_cho" viewBox="256 207.99 10.833 3.611">
						<path id="Path_202_cho" d="M 265.0277404785156 207.989990234375 L 257.8055419921875 207.989990234375 C 256.8088989257813 207.989990234375 256 208.7988891601563 256 209.7955322265625 C 256 210.792236328125 256.8088989257813 211.6011047363281 257.8055419921875 211.6011047363281 L 265.0277404785156 211.6011047363281 C 266.0244140625 211.6011047363281 266.8333129882813 210.792236328125 266.8333129882813 209.7955322265625 C 266.8333129882813 208.7988891601563 266.0244140625 207.989990234375 265.0277404785156 207.989990234375 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_744_chp">
				<div id="Group_743_chq">
					<svg class="Path_203_chr" viewBox="256 271.99 10.833 3.611">
						<path id="Path_203_chr" d="M 265.0277404785156 271.9900207519531 L 257.8055419921875 271.9900207519531 C 256.8088989257813 271.9900207519531 256 272.7988891601563 256 273.7955627441406 C 256 274.7922058105469 256.8088989257813 275.6011047363281 257.8055419921875 275.6011047363281 L 265.0277404785156 275.6011047363281 C 266.0244140625 275.6011047363281 266.8333129882813 274.7922058105469 266.8333129882813 273.7955627441406 C 266.8333129882813 272.7988891601563 266.0244140625 271.9900207519531 265.0277404785156 271.9900207519531 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_746_chs">
				<div id="Group_745_cht">
					<svg class="Path_204_chu" viewBox="256 335.99 10.833 3.611">
						<path id="Path_204_chu" d="M 265.0277404785156 335.989990234375 L 257.8055419921875 335.989990234375 C 256.8088989257813 335.989990234375 256 336.7988891601563 256 337.7955322265625 C 256 338.7922058105469 256.8088989257813 339.6011047363281 257.8055419921875 339.6011047363281 L 265.0277404785156 339.6011047363281 C 266.0244140625 339.6011047363281 266.8333129882813 338.7922058105469 266.8333129882813 337.7955322265625 C 266.8333129882813 336.7988891601563 266.0244140625 335.989990234375 265.0277404785156 335.989990234375 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_748_chv">
				<div id="Group_747_chw">
					<svg class="Path_205_chx" viewBox="384 143.99 7.222 3.611">
						<path id="Path_205_chx" d="M 389.4166870117188 143.989990234375 L 385.8055419921875 143.989990234375 C 384.8088989257813 143.989990234375 384 144.7988739013672 384 145.7955474853516 C 384 146.7922210693359 384.8088989257813 147.6010894775391 385.8055419921875 147.6010894775391 L 389.4166870117188 147.6010894775391 C 390.413330078125 147.6010894775391 391.2222290039063 146.7922210693359 391.2222290039063 145.7955474853516 C 391.2222290039063 144.7988739013672 390.413330078125 143.989990234375 389.4166870117188 143.989990234375 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_750_chy">
				<div id="Group_749_chz">
					<svg class="Path_206_ch" viewBox="384 207.99 7.222 3.611">
						<path id="Path_206_ch" d="M 389.4166870117188 207.989990234375 L 385.8055419921875 207.989990234375 C 384.8088989257813 207.989990234375 384 208.7988891601563 384 209.7955322265625 C 384 210.792236328125 384.8088989257813 211.6011047363281 385.8055419921875 211.6011047363281 L 389.4166870117188 211.6011047363281 C 390.413330078125 211.6011047363281 391.2222290039063 210.792236328125 391.2222290039063 209.7955322265625 C 391.2222290039063 208.7988891601563 390.413330078125 207.989990234375 389.4166870117188 207.989990234375 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_752_ch">
				<div id="Group_751_ch">
					<svg class="Path_207_ch" viewBox="384 271.99 7.222 3.611">
						<path id="Path_207_ch" d="M 389.4166870117188 271.9900207519531 L 385.8055419921875 271.9900207519531 C 384.8088989257813 271.9900207519531 384 272.7988891601563 384 273.7955627441406 C 384 274.7922058105469 384.8088989257813 275.6011047363281 385.8055419921875 275.6011047363281 L 389.4166870117188 275.6011047363281 C 390.413330078125 275.6011047363281 391.2222290039063 274.7922058105469 391.2222290039063 273.7955627441406 C 391.2222290039063 272.7988891601563 390.413330078125 271.9900207519531 389.4166870117188 271.9900207519531 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_754_ch">
				<div id="Group_753_ch">
					<svg class="Path_208_ch" viewBox="384 335.99 7.222 3.611">
						<path id="Path_208_ch" d="M 389.4166870117188 335.989990234375 L 385.8055419921875 335.989990234375 C 384.8088989257813 335.989990234375 384 336.7988891601563 384 337.7955322265625 C 384 338.7922058105469 384.8088989257813 339.6011047363281 385.8055419921875 339.6011047363281 L 389.4166870117188 339.6011047363281 C 390.413330078125 339.6011047363281 391.2222290039063 338.7922058105469 391.2222290039063 337.7955322265625 C 391.2222290039063 336.7988891601563 390.413330078125 335.989990234375 389.4166870117188 335.989990234375 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_756_ch">
				<div id="Group_755_ch">
					<svg class="Path_209_ch" viewBox="80.004 175.984 16.253 18.056">
						<path id="Path_209_ch" d="M 95.80976104736328 191.0462341308594 L 83.17090606689453 176.6018218994141 C 82.50646209716797 175.8471069335938 81.36897277832031 175.7748870849609 80.62147521972656 176.4320983886719 C 79.87036895751953 177.0893402099609 79.79452514648438 178.2304229736328 80.45175170898438 178.9779205322266 L 93.09059906005859 193.4223327636719 C 93.44809722900391 193.8303985595703 93.94643402099609 194.0398254394531 94.44837188720703 194.0398254394531 C 94.87088012695313 194.0398254394531 95.29337310791016 193.8917694091797 95.64003753662109 193.5920562744141 C 96.39114379882813 192.9348449707031 96.46697998046875 191.7973327636719 95.80976104736328 191.0462341308594 Z">
						</path>
					</svg>
				</div>
			</div>
			<div id="Group_758_cia">
				<div id="Group_757_cib">
					<svg class="Path_210_cic" viewBox="79.999 159.992 16.249 19.861">
						<path id="Path_210_cic" d="M 95.55255126953125 160.3745269775391 C 94.76533508300781 159.7570190429688 93.63143920898438 159.9050750732422 93.01756286621094 160.6886901855469 L 80.37870025634766 176.9386444091797 C 79.7684326171875 177.7258605957031 79.90926361083984 178.8633575439453 80.69647979736328 179.4736480712891 C 81.02869415283203 179.7300262451172 81.418701171875 179.8527984619141 81.80509185791016 179.8527984619141 C 82.33953094482422 179.8527984619141 82.87397766113281 179.6144714355469 83.22786712646484 179.1594696044922 L 95.86671447753906 162.9095153808594 C 96.48060607910156 162.1186981201172 96.33976745605469 160.9848022460938 95.55255126953125 160.3745269775391 Z">
						</path>
					</svg>
				</div>
			</div>
		</div>
	</div>
	<!-- </a> -->

   <div onclick="application.goToTargetView(event)" id="Group_734_cid" style="top:110px;">
		<svg class="Rectangle_519_cie">
			<rect id="Rectangle_519_cie" rx="0" ry="0" x="0" y="0" width="613" height="97">
			</rect>
		</svg>
		<svg class="Rectangle_520_cif">
			<rect id="Rectangle_520_cif" rx="0" ry="0" x="0" y="0" width="136" height="97">
			</rect>
		</svg>
		<div id="Sync_Data_cig">
			<span>Sync Data</span>
		</div>
		<div id="sync_cih" class="sync">
			<div id="Group_760_cii">
				<div id="Group_759_cij">
					<svg class="Path_211_cik" viewBox="64 143.68 34.437 43.807">
						<path id="Path_211_cik" d="M 86.95819091796875 173.1382141113281 C 77.44490814208984 173.1382141113281 69.73957824707031 165.4328765869141 69.73957824707031 155.9196166992188 C 69.73957824707031 153.0068359375 70.47137451171875 150.280517578125 71.73412322998047 147.8699035644531 L 67.54421997070313 143.6799926757813 C 65.32005310058594 147.2384796142578 64 151.4139862060547 64 155.9196166992188 C 64 168.6039276123047 74.27373504638672 178.8778076171875 86.95819091796875 178.8778076171875 L 86.95819091796875 187.4870910644531 L 98.43722534179688 176.0079498291016 L 86.95819091796875 164.5289001464844 L 86.95819091796875 173.1382141113281 Z">
						</path>
					</svg>
					<svg class="Path_212_cil" viewBox="149.334 0 34.437 43.807">
						<path id="Path_212_cil" d="M 160.8130493164063 8.60930347442627 L 160.8130493164063 0 L 149.3340148925781 11.47902774810791 L 160.8130493164063 22.95805549621582 L 160.8130493164063 14.34875011444092 C 170.3263244628906 14.34875011444092 178.0316467285156 22.0540771484375 178.0316467285156 31.56735801696777 C 178.0316467285156 34.48012924194336 177.2998657226563 37.20645141601563 176.037109375 39.61705780029297 L 180.2270202636719 43.80696105957031 C 182.4510498046875 40.24849319458008 183.771240234375 36.07298278808594 183.771240234375 31.56735992431641 C 183.7710876464844 18.88302803039551 173.4973754882813 8.60930347442627 160.8130493164063 8.60930347442627 Z">
						</path>
					</svg>
				</div>
			</div>
		</div>
	</div>

   <a href="/info1" id="Group_733_cim" style="
    top: 237px;
    
">
		<svg class="Rectangle_521_cin">
			<rect id="Rectangle_521_cin" rx="0" ry="0" x="0" y="0" width="613" height="97">
			</rect>
		</svg>
		<svg class="Rectangle_522_cio">
			<rect id="Rectangle_522_cio" rx="0" ry="0" x="0" y="0" width="136" height="97">
			</rect>
		</svg>
		<div id="Login_Information_cip">
			<span>Login Information</span>
		</div>
		<div id="login_info" class="login_info">
			<div id="Group_761_cir">
				<svg class="Path_213_cis" viewBox="0 0.011 52.725 52.723">
					<path id="Path_213_cis" d="M 45.40983200073242 8.123052597045898 C 40.43351364135742 2.928791761398315 33.54816436767578 -0.002596800215542316 26.35475540161133 0.01063841488212347 C 11.81770515441895 -0.007670378778129816 0.0181411150842905 11.76211261749268 -0.0001683411246631294 26.29927253723145 C -0.009212774224579334 33.48738861083984 2.921845197677612 40.3664436340332 8.112246513366699 45.33923721313477 C 8.12735652923584 45.35423278808594 8.13298225402832 45.37684631347656 8.147982597351074 45.39007949829102 C 8.300414085388184 45.53688812255859 8.466081619262695 45.66119766235352 8.620498657226563 45.8023796081543 C 9.044042587280273 46.1788215637207 9.467588424682617 46.56850433349609 9.913743019104004 46.93182754516602 C 10.15275859832764 47.1201057434082 10.40126037597656 47.30827331542969 10.64601039886475 47.4814453125 C 11.06767845153809 47.79579162597656 11.48934936523438 48.11014175415039 11.92976856231689 48.40010833740234 C 12.22911548614502 48.5883903503418 12.537841796875 48.77656173706055 12.84457969665527 48.96484375 C 13.25113677978516 49.20959091186523 13.65593242645264 49.45610809326172 14.07572460174561 49.68012237548828 C 14.43154716491699 49.8683967590332 14.79475784301758 50.03020858764648 15.1562032699585 50.20149230957031 C 15.55150985717773 50.38977432250977 15.94119358062744 50.57794570922852 16.34587669372559 50.74736404418945 C 16.75056076049805 50.91678237915039 17.15722846984863 51.04858779907227 17.56753730773926 51.19538879394531 C 17.97784614562988 51.34220123291016 18.33179092407227 51.47775650024414 18.72522354125977 51.59820556640625 C 19.16950607299805 51.73188781738281 19.62503623962402 51.83534240722656 20.07681655883789 51.94641494750977 C 20.45326042175293 52.03862380981445 20.81845855712891 52.14406585693359 21.20626831054688 52.21940231323242 C 21.72577095031738 52.32297134399414 22.25288200378418 52.38882064819336 22.77999877929688 52.46039962768555 C 23.10570907592773 52.5056266784668 23.42380905151367 52.56959915161133 23.7531566619873 52.60158157348633 C 24.6153564453125 52.68629455566406 25.48494529724121 52.73339462280273 26.36214637756348 52.73339462280273 C 27.23934555053711 52.73339462280273 28.10904312133789 52.68629455566406 28.97113227844238 52.60158157348633 C 29.30059432983398 52.56959915161133 29.61869049072266 52.5056266784668 29.94429016113281 52.46039962768555 C 30.47140312194824 52.38882064819336 30.99841117858887 52.32297134399414 31.51802253723145 52.21940231323242 C 31.89447021484375 52.14406585693359 32.27102279663086 52.03112411499023 32.64746856689453 51.94641494750977 C 33.09925079345703 51.83534622192383 33.55478286743164 51.73177337646484 33.99906158447266 51.59820556640625 C 34.39249038696289 51.47775650024414 34.77268981933594 51.33095550537109 35.1567497253418 51.19538879394531 C 35.54080581665039 51.05983734130859 35.97747421264648 50.91303253173828 36.37840270996094 50.74736404418945 C 36.77933883666992 50.58169174194336 37.17277145385742 50.38779067993164 37.56808471679688 50.20149230957031 C 37.92953109741211 50.03020477294922 38.29285049438477 49.8682861328125 38.64856338500977 49.68012237548828 C 39.06835174560547 49.45610427856445 39.4730339050293 49.20948028564453 39.87969970703125 48.96484375 C 40.18655395507813 48.77656173706055 40.49527740478516 48.60526657104492 40.79451751708984 48.40010833740234 C 41.23504638671875 48.11024856567383 41.65671539306641 47.79590606689453 42.07827758789063 47.4814453125 C 42.32302856445313 47.29316329956055 42.57141876220703 47.12374114990234 42.810546875 46.93182754516602 C 43.2567024230957 46.57412719726563 43.68024826049805 46.19393539428711 44.10379028320313 45.8023796081543 C 44.25809860229492 45.66119766235352 44.42376327514648 45.53700256347656 44.57630157470703 45.39007949829102 C 44.59130096435547 45.37696075439453 44.59704208374023 45.35434722900391 44.61204147338867 45.33923721313477 C 55.10953903198242 35.28248977661133 55.46657180786133 18.62021827697754 45.40983200073242 8.123052597045898 Z M 41.17890548706055 43.36832046508789 C 40.83631896972656 43.66954040527344 40.48237609863281 43.95565795898438 40.12478637695313 44.23239517211914 C 39.91400909423828 44.39430618286133 39.70312118530273 44.55424118041992 39.48660278320313 44.70866394042969 C 39.14589309692383 44.95528793334961 38.79955291748047 45.18867111206055 38.44748687744141 45.41268920898438 C 38.19148254394531 45.57648086547852 37.92985534667969 45.73454284667969 37.66624069213867 45.88895797729492 C 37.33491134643555 46.07723617553711 36.99795532226563 46.26540374755859 36.6572380065918 46.45368194580078 C 36.35601425170898 46.60799026489258 36.04916763305664 46.75302886962891 35.74055099487305 46.89608383178711 C 35.43194198608398 47.03913879394531 35.09111785888672 47.19157409667969 34.75790405273438 47.32525253295898 C 34.42469787597656 47.45893859863281 34.07086563110352 47.58501052856445 33.72254180908203 47.70170211791992 C 33.40444183349609 47.81089401245117 33.08634185791016 47.92384338378906 32.76437759399414 48.01979827880859 C 32.38793563842773 48.13274383544922 31.99450492858887 48.22495651245117 31.60482025146484 48.31914901733398 C 31.29984474182129 48.39062118530273 30.99873352050781 48.47157669067383 30.69001197814941 48.53190612792969 C 30.24385452270508 48.61849212646484 29.7883243560791 48.67871475219727 29.3309211730957 48.74081420898438 C 29.07116889953613 48.77467727661133 28.81329345703125 48.82177352905273 28.55155181884766 48.84813690185547 C 27.82866096496582 48.91773223876953 27.09639358520508 48.95920181274414 26.35662269592285 48.95920181274414 C 25.61685752868652 48.95920181274414 24.88459014892578 48.91783905029297 24.16169548034668 48.84813690185547 C 23.90007019042969 48.82176971435547 23.64219284057617 48.77467727661133 23.38233184814453 48.74081420898438 C 22.92492485046387 48.67871856689453 22.46939659118652 48.61849212646484 22.02324104309082 48.53190612792969 C 21.71451568603516 48.4716911315918 21.41329383850098 48.39072799682617 21.10842895507813 48.31914901733398 C 20.7187442779541 48.22505950927734 20.3309383392334 48.1308708190918 19.94886779785156 48.01979827880859 C 19.62701606750488 47.92384338378906 19.30880928039551 47.81089401245117 18.99070930480957 47.70170211791992 C 18.64249992370605 47.58125305175781 18.29417610168457 47.45882415771484 17.95534133911133 47.32525253295898 C 17.61650657653809 47.19157409667969 17.29653167724609 47.04476547241211 16.97269630432129 46.89608383178711 C 16.64886474609375 46.74740600585938 16.35712432861328 46.60810089111328 16.05601119995117 46.45368194580078 C 15.71529960632324 46.27676391601563 15.37833976745605 46.09035873413086 15.04700756072998 45.88895797729492 C 14.78350353240967 45.73464965820313 14.52176856994629 45.57648086547852 14.26576614379883 45.41268920898438 C 13.91380405426025 45.18867111206055 13.56735801696777 44.95528793334961 13.22664928436279 44.70866394042969 C 13.01013469696045 44.55435562133789 12.79935359954834 44.39430618286133 12.58846473693848 44.23239517211914 C 12.23076820373535 43.95565795898438 11.87693119049072 43.66767120361328 11.53434658050537 43.36832046508789 C 11.45151329040527 43.30622482299805 11.37617969512939 43.22713851928711 11.29533195495605 43.15555572509766 C 11.37948799133301 36.75198745727539 15.49326992034912 31.0976734161377 21.56020736694336 29.04679489135742 C 24.5937328338623 30.48982429504395 28.11577033996582 30.48982429504395 31.1492919921875 29.04679489135742 C 37.21612167358398 31.0976734161377 41.32990264892578 36.75188064575195 41.4141731262207 43.15555572509766 C 41.33509063720703 43.22713851928711 41.2597541809082 43.29872512817383 41.17890548706055 43.36832046508789 Z M 19.79059028625488 15.10358810424805 C 21.82878875732422 11.47875785827637 26.41950035095215 10.19257259368896 30.04432678222656 12.23076820373535 C 33.66915893554688 14.26896667480469 34.95534133911133 18.85967636108398 32.91714859008789 22.48450660705566 C 32.24090957641602 23.68719863891602 31.24712753295898 24.68098258972168 30.04432678222656 25.35732650756836 C 30.03495407104492 25.35732650756836 30.02359580993652 25.35732650756836 30.0123405456543 25.36858177185059 C 29.51313400268555 25.64641952514648 28.9855785369873 25.86988067626953 28.43860816955566 26.03499794006348 C 28.34077453613281 26.06323432922363 28.25032997131348 26.1008472442627 28.14686965942383 26.12533187866211 C 27.95859146118164 26.1743049621582 27.76093864440918 26.20816612243652 27.56703567504883 26.24202728271484 C 27.20194816589355 26.30588722229004 26.83255767822266 26.34295082092285 26.46206855773926 26.35309791564941 L 26.24742889404297 26.35309791564941 C 25.87693977355957 26.34295082092285 25.5075511932373 26.3058910369873 25.14246368408203 26.24202728271484 C 24.95418548583984 26.20816612243652 24.75465393066406 26.1743049621582 24.5627384185791 26.12533187866211 C 24.46291923522949 26.1008472442627 24.37445831298828 26.06323432922363 24.2710018157959 26.03499794006348 C 23.72403144836426 25.86988067626953 23.19647598266602 25.64652824401855 22.69726943969727 25.36858177185059 L 22.66340637207031 25.35732650756836 C 19.0385799407959 23.31913185119629 17.75239753723145 18.72842025756836 19.79059028625488 15.10358810424805 Z M 44.75355529785156 39.4228515625 L 44.75355529785156 39.4228515625 C 43.54557037353516 33.78850173950195 39.83536529541016 29.01182746887207 34.67507553100586 26.4474048614502 C 38.89341735839844 21.8522777557373 38.58789825439453 14.70750904083252 33.99277496337891 10.48916435241699 C 29.39765357971191 6.270820617675781 22.25288009643555 6.576346397399902 18.03453826904297 11.17146682739258 C 14.06888675689697 15.49139499664307 14.06888675689697 22.12758255004883 18.03453826904297 26.44740104675293 C 12.87424850463867 29.01193809509277 9.164047241210938 33.78850173950195 7.956062793731689 39.4228515625 C 0.7377249598503113 29.25525856018066 3.128543138504028 15.16116428375244 13.29614162445068 7.942827701568604 C 23.46373748779297 0.7244876027107239 37.55782318115234 3.115305423736572 44.77616500854492 13.2829008102417 C 47.48960494995117 17.10505485534668 48.94620132446289 21.67701721191406 48.94388198852539 26.36445808410645 C 48.94388198852539 31.04781532287598 47.47867965698242 35.61382293701172 44.75355529785156 39.4228515625 Z">
					</path>
				</svg>
			</div>
		</div>
	</a>


            

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

function downloadmodal() {
	$("#modal-default").modal("show")
}
</script>

<script type="text/javascript">
   $(function() {
      $('select[name=inputbu]').change(function() {
         var stateID = $(this).val();
         if(stateID) {
            $.ajax({
               url: '/getmsg5/'+stateID,
               type: "GET",
               dataType: "json",
               success:function(data) {
                  if(data){
                     $("#inputcompany").empty();
                     $("#inputcompany").append('<option>--- Select Company ---</option>');
                     $.each(data,function(key,value){
                           $("#inputcompany").append('<option value="'+key+'">'+value+'</option>');
                     });
                  }
                  
               }
            });
         }
      });
    });
</script>

<script type="text/javascript">
   $(function() {
      $('select[name=inputcompany]').change(function() {
         var stateID = $(this).val();
         if(stateID) {
            $.ajax({
               url: '/getrec/'+stateID,
               type: "GET",
               dataType: "json",
               success:function(data) {
                  if(data > 0){
										$('#showexcel').show();
                    $("#showinfo").html('Download Data to Excel ('+data+' Customer)');
                  }
               }
            });
         }
      });
    });

		function prsexcel(){
			
		}
</script>

</body>
</html>
