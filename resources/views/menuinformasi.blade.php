<?php 
$putih = "white";
$hitam = "rgba(84,84,84,1)";


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ Session::token() }}"> 
  <title>Customer</title>
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
  .dropdown-menu-lg {
    /* max-width: 300px; */
    /* min-width: 280px; */
    /* padding: 0; */
}
  .imglogin {
		border-radius: 50%;
	}
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
   #fon_24_wh{
      color: white;
      font-size:24px;
   }
   #fon_28_wh{
      color: white;
      font-size:28px;
   }
   .awal{
      top:100px;
      position: relative;
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

   #Group_694_b {
		position: absolute;
		width: 34.695px;
		height: 37.586px;
		left: 0px;
		top: 2.891px;
		overflow: visible;
	}
	#Group_693_c {
		position: absolute;
		width: 34.695px;
		height: 37.586px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_176_d {
		fill: rgba(51,122,183,1);
	}
	.Path_176_d {
		overflow: visible;
		position: absolute;
		width: 34.695px;
		height: 37.586px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Group_696_f {
		position: absolute;
		width: 31.803px;
		height: 31.803px;
		left: 8.674px;
		top: 0px;
		overflow: visible;
	}
	#Group_695_f {
		position: absolute;
		width: 31.803px;
		height: 31.803px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Group_696_f {
		position: absolute;
		width: 31.803px;
		height: 31.803px;
		left: 8.674px;
		top: 0px;
		overflow: visible;
	}
	#Group_695_f {
		position: absolute;
		width: 31.803px;
		height: 31.803px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Path_177_h {
		fill: rgba(51,122,183,1);
	}
	.Path_177_h {
		overflow: visible;
		position: absolute;
		width: 31.803px;
		height: 31.803px;
		left: 0px;
		top: 0px;
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
   .judultable {
      background:rgba(60,141,188,1);
      color: #fff;
      text-align: center;
   }

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
         <a href="/setting1" class="nav-link" id="fon_28_wh">Seting/</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" id="garis_tipis">
         <a href="#" class="nav-link atas" id="fon_28_wh">User Profile</a>
      </li>
   </ul>
   @include('layouts.logo')
   
</nav>

<!-- /.navbar -->

  <!-- Main Sidebar Container -->
	<div class="wrapper awal" 
      style="position: relative;">

		<div class="container-fluid">

         <div class="card card-default">
            <div class="card-header">
               <h3 class="card-title font36">User Profile</h3>

               <div class="card-tools">
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button> -->
               </div>
            </div>
            <div style="height: 10px; left: 10px; fill: rgba(51,122,183,1);color: white;">
               <svg class="Rectangle_248_coa">
                  <rect id="Rectangle_248_coa" rx="0" ry="0" x="20" y="0" width="106" height="13">
                  </rect>
               </svg>
            </div>
            <!-- /.card-header -->
               <form method="post" id="myform" action="/info1edit/save" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="card-body" id="inpinformasi">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group row">
                              <label for="inputuserid" class="col-sm-3 col-form-label">User ID</label>
                              <div class="col-sm-9">
                                 <!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
                                 <div class="input-group">
                                    <input type="text" class="form-control @error('inputuserid') is-invalid @enderror"  required autocomplete="inputuserid" autofocus id="inputuserid" name="inputuserid" onchange="cekinputan()">
                                    <input type="hidden" id="inputbaris" name="inputbaris">
                                    @error('inputuserid')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="inputusertype" class="col-sm-3 col-form-label">User Type</label>
                              <div class="col-sm-9">
                                 <!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
                                 <div class="input-group">
                                    <select class="form-control @error('inputusertype') is-invalid @enderror"  required autocomplete="inputusertype" autofocus id="inputusertype" name="inputusertype" onblur="cekinputan()"> 
                                       <option value="" selected>--- Select User Type ---</option>
                                    <?php
                                    foreach ($listgroup as $key => $value) {
                                    ?>
                                       <option value="{{$value->idusergroup}}">{{$value->namegroup}}</option>
                                    <?php
                                    }
                                    ?>
                                    </select>

                                    @error('inputusertype')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror

                                 </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="inputuserarea" class="col-sm-3 col-form-label">Area</label>
                              <div class="col-sm-9">
                                 <div class="input-group">
                                    <select class="form-control @error('inputuserarea') is-invalid @enderror"  required autocomplete="inputuserarea" autofocus id="inputuserarea" name="inputuserarea" onblur="cekinputan()"> 
                                    <option value="" selected>--- Select Area ---</option>
                                    <?php
                                    foreach ($tblobject as $key => $value) {
                                    ?>
                                       <option value="{{$value->objname}}">{{$value->desc}}</option>
                                    <?php
                                    }
                                    ?>
                                    </select>
                                    @error('inputuserarea')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                           <div class="form-group row">
                              <label for="inputuserpass" class="col-sm-3 col-form-label">Password</label>
                              <div class="col-sm-8">
                                 <!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
                                 <div class="input-group">
                                    <input type="password" class="form-control @error('inputuserpass') is-invalid @enderror"  required autocomplete="inputuserpass" autofocus id="inputuserpass" name="inputuserpass" placeholder="password" onblur="cekinputan()">
                                    @error('inputuserpass')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                 </div>
                              </div>
                              <button type="button" 
                                 title="Show Password"
                                 onclick="myFunction2(1)">          <!--  this is the title -->
                                 <span class="fa fa-eye"></span> <!--  this is the icon  -->
                              </button> 
                           </div>
                           <div class="form-group row">
                              <label for="inputuserrepass" class="col-sm-3 col-form-label">Re-Type Password</label>
                              <div class="col-sm-8">
                                 <!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
                                 <div class="input-group">
                                    <input type="password" class="form-control @error('inputuserrepass') is-invalid @enderror"  required autocomplete="inputuserrepass" autofocus id="inputuserrepass" name="inputuserrepass" placeholder="password" onblur="cekinputan()">

                                    @error('inputuserrepass')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror

                                 </div>
                              </div>
                              <button type="button" 
                                 title="Show Password"
                                 onclick="myFunction2(2)">          <!--  this is the title -->
                                 <span class="fa fa-eye"></span> <!--  this is the icon  -->
                              </button> 
                           </div>

                           <div class="form-group row">
                              <label for="inputusercompany" class="col-sm-3 col-form-label">Company</label>
                              <div class="col-sm-9">
                                 <div class="input-group">
                                    <select class="form-control @error('inputusercompany') is-invalid @enderror"  required autocomplete="inputusercompany" autofocus id="inputusercompany" name="inputusercompany" onblur="cekinputan()"> 
                                       <option>--- Select Company ---</option>
                                    </select>
                                    
                                    @error('inputusercompany')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- /.col -->
                     </div>
                     <!-- /.row -->
                  </div>

               
                  <div class="card-body" id="save" style="display:none" >
                     <div class="row" >
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-2">
                           <div class="form-group row">
                              <div class="col-sm-12">
                                 <button type="submit" id="save_save" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#modal-default" style="background: rgba(15,199,89,1);">Save</button>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group row">
                              <div class="col-sm-12">
                                 <button type="button" id="save_cancel" onclick="myFunctioncancel()" class="btn btn-block btn-danger btn-lg" data-toggle="modal" data-target="#modal-cancel">Cancel</button>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                     </div>
                  </div>
               </form>
               <!-- /.card-body -->
               <div class="card-footer">
                  
               </div>
            </div>

         <div class="card card-default">
            <div class="card-header">
               <h3 class="card-title font36">List of User</h3>
             
               
            </div>
            <!-- /.card-header -->

           
            <div class="card-body">
               <div class="form-group row">                    
                  <div class="col-sm-1">
                     <label for="inputusertype" class="col-sm-12 col-form-label judultable">No</label>
                  </div>                    
                  
                  <div class="col-sm-4">
                  <label for="inputusertype" class="col-sm-12 col-form-label judultable">User ID</label>
                  </div>

                  <div class="col-sm-2" style="width:150px">
                     <label for="inputusertype" class="col-sm-12 col-form-label judultable">user Type</label>
                  </div>
                  
                  <div class="col-sm-2">
                     <label for="inputusertype" class="col-sm-12 col-form-label judultable">Area</label>
                  </div>

                  <div class="col-sm-3">
                        
                     <label for="inputusertype" class="col-sm-11 col-form-label judultable">Password</label>
                     
                     <div class="input-group col-sm-1">      
                        <!-- <label for="inputusertype" class="col-sm-12 col-form-label judultable">Password</label> -->
                     </div>
                  </div>
                  
               </div>
            
               <div id="inplist">

                  <?php 
                  $i=0;
                  foreach ($listuser as $key => $value3) {
                  $i++;
                  ?>
                              
                  <div class="form-group row">                    
                     <div class="col-sm-1">
                        <div class="input-group">
                           <input type="text" id="inputno_{{$i}}" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
                           value="{{$i}}"> 
                           <input type="hidden" id="inputuid_{{$i}}" value="{{$value3->uid}}"> 
                        </div>
                     </div>                    
                     
                     <div class="col-sm-4">
                        <div class="input-group">                    
                           <input type="text" id="inputuserid_{{$i}}" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
                           value="{{$value3->user_id}}"> 
                        </div>
                     </div>

                     <div class="col-sm-2" style="width:150px">
                        <div class="input-group">
                        <?php 
                        foreach ($listgroup as $key => $value) {
                           if ($value->idusergroup == $value3->usergroup){

                           break;
                           }
                        }
                        ?>
                           <input type="text" id="inputusertype_{{$i}}" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
                           value="{{$value->namegroup}}"> 
                        </div>
                     </div>

                     <div class="col-sm-2">
                        <div class="input-group" id="select">                    
                           <div class="input->group">
                              <input type="text" id="inputuserarea_{{$i}}" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
                                 value="{{$value3->branch}}"> 
                           </div>
                        </div>
                     </div>

                     <div class="col-sm-3 row">
                        <div class="input-group col-sm-11">                    
                           <input type="password" id="inputuserpass_{{$i}}" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
                              value="({{md5($value3->password)}}"> 
                           <input type="hidden" id="inputuserpass_{{$i}}" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
                              value="{{$value3->company}}"> 
                        </div>
                           <!-- <div class="input-group col-sm-1">
                              <button type="button" 
                                 title="Show Password"
                                 onclick="myFunction({{$i}})"> 
                                 <span class="fa fa-eye"></span>
                              </button> 
                           </div> -->
                           <div class="input-group col-sm-1">
                              
                              <button type="button" 
                                 title="Edit"
                                 onclick="myedit({{$i}})">          <!--  this is the title -->
                                 <i class="far fa-edit"></i> <!--  this is the icon  -->
                              </button> 
                           </div>
                        <!-- </div> -->
                     </div>
                     
                  </div>  
               
                     <?php
                  }
                  ?>
               </div> 


               

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
<!-- jquery-validation -->
<script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- AdminLTE App -->

<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- page script -->

<script>
   function myFunctioncancel() {
      var x = document.getElementById("save");
      x.style.display = "none";
      $.ajax({
         url: '/getmsg4',
         type: "GET",
         dataType: "json",
         success:function(data) {
            $("#inpinformasi").html(data.msg);
         }
      });
   }

   function myFunction(para_1) {
      
      var x = document.getElementById('inputuserpass_'+para_1);

      if (x.type == "password") {
         x.type = "text";
      } else {
         x.type = "password";
      }
   }

   function myFunction2(i) {
      if (i==1){
         var x = document.getElementById('inputuserpass');   
      } else {
         var x = document.getElementById('inputuserrepass');
      }

      if (x.type == "password") {
         x.type = "text";
      } else {
         x.type = "password";
      }
   }

   function myedit(isi) 
	{
      var tx1 = 'inputuid_'+isi;
      var x = document.getElementById("save");
      if (x.style.display == "none") {
         x.style.display = "block";
      }
      var uid = document.getElementById(tx1).value;
      $.ajax({
         url: '/getmsg3/'+uid+'/'+isi,
         type: "GET",
         dataType: "json",
         success:function(data) {
            $("#inpinformasi").html(data.msg);
         }
      });
   }
</script>

<script type="text/javascript">
   $(function() {
      $('select[name=inputuserarea]').change(function() {
         var stateID = $(this).val();
         if(stateID) {
            $.ajax({
               url: '/getmsg5/'+stateID,
               type: "GET",
               dataType: "json",
               success:function(data) {
                  if(data){
                     $("#inputusercompany").empty();
                     $("#inputusercompany").append('<option>--- Select Company ---</option>');
                     $.each(data,function(key,value){
                           $("#inputusercompany").append('<option value="'+key+'">'+value+'</option>');
                     });
                  }
                  
               }
            });
         }
      });
    });
</script>







<script type="text/javascript">   
   function cekinputan(){
     
      var x = document.getElementById("save");
      
      var inputuserid      = document.getElementById("inputuserid");
      var inputusertype    = document.getElementById("inputusertype");
      var inputuserarea    = document.getElementById("inputuserarea");
      var inputuserpass    = document.getElementById("inputuserpass");
      var inputuserrepass  = document.getElementById("inputuserrepass");
      var inputusercompany = document.getElementById("inputusercompany");

      if(inputuserid.value == "" || inputusertype.value == "" || inputuserarea.value == "" || inputuserpass.value == "" || inputuserrepass.value == "" || inputusercompany.value == ""){
         x.style.display = "none";
      } else {
         x.style.display = "block";
      }
   }
</script>
</body>
</html>
