<?php 
$putih = "white";
$hitam = "rgba(84,84,84,1)";


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

   .button_proses{
      width: 200px;
      margin-left:20px;
      margin-right:20px;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      border-bottom-left-radius: 20px;
      border-bottom-right-radius: 20px
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
   .font36{
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 36px;
		color: rgba(51,122,183,1);
	}
	.kotalexcel{
		border: 20px;
    background: rgb(51 122 183);
    text-align: center;
    color: white;
    font-size: 24px;
    border-radius: 10px;
    padding-left: 10px;
	}
	.kotalexcel_kosong{
		border: 20px;
    background: white;
    text-align: center;
    border-color: black;
    font-size: 24px;
    border-radius: 10px;
    padding-left: 10px;
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
         <a href="/dashboard1" class="nav-link" id="fon_24_wh">Seting/</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" id="garis_tipis">
         <a href="#" class="nav-link atas" id="fon_24_wh">Upload Data From Excel</a>
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
   
</nav>

<!-- Import Excel -->


<!-- /.navbar -->

  <!-- Main Sidebar Container -->
	<div class="wrapper awal" style="
    top: 75px;
    left: 3%;
    width: 94%;
    
    ">

      <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document" style="margin-left:10%;margin-right:10%">
            <form method="post" action="/uploadexcel" enctype="multipart/form-data">
            {{ csrf_field() }}
               <div class="modal-content" style="width:250%;">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                  </div>
                  <div class="modal-body" id="hslexcel">
                     <div class="form-group">
                        <label>PILIH FILE</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Import</button>
                  </div>
               </div>
            </form>
         </div>
      </div>

		<div class="container-fluid">

      <div class="card card-default">
									<div class="card-header">
										<h3 class="card-title font36">Upload Customer</h3>
                              <div class="card-tools">
                                 <button type="button" class="btn btn-block btn-primary btn-lg button_proses" style="background: rgba(245,180,67,1);">History</button>
										</div>
                              <div class="card-tools">
                                 <button type="button" id="button" class="btn btn-block btn-primary btn-lg button_proses" style="background: rgba(15,199,89,1);" 
                                 data-toggle="modal" data-target="#importExcel"
                                 >Upload</button>
                                 <span id='val' style="display:none"></span>
										</div>
                              
									</div>
                           <input type="file" name="file" required="required" style="display:none;">
									<!-- /.card-header -->
                           <div style="height: 10px; left: 10px; fill: rgba(51,122,183,1);color: white;">
                              <svg class="Rectangle_248_coa">
                                 <rect id="Rectangle_248_coa" rx="0" ry="0" x="20" y="0" width="106" height="13">
                                 </rect>
                              </svg>
                              </div>
                           <div class="card-body">
                              <table id="example2" class="table table-bordered table-hover">
                                 <thead>
                                 <tr style="background: rgba(60,141,188,1);
                                    color: white;
                                    text-align: center;
                                    font-family: Roboto;">
                                    <th>No</th>
                                    <th>File Name</th>
                                    <th>Status</th>
                                    <th>Upload Time</th>
                                    <th>Process Time</th>
                                    <th>Total Row</th>
                                    <th>User</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                 foreach ($fileupload as $key => $value) {
                                 ?>   
                                 <tr>
                                    <td>{{$value->urut}} </td>
                                    <td>{{$value->filename}}</td>
                                    <td>{{$value->status}}</td>
                                    <td>{{$value->uploadtime}}</td>
                                    <td>{{$value->processtime}}</td>
                                    <td>{{$value->totalrow}}</td>
                                    <td>{{$value->user}}</td>
                                 </tr>
                                 <?php
                                 }
                                 ?>
                                 </tbody>
                                 
                              </table>
                           </div>



									<!-- /.card-body -->
									<div class="card-footer">
										<!-- Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
										the plugin. -->
									</div>
								</div>

			
		</div>
		<!-- /.card -->
	</div>

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

$(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<!-- <script type="text/javascript">
		$('#button').click(function(){
			$("input[type='file']").trigger('click');
		})

		$("input[type='file']").change(function(){
         let file = $("input[type=file]").val();
         let _token   = $('input[name="_token"]').val();
         $.ajax({
            url: '/uploadexcel',
            type: "POST",
            data:{
               file:file,
               _token: _token
            },
            // dataType: "json",
            success:function(data) {
               // $("#hslexcel").empty();
               $("#hslexcel").html(data.msg);
               $('#importExcel').modal('show');
            }
         });
		})  
	</script> -->

</body>
</html>
