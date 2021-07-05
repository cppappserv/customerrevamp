@extends('layouts.utama')

@section('csscontent')
  
	<style id="applicationStylesheet" type="text/css">
    #ID124_Customers_Found {
      /* left: 60px;
      top: 139.286px; */
      position: relative;
      overflow: visible;
      width: 396px;
      white-space: nowrap;
      text-align: left;
      font-family: Roboto;
      font-style: normal;
      font-weight: normal;
      font-size: 40px;
      color: rgba(84,84,84,1);
    }
    #Rectangle_248 {
      fill: rgba(51,122,183,1);
    }
    .Rectangle_248 {
      /* position: absolute;
      overflow: visible; */
      width: 130px;
      height: 13px;
      left: 80px;
      top: 203px;
    }
    
	</style>
@endsection

@section('content')
  {{-- notifikasi form validasi --}}
  @if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
  @endif
 
		{{-- notifikasi sukses --}}
  @if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
  @endif
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light atas"
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
   
   <ul class="navbar-nav">
   
      <li class="nav-item d-none d-sm-inline-block" id="garis_tipis" >
         <a href="/home" class="nav-link" id="Dashboard_bt">Dashboard /</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" >
         <a href="/company1/{{$pil_company}}" class="nav-link atas" id="Dashboard_bt">{{$pilcompany}}</a>
      </li>
      
    </ul>
    @include('layouts.logo')
    <svg class="Rectangle_241_bv">
      <rect id="Rectangle_241_bv" rx="0" ry="0" x="0" y="0" width="125" height="6">
      </rect>
    </svg>
</nav>
<!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <div class="wrapper awal" style="position: relative;
    margin-left: 0px;
    ">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="
    margin-left: 0px;">
    

    <!-- Main content -->
    <section class="content" style="position: relative;top: 25px;"> 
      

      <div class="modal fade" id="modal-primary">
        <div class="modal-dialog" sytel="border-radius: 50px;">
          <div class="modal-content bg-outline-light" style="    border-radius: 75px;">
            <form action="{{route('applicant_delete')}}" method="POST" class="remove-record-model">
              {{ method_field('delete') }}
              {{ csrf_field() }}
              <div class="modal-header">
                <h4 class="modal-title"></h4>
                <input type="hidden", name="applicant_id" id="app_id">
                <input type="hidden", name="para1" id="para1" value="{{$pilcompany}}">
                <input type="hidden", name="para2" id="para2" value="{{$pilcompany2}}">
              </div>
              <div class="modal-body">
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width:49%; width: 49%;
                  height: 60px;
                  border-radius: 30px;background: rgba(15,199,89,1);">Cancel</button>
                            <button type="submit" class="btn btn-danger delete_ya" style="width:49%; width: 49%;
                  height: 60px;
                  border-radius: 30px; ">Delete</button>
              </div>
              <div class="modal-footer justify-content-between">
              <h4 class="modal-title"></h4>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->



      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header" id="ID124_Customers_Found">
              <?php
                $max=count($listdata);
              ?>
              <span>{{$max}} Customers Found</span>
            </div>
            <svg class="Rectangle_248" style="padding-left: 20px;">
              <rect id="Rectangle_248" rx="0" ry="0" x="0" y="0" width="106" height="13">
              </rect>
            </svg>
            <!-- /.card-header -->
            
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Customer ID</th>
                  <th>Customer Name</th>
                  <th>Company Code</th>
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
                     $uid           = $listdata[$i]->uid;
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
                     <td id="tdpos"><a href="/detail1/{{$pilcompany}}/{{$pilcompany2}}/{{$uid}}/1">{{$customer_id}}<a></td>
                     <td id="tdpos">{{$customer_name}}</td>
                     <td id="tdpos">{{$bu}}</td>
                     <td id="tdpos">{{$created_by}}</td>
                     <td id="tdpos">{{$created_dt}}<br/>{{$created_time}}</td>
                     <td id="tdpos">{{$changed_by}}</td>
                     <td id="tdpos">{{$changed_dt}}<br/>{{$changed_time}}</td>
                     <td id="tdpos">

                        <div>
                          @if($akses_delete == 'Y')
                            <button type="button" class="btn btn-default btn-sm deleteUser" data-userid="{{$uid}}"
                            data-toggle="modal" data-target="#modal-primary" style="border: none;">
                            <img src="{{asset('image/delete.png')}}"> 
                            </button>
                          @endif
                        </div>
                     </td>
                  </tr>
                     <?php
                  }
                  ?>
                </tbody>
                
              </table>
              
              <!-- <a href="/detail1/{{$pilcompany}}/{{$pilcompany2}}/0/1" id="Group_680">
                  <svg class="Rectangle_292">
                     <rect id="Rectangle_292" rx="0" ry="0" x="0" y="0" width="67" height="74">
                     </rect>
                  </svg>
                  <svg class="add" viewBox="0 0 107 107">
                     <path id="add" d="M 53.5 0 C 23.99892997741699 0 0 23.99892997741699 0 53.5 C 0 83.00106811523438 23.99892997741699 107 53.5 107 C 83.00106811523438 107 107 83.00106811523438 107 53.5 C 107 23.99892997741699 83.00106811523438 0 53.5 0 Z M 76.90625 57.95805358886719 L 57.95805358886719 57.95805358886719 L 57.95805358886719 76.90625 C 57.95805358886719 79.36752319335938 55.96127319335938 81.36430358886719 53.5 81.36430358886719 C 51.03872680664063 81.36430358886719 49.04194641113281 79.36752319335938 49.04194641113281 76.90625 L 49.04194641113281 57.95805358886719 L 30.09375 57.95805358886719 C 27.63247871398926 57.95805358886719 25.63569450378418 55.96127319335938 25.63569450378418 53.5 C 25.63569450378418 51.03872680664063 27.63247489929199 49.04194641113281 30.09375 49.04194641113281 L 49.04194641113281 49.04194641113281 L 49.04194641113281 30.09375 C 49.04194641113281 27.63247871398926 51.03872680664063 25.63569450378418 53.5 25.63569450378418 C 55.96127319335938 25.63569450378418 57.95805358886719 27.63247489929199 57.95805358886719 30.09375 L 57.95805358886719 49.04194641113281 L 76.90625 49.04194641113281 C 79.36752319335938 49.04194641113281 81.36430358886719 51.03872680664063 81.36430358886719 53.5 C 81.36430358886719 55.96127319335938 79.36752319335938 57.95805358886719 76.90625 57.95805358886719 Z M 76.90625 57.95805358886719">
                     </path>
                  </svg>
               </a> -->
                      <a href="/detail1/{{$pilcompany}}/{{$pilcompany2}}/0/1">
                    <img src="{{asset('image/add customer.png')}}" style="top: 85%;
                      left: 80%;
                      position: fixed">
                  </a>
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
@endsection

@section('jscontent')

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

<script>
$(document).on('click','.deleteUser',function(){
    var userID=$(this).attr('data-userid');
    $('#app_id').val(userID); 
    // $('#applicantDeleteModal').modal('show'); 
});
</script>
@endsection
