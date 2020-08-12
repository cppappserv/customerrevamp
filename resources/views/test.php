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

<!-- Main Sidebar Container -->
<div class="wrapper awal" style="
	top: 150px;">
		<form class="form-horizontal">	
			

			<input type="hidden" id="inputuserid" value="{{$inputuserid}}">

			<div class="card-body">
            <h4>Custom Content Below</h4>
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#tab1" role="tab" aria-controls="custom-content-below-home" aria-selected="false">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#tab2" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#tab3" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Messages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill" href="#tab4" role="tab" aria-controls="custom-content-below-settings" aria-selected="true">Settings</a>
              </li>
				  <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-settings-tab" data-toggle="pill" href="#tab5" role="tab" aria-controls="custom-content-below-settings" aria-selected="true">Settings</a>
              </li>
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="custom-content-below-home-tab">

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
										<div class="form-group row">
											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputnamalengkap" placeholder="Nama Lengkap">
											</div>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
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
												<input type="text" class="form-control" name="inputkelurahanktp" id="inputkelurahanktp" placeholder="Kelurahan" onblur="formValidation(this)">
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
								<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
								the plugin. -->
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

										

									<!-- </div> -->
									<!-- /.col -->
									<!-- <div class="col-md-5">
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
									</div> -->
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
   
</body>
</html>