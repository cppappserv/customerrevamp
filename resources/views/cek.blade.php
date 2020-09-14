
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Customer</title>
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap"> -->
<link rel="stylesheet" href="http://localhost:8000/css/roboto.css">


<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="http://localhost:8000/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
<link rel="stylesheet" href="http://localhost:8000/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="http://localhost:8000/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="http://localhost:8000/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
<!-- iCheck -->
<link rel="stylesheet" href="http://localhost:8000/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="http://localhost:8000/plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="http://localhost:8000/dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="http://localhost:8000/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="http://localhost:8000/plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="http://localhost:8000/plugins/summernote/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->
<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->

<style id="applicationStylesheet" type="text/css">


  .imglogin {
  border-radius: 50%;
  }
  a { 
  text-decoration: none; 
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
  #Welcome_Aditya_Yudha_bl {
  position: absolute;
  overflow: visible;
  width: 389px;
  white-space: nowrap;
  text-align: left;
  font-family: Roboto;
  font-style: normal;
  font-weight: normal;
  font-size: 36px;
  color: rgba(88,88,88,1);
  }
  #Dashboard_bt {
  white-space: nowrap;
  text-align: left;
  font-family: Roboto;
  font-style: normal;
  font-weight: normal;
  font-size: 24px;
  color: rgba(255,255,255,1);
  }
  .awal{
  top:75px;
  }
  </style>
  <style id="applicationStylesheet" type="text/css">
  #Rectangle_241_bx {
  fill: rgba(255,255,255,1);
  }
  .Rectangle_241_bx {
  position: fixed;
  overflow: visible;
  width: 125px;
  height: 19px;
  left: 140px;
  top: 80px;
  }
  .font36{
  font-family: Roboto;
  font-style: normal;
  font-weight: normal;
  font-size: 36px;
  color: rgba(51,122,183,1);
  }
</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light"
    style="
    margin-left: 0px;
    position: fixed;
    background-color: rgba(43,185,201,1);
    top: 0;
    width: 100%;
    font-size: 24px;
    height: 100px
    /* z-index:0; */
    ">
    <!-- Left navbar links -->
    <ul class="navbar-nav" >
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link"  id="Dashboard_bt">Setting /</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"  id="Dashboard_bt">User Profile</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="color: white;top: 20px;height: 75px;font-size: 28px;">
        <span id="Dashboard_bt">supram maharwantijo</span>
      </div>

      <li class="nav-item dropdown" >
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="/storeimage/supram" width="50" height="50" class="imglogin"
          style="
          width: 70px;
          height: 70px;
          margin-top: 10px;
          "
          >

        </a>


        <div class="dropdown-menu dropdown-menu-right" style="background-color:white;">
          <a href="/logout" class="dropdown-item" style="background-color:white;">
            <!-- Message Start -->
            <i class="fas fa-sign-out-alt" ></i>
            <!-- <img srv="http://localhost:8000/image/logoout.png"> -->
            Logout
            <!-- Message End -->
          </a>
        </div>
      </li>
    </ul>   
    <svg class="Rectangle_241_bx">
      <rect id="Rectangle_241_bx" rx="0" ry="0" x="0" y="0" width="135" height="6">
      </rect>
    </svg>

  </nav>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <div class="wrapper awal" 
  style="position: relative;
  top: 100px;
  left: 1%;
  width: 98%;">

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
  <input type="hidden" name="_token" value="Ln1Sku1sAb6hzprAD89qpFVGS9a512upRqNL2ycL">
  <div class="card-body" id="inpinformasi">
  <div class="row">
  <div class="col-md-6">
  <div class="form-group row">
  <label for="inputuserid" class="col-sm-3 col-form-label">User ID</label>
  <div class="col-sm-9">
  <!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
  <div class="input-group">
  <input type="text" class="form-control "  required autocomplete="inputuserid" autofocus id="inputuserid" name="inputuserid" onchange="cekinputan()">
  <input type="hidden" id="inputbaris" name="inputbaris">
  </div>
  </div>
  </div>
  <div class="form-group row">
  <label for="inputusertype" class="col-sm-3 col-form-label">User Type</label>
  <div class="col-sm-9">
  <!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
  <div class="input-group">
  <select class="form-control "  required autocomplete="inputusertype" autofocus id="inputusertype" name="inputusertype" onblur="cekinputan()"> 
  <option value="" selected>--- Select User Type ---</option>
  <option value="1">Administrator</option>
  <option value="9">Coordinator</option>
  <option value="10">Team Survey</option>
  <option value="11">Agent</option>
  <option value="12">Petambak</option>
  </select>


  </div>
  </div>
  </div>
  <div class="form-group row">
  <label for="inputuserarea" class="col-sm-3 col-form-label">Area</label>
  <div class="col-sm-9">
  <div class="input-group">
  <select class="form-control "  required autocomplete="inputuserarea" autofocus id="inputuserarea" name="inputuserarea" onblur="cekinputan()"> 
  <option value="" selected>--- Select Area ---</option>
  <option value="AREA_WEST">AREA_WEST</option>
  <option value="AREA_EAST">AREA_EAST</option>
  <option value="AREA_SOUTH">AREA_SOUTH</option>
  <option value="AREA_NORTH">AREA_NORTH</option>
  <option value="LS">LS - Lampung / Lower Sumatera</option>
  <option value="US">US - Medan / Upper Sumatera</option>
  <option value="WJ">WJ - Jakarta / West Java</option>
  <option value="CJ">CJ - Central Java</option>
  <option value="EJ">EJ - Surabaya / East Java</option>
  <option value="FISH FEED">FISH FEED</option>
  <option value="FISH FRY">FISH FRY</option>
  <option value="FOOD">FOOD</option>
  <option value="FPD">FPD</option>
  <option value="Pet CWS">Pet CWS</option>
  <option value="Pet SuHS">Pet SuHS</option>
  <option value="Probiotik">Probiotik</option>
  <option value="SHRIMP FEED">SHRIMP FEED</option>
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
  <input type="password" class="form-control "  required autocomplete="inputuserpass" autofocus id="inputuserpass" name="inputuserpass" placeholder="password" onblur="cekinputan()">
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
  <input type="password" class="form-control "  required autocomplete="inputuserrepass" autofocus id="inputuserrepass" name="inputuserrepass" placeholder="password" onblur="cekinputan()">


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
  <select class="form-control "  required autocomplete="inputusercompany" autofocus id="inputusercompany" name="inputusercompany" onblur="cekinputan()"> 
  <option>--- Select Company ---</option>
  </select>

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


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_1" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="1"> 
  <input type="hidden" id="inputuid_1" value="2"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_1" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="administrator"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_1" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Petambak"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_1" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_1" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(ee614c8e50b00b7d743d96c717d00e17"> 
  <input type="hidden" id="inputuserpass_1" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(1)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(1)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

  </div>  


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_2" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="2"> 
  <input type="hidden" id="inputuid_2" value="41"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_2" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="bismo"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_2" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Administrator"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_2" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_2" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(ee614c8e50b00b7d743d96c717d00e17"> 
  <input type="hidden" id="inputuserpass_2" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(2)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(2)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

  </div>  


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_3" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="3"> 
  <input type="hidden" id="inputuid_3" value="178"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_3" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="eddy.ho@cpp.co.id"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_3" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Administrator"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_3" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_3" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(d41d8cd98f00b204e9800998ecf8427e"> 
  <input type="hidden" id="inputuserpass_3" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(3)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(3)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

  </div>  


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_4" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="4"> 
  <input type="hidden" id="inputuid_4" value="181"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_4" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="jonny"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_4" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Administrator"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_4" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_4" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(16a12de97ce762d5e897cd605f178101"> 
  <input type="hidden" id="inputuserpass_4" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(4)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(4)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

  </div>  


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_5" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="5"> 
  <input type="hidden" id="inputuid_5" value="1701"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_5" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="johannes.e"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_5" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Coordinator"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_5" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_5" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(e84e4b4a5e2803ba0ca7b7ec028a43e6"> 
  <input type="hidden" id="inputuserpass_5" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(5)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(5)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

  </div>  


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_6" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="6"> 
  <input type="hidden" id="inputuid_6" value="1703"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_6" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="lily.susanti@cpp.co.id"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_6" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Administrator"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_6" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_6" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(d41d8cd98f00b204e9800998ecf8427e"> 
  <input type="hidden" id="inputuserpass_6" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(6)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(6)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

  </div>  


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_7" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="7"> 
  <input type="hidden" id="inputuid_7" value="1705"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_7" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="tanto.senjaya@cpp.co.id"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_7" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Administrator"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_7" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_7" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(d41d8cd98f00b204e9800998ecf8427e"> 
  <input type="hidden" id="inputuserpass_7" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(7)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(7)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

  </div>  


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_8" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="8"> 
  <input type="hidden" id="inputuid_8" value="1707"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_8" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="lukas.serworwora@cpp.co.id"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_8" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Administrator"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_8" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_8" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(d41d8cd98f00b204e9800998ecf8427e"> 
  <input type="hidden" id="inputuserpass_8" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(8)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(8)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

  </div>  


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_9" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="9"> 
  <input type="hidden" id="inputuid_9" value="1725"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_9" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="emanuel.fajar@cpp.co.id"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_9" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Administrator"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_9" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_9" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(d41d8cd98f00b204e9800998ecf8427e"> 
  <input type="hidden" id="inputuserpass_9" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(9)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(9)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

  </div>  


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_10" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="10"> 
  <input type="hidden" id="inputuid_10" value="1726"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_10" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="ketut,oka@cpp.co.id"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_10" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Administrator"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_10" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_10" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(e84e4b4a5e2803ba0ca7b7ec028a43e6"> 
  <input type="hidden" id="inputuserpass_10" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(10)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(10)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

  </div>  


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_11" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="11"> 
  <input type="hidden" id="inputuid_11" value="1727"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_11" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="hengky.marbun@cpp.co.id"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_11" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Administrator"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_11" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_11" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(d41d8cd98f00b204e9800998ecf8427e"> 
  <input type="hidden" id="inputuserpass_11" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(11)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(11)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

  </div>  


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_12" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="12"> 
  <input type="hidden" id="inputuid_12" value="1734"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_12" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="supram"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_12" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Administrator"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_12" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_12" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(ee614c8e50b00b7d743d96c717d00e17"> 
  <input type="hidden" id="inputuserpass_12" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(12)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(12)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

  </div>  


  <div class="form-group row">                    
  <div class="col-sm-1">
  <div class="input-group">
  <input type="text" id="inputno_13" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" placeholder="Nama" readonly=""
  value="13"> 
  <input type="hidden" id="inputuid_13" value="1736"> 
  </div>
  </div>                    

  <div class="col-sm-4">
  <div class="input-group">                    
  <input type="text" id="inputuserid_13" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="athanasius.nandoyo@cpp.co.id"> 
  </div>
  </div>

  <div class="col-sm-2" style="width:150px">
  <div class="input-group">
  <input type="text" id="inputusertype_13" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value="Administrator"> 
  </div>
  </div>

  <div class="col-sm-2">
  <div class="input-group" id="select">                    
  <div class="input->group">
  <input type="text" id="inputuserarea_13" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
  value=""> 
  </div>
  </div>
  </div>

  <div class="col-sm-3 row">
  <div class="input-group col-sm-11">                    
  <input type="password" id="inputuserpass_13" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
  value="(d41d8cd98f00b204e9800998ecf8427e"> 
  <input type="hidden" id="inputuserpass_13" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
  value=""> 
  </div>
  <!-- <div class="input-group col-sm-1">
  <button type="button" 
  title="Show Password"
  onclick="myFunction(13)"> 
  <span class="fa fa-eye"></span>
  </button> 
  </div> -->
  <div class="input-group col-sm-1">

  <button type="button" 
  title="Edit"
  onclick="myedit(13)">          <!--  this is the title -->
  <i class="far fa-edit"></i> <!--  this is the icon  -->
  </button> 
  </div>
  <!-- </div> -->
  </div>

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
  <!-- /.card -->
  </div>

  </div>
  <!-- ./wrapper -->



<!-- jQuery -->
<script src="http://localhost:8000/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost:8000/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="http://localhost:8000/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://localhost:8000/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost:8000/plugins/sparklines/sparkline.js"></script>
<!-- DataTables -->
<script src="http://localhost:8000/plugins/datatables/jquery.dataTables.js"></script>
<script src="http://localhost:8000/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- JQVMap -->
<script src="http://localhost:8000/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="http://localhost:8000/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost:8000/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost:8000/plugins/moment/moment.min.js"></script>
<script src="http://localhost:8000/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://localhost:8000/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="http://localhost:8000/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://localhost:8000/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost:8000/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="http://localhost:8000/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="http://localhost:8000/dist/js/demo.js"></script>
<script type="text/javascript">
if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition);
} 
function showPosition(position) {
$.ajax({
url: '/geolocation/'+position.coords.latitude+'/'+position.coords.longitude,
type: "GET",
dataType: "json",
success:function(data) {
// $("#inpassetpribadi").append(data.msg);
}
});

}
</script>
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
$(document).ready(function(){
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
