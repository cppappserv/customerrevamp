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

  </style>
</head>
<body class="hold-transition sidebar-mini">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light atas">
   <!-- Left navbar links -->
   <!-- <div class="atas"> -->
   <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block" >
         <a href="/setting1" class="nav-link" id="fon_24_wh">Seting/</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" id="garis_tipis">
         <a href="#" class="nav-link atas" id="fon_24_wh">User Profile</a>
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

<!-- /.navbar -->

  <!-- Main Sidebar Container -->
	<div class="wrapper awal" style="
    top: 75px;
    left: 3%;
    width: 94%;
    
    ">

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
            <?php 
            foreach ($listuseredit as $key => $value2) {
               // select '1' urut, 'supram.maharwantijo@cpp.co.id' userid, 
               // 'Administrator' usertype, 
               // 'Jakarta' userarea, '1234' userpassword, '1234' userrepassword
               ?>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group row">
                        <label for="inputuserid" class="col-sm-3 col-form-label">User ID</label>
                        <div class="col-sm-9">
                           <!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
                           <div class="input-group">
                           <input type="email" class="form-control" id="inputuserid" placeholder="Email"
                           value="{{$value2->userid}}">
                           </div>
                        </div>
                     </div>
                     


                     <div class="form-group row">
                        <label for="inputusertype" class="col-sm-3 col-form-label">User Type</label>
                        <div class="col-sm-9">
                           <!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
                           <div class="input-group">
                              <select class="form-control" id="inputusertype"> 
                              <?php 
                              foreach ($liststatus as $key => $value) {
                                 ?>
                                 <option value="{{$value->urut}}" selected="">{{$value->tblstatus}}</option>
                                 <?php
                              }
                              ?>
                              </select>
                           </div>
                        </div>
                     </div>

                     <div class="form-group row">
                        <label for="inputuserarea" class="col-sm-3 col-form-label">Area</label>
                        <div class="col-sm-9">
                           <div class="input-group">
                              <select class="form-control" id="inputuserarea"> 
                              <option value="" selected="">Area</option>
                              <?php 
                              foreach ($listarea as $key => $value) {
                                 ?>
                                 <option value="{{$value->urut}}" <?php echo ($value->tblarea == $value2->userarea?'selected':'');?>>{{$value->tblarea}}</option>
                                 <?php
                              }
                              ?>
                              </select>
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
                              <input type="password" class="form-control" id="inputuserpass" placeholder="password"
                              value="{{$value2->userpassword}}">
                           </div>
                           

                           

                        </div>
                        <button type="button" 
                           title="Show Password"
                           onclick="myFunction('inputuserpass')">          <!--  this is the title -->
                           <span class="fa fa-eye"></span> <!--  this is the icon  -->
                        </button> 
                     </div>
                     <div class="form-group row">
                        <label for="inputuserrepass" class="col-sm-3 col-form-label">Re-Type Password</label>
                        <div class="col-sm-8">
                           <!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
                           <div class="input-group">
                           <input type="password" class="form-control" id="inputuserrepass" placeholder="password"
                           value="{{$value2->userrepassword}}">
                           </div>
                        </div>
                        <button type="button" 
                           title="Show Password"
                           onclick="myFunction('inputuserrepass')">          <!--  this is the title -->
                           <span class="fa fa-eye"></span> <!--  this is the icon  -->
                        </button> 
                     </div>

                     <div class="form-group row">
                        <label for="inputusercompany" class="col-sm-3 col-form-label">Company</label>
                        <div class="col-sm-9">
                           <div class="input-group">
                              <select class="form-control" id="inputusercompany"> 
                              <?php 
                              foreach ($listcompany as $key => $value) {
                                 ?>
                                 <option value="{{$value->urut}}" selected="">{{$value->tblcompany}}</option>
                                 <?php
                              }
                              ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     
                     
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <?php 
            }
            ?>

            <!-- /.card-body -->
            <div class="card-footer collapese">
               <div class="row collapse" >
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
            </div>
         </div>

         <div class="card card-default">
            <div class="card-header">
               <h3 class="card-title font36">List of User</h3>
             
               
            </div>
            <!-- /.card-header -->
            

           
            <div class="card-body">
               <div class="form-group row">                    
                  <div class="col-sm-2">
                     <label for="inputusertype" class="col-sm-12 col-form-label">No</label>
                  </div>                    
                  
                  <div class="col-sm-2">
                  <label for="inputusertype" class="col-sm-12 col-form-label">User ID</label>
                  </div>

                  <div class="col-sm-2" style="width:150px">
                     <label for="inputusertype" class="col-sm-12 col-form-label">user Type</label>
                  </div>
                  
                  <div class="col-sm-2">
                     <label for="inputusertype" class="col-sm-12 col-form-label">Area</label>
                  </div>

                  <div class="col-sm-2">
                     <label for="inputusertype" class="col-sm-12 col-form-label">Password</label>
                  </div>
                  <div class="col-sm-2">
                  </div>
               </div>
            </div>

<?php 
foreach ($listuser as $key => $value3) {
   ?>
            <div class="card-body">
               <div class="form-group row">                    
                  <div class="col-sm-1">
                     <div class="input-group">
                        <input type="text" id="inputno[]" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
                        value="{{$value3->urut}}"> 
                     </div>
                  </div>                    
                  
                  <div class="col-sm-3">
                     <div class="input-group">                    
                        <input type="text" id="inputuserid[]" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Tempat Lahir" readonly=""
                        value="{{$value3->userid}}"> 
                     </div>
                  </div>

                  <div class="col-sm-2" style="width:150px">
                     <div class="input-group">
                        <input type="text" id="inputusertype[]" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Tempat Lahir" readonly=""
                        value="{{$value3->usertype}}"> 
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="input-group" id="select">                    
                        <div class="input->group">
                           <input type="text" id="inputuserarea[]" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Tempat Lahir" readonly=""
                           value="{{$value3->userarea}}"> 
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="input-group col-sm-12">                    
                        <input type="text" id="inputuserpass[]" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Tempat Lahir" readonly=""
                        value="{{$value3->userpassword}}"> 
                     </div>
                  </div>
                  <div class="col-sm-1">
                     <div class="input-group col-sm-12">
                        <button type="button" 
                           title="Show Password"
                           onclick="myFunction('inputuserpass[]')">          <!--  this is the title -->
                           <span class="fa fa-eye"></span> <!--  this is the icon  -->
                        </button> 
                     </div>
                  </div>
                  <div class="col-sm-1">
                     <div class="input-group col-sm-12">
                        <button type="button" 
                           title="Show Password"
                           onclick="myFunction('inputuserpass[]')">          <!--  this is the title -->
                           <i class="far fa-edit"></i> <!--  this is the icon  -->
                        </button> 
                     </div>
                  </div>
               </div>  
            </div>
   <?php
}
?>
            


            



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
   function myFunction(para_1) {
      var x = document.getElementById(para_1);
      if (x.type === "password") {
         x.type = "text";
      } else {
         x.type = "password";
      }
   }
</script>


</body>
</html>
