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
  <style id="applicationStylesheet" type="text/css">
   .atas{
      position: fixed;
      width: 100%;
      height: 70px;
      background: rgba(43,185,201,1);
   }
   #fon_24_wh{
      color: white;
      font-size:24px;
   }
   .awal{
      top:75px;
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

    #Ellipse_57_lo {
		fill: rgba(230,74,25,1);
   }
   
	.Ellipse_57_lo {
		/* position: absolute;
		overflow: visible; */
		width: 45px;
		height: 45px;
		left: 0px;
		top: 0px;
   }
   #delete_lp {
      position: absolute;
      overflow: visible;
		width: 21.808px;
		height: 26.841px;
		left: 11.439px;
		top: 8.65px;
		
   }
   #Path_191_lq {
		fill: rgba(255,255,255,1);
	}
	.Path_191_lq {
		overflow: visible;
		position: absolute;
		width: 21.809px;
		height: 26.841px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
   }
   #Path_192_lr {
		fill: rgba(255,255,255,1);
	}
	.Path_192_lr {
		overflow: visible;
		position: absolute;
		width: 1.678px;
		height: 12.582px;
		left: 10.065px;
		top: 10.904px;
		transform: matrix(1,0,0,1,0,0);
   }
   #Path_193_ls {
		fill: rgba(255,255,255,1);
	}
	.Path_193_ls {
		overflow: visible;
		position: absolute;
		width: 1.678px;
		height: 12.582px;
		left: 14.259px;
		top: 10.904px;
		transform: matrix(1,0,0,1,0,0);
   }
   #Path_194_lt {
		fill: rgba(255,255,255,1);
	}
	.Path_194_lt {
		overflow: visible;
		position: absolute;
		width: 1.678px;
		height: 12.582px;
		left: 5.871px;
		top: 10.904px;
		transform: matrix(1,0,0,1,0,0);
   }
   th {
      background: rgba(60,141,188,1);
      color:white;
   }
   

   #Group_680 {
		position: fixed;
		width: 107px;
		height: 107px;
		left: 1197px;
		top: 619px;
		overflow: visible;
		cursor: pointer;
		--web-animation: fadein 0.3s ease-out;
		--web-action-type: page;
		--web-action-target: 0401_Add_customer_PopUp.html;
   }
   #Rectangle_292 {
		fill: rgba(255,255,255,1);
	}
	.Rectangle_292 {
		position: absolute;
		overflow: visible;
		width: 67px;
		height: 74px;
		left: 21px;
		top: 17px;
	}
	#add {
		fill: rgba(51,122,183,1);
	}
	.add {
		overflow: visible;
		position: absolute;
		width: 107px;
		height: 107px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
  tr{
    height: 70px;
    padding-top:100px;
    padding-bottom:100px;

  }
  td{
    background:#fff;
    height: 70px;
  }
  #tdpos{
    border-top:0px;
    border-bottom:0px;
    border:none;
    vertical-align: middle;
    font-size: 21px;
    color: rgba(84,84,84,1);
  }
  #color21{
    font-size: 21px;
    color: rgba(84,84,84,1);
  }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<?php 
$total = 134;
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light atas">
   <!-- Left navbar links -->
   <td>
   <ul class="navbar-nav">
   
      <li class="nav-item d-none d-sm-inline-block" id="garis_tipis" >
         <a href="/dashboar1" class="nav-link" id="fon_24_wh">Dashboard/</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" >
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
    </td>
</nav>
<!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <div class="wrapper awal" >

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$total}} Customers Found</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div>
    </section> -->

    <!-- Main content -->
    <section class="content">
      

      <div class="modal fade" id="modal-primary">
        <div class="modal-dialog" sytel="border-radius: 50px;">
          <div class="modal-content bg-outline-light" style="    border-radius: 75px;">
            <div class="modal-header">
              <h4 class="modal-title"></h4>
              
            </div>
            <div class="modal-body">
              <button type="button" class="btn btn-primary" data-dismiss="modal" style="width:49%; width: 49%;
    height: 60px;
    border-radius: 30px;background: rgba(15,199,89,1);">Cancel</button>
              <button type="button" class="btn btn-danger" style="width:49%; width: 49%;
    height: 60px;
    border-radius: 30px; ">Delete</button>
            </div>
            <div class="modal-footer justify-content-between">
            <h4 class="modal-title"></h4>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <?php
                  $max=count($listdata);
                  ?>
            <h1>{{$max}} Customers Found</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Customer ID</th>
                  <th>Customer Name</th>
                  <th>Business Name</th>
                  <th>Created By</th>
                  <th>Created Date</th>
                  <th>Last Update By</th>
                  <th>Last Update Date</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                  for($i=0; $i<$max; $i++){
                     $customer_id   = $listdata[$i]->customer_id;
                     $customer_name = $listdata[$i]->customer_name;
                     $bu            = $listdata[$i]->bu;
                     $created_by    = $listdata[$i]->created_by;
                     $created_dt    = $listdata[$i]->created_dt;
                     $created_time  = $listdata[$i]->created_time;
                     $changed_by    = $listdata[$i]->changed_by;
                     $changed_dt    = $listdata[$i]->changed_dt;
                     $changed_time  = $listdata[$i]->changed_time;
                     ?>
                  <tr>
                     <td id="tdpos"><a href="/detail1/{{$pilcompany}}/{{$customer_id}}">{{$customer_id}}<a></td>
                     <td id="tdpos">{{$customer_name}}</td>
                     <td id="tdpos">{{$bu}}</td>
                     <td id="tdpos">{{$created_by}}</td>
                     <td id="tdpos">{{$created_dt}}<br/>{{$created_time}}</td>
                     <td id="tdpos">{{$changed_by}}</td>
                     <td id="tdpos">{{$changed_dt}}<br/>{{$changed_time}}</td>
                     <td id="tdpos">

                        <div>





                        <!-- <a href="/detaildelete/{{$customer_id}}"> -->
                        <button type="button" class="btn btn-default btn-sm" style="
                            border-radius: 50%;
                            height: 75px;
                            width: 75px;
                            font-size: -webkit-xxx-large;
                            background: red;
                            color: white;
                        " data-toggle="modal" data-target="#modal-primary"><i class="far fa-trash-alt"></i>
                        </button>
                           
                        <!-- </a> -->
                        </div>
                     </td>
                  </tr>
                     <?php
                  }
                  ?>
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
              <div onclick="application.showOverlay(event,'ID0401_Add_customer_PopUp',0,0)" id="Group_680">
                  <svg class="Rectangle_292">
                     <rect id="Rectangle_292" rx="0" ry="0" x="0" y="0" width="67" height="74">
                     </rect>
                  </svg>
                  <svg class="add" viewBox="0 0 107 107">
                     <path id="add" d="M 53.5 0 C 23.99892997741699 0 0 23.99892997741699 0 53.5 C 0 83.00106811523438 23.99892997741699 107 53.5 107 C 83.00106811523438 107 107 83.00106811523438 107 53.5 C 107 23.99892997741699 83.00106811523438 0 53.5 0 Z M 76.90625 57.95805358886719 L 57.95805358886719 57.95805358886719 L 57.95805358886719 76.90625 C 57.95805358886719 79.36752319335938 55.96127319335938 81.36430358886719 53.5 81.36430358886719 C 51.03872680664063 81.36430358886719 49.04194641113281 79.36752319335938 49.04194641113281 76.90625 L 49.04194641113281 57.95805358886719 L 30.09375 57.95805358886719 C 27.63247871398926 57.95805358886719 25.63569450378418 55.96127319335938 25.63569450378418 53.5 C 25.63569450378418 51.03872680664063 27.63247489929199 49.04194641113281 30.09375 49.04194641113281 L 49.04194641113281 49.04194641113281 L 49.04194641113281 30.09375 C 49.04194641113281 27.63247871398926 51.03872680664063 25.63569450378418 53.5 25.63569450378418 C 55.96127319335938 25.63569450378418 57.95805358886719 27.63247489929199 57.95805358886719 30.09375 L 57.95805358886719 49.04194641113281 L 76.90625 49.04194641113281 C 79.36752319335938 49.04194641113281 81.36430358886719 51.03872680664063 81.36430358886719 53.5 C 81.36430358886719 55.96127319335938 79.36752319335938 57.95805358886719 76.90625 57.95805358886719 Z M 76.90625 57.95805358886719">
                     </path>
                  </svg>
               </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          
          <!-- /.card -->
        </div>
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
  $(function () {
   $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": false,
    });
    
  });
</script>
</body>
</html>
