<?php 
   $c1 = '';
   $c2 = '';
   if ($user->usergroup != '1'){
      $c1 = 'readonly';
      $c2 = 'disabled';
   };
?>
@extends('layouts.utama')
@section('csscontent')
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
    @include('layouts.logo')
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
                  {{ csrf_field() }}
                  <div class="card-body" id="inpinformasi">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group row">
                              <label for="inputuserid" class="col-sm-3 col-form-label">User ID</label>
                              <div class="col-sm-9">
                                 <!-- <input type="text" class="form-control" id="inputkelurahanusaha" placeholder="Kelurahan"> -->
                                 <div class="input-group">
                                    <input type="text" class="form-control @error('inputuserid') is-invalid @enderror"  required autocomplete="inputuserid" autofocus id="inputuserid" name="inputuserid" onchange="cekinputan()"  {{$c1}}>
                                    <input type="hidden" id="inputbaris" name="inputbaris" value="0">
                                    <input type="hidden" id="inputuid" name="inputuid" value="0">
                                    <input type="hidden" id="inputbaru" name="inputbaru" value="0">
                                    <input type="hidden" id="oldcompany" name="oldcompany">
                                    
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
                                    <select class="form-control @error('inputusertype') is-invalid @enderror"  required autocomplete="inputusertype" autofocus id="inputusertype" name="inputusertype" onblur="cekinputan()" {{$c2}}> 
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
                              <label for="inputuserarea" class="col-sm-3 col-form-label">Bisnis Unit</label>
                              <div class="col-sm-9">
                                 <div class="input-group">
                                    <!-- <select class="form-control @error('inputuserarea') is-invalid @enderror"  required autocomplete="inputuserarea" autofocus id="inputuserarea" name="inputuserarea" onblur="cekinputan()">  -->
                                    <select class="form-control" id="inputuserarea" name="inputuserarea" onblur="cekinputan()" {{$c2}}> 
                                    <option value="" selected>--- Select BU ---</option>
                                    <?php
                                    foreach ($tblobject as $key => $value) {
                                    ?>
                                       <option value="{{$value->objname}}">{{$value->desc}}</option>
                                    <?php
                                    }
                                    ?>
                                    </select>
                                    <!-- @error('inputuserarea')
                                       <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                       </span>
                                    @enderror -->
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
                                    <input type="password" class="form-control @error('inputuserpass') is-invalid @enderror"  required autocomplete="inputuserpass" autofocus id="inputuserpass" name="inputuserpass" placeholder="password" onblur="cekinputan()" {{$c1}}>
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
                                    <input type="password" class="form-control @error('inputuserrepass') is-invalid @enderror"  required autocomplete="inputuserrepass" autofocus id="inputuserrepass" name="inputuserrepass" placeholder="password" onblur="cekinputan()" {{$c1}}> 

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
                              <label for="inputusercompany" class="col-sm-3 col-form-label">Ouc</label>
                              <div class="col-sm-9">
                                 <div class="input-group">
                                    <select class="form-control @error('inputusercompany') is-invalid @enderror"  required autocomplete="inputusercompany" autofocus id="inputusercompany" name="inputusercompany" onblur="cekinputan()" {{$c2}}> 
                                       <option value="">--- Select OUC ---</option>
                                      
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
                           <input type="hidden" id="inputusergroup_{{$i}}" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" readonly=""
                           value="{{$value3->usergroup}}"> 
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
                        <div class="input-group col-sm-8">                    
                           <input type="password" id="inputuserpass_{{$i}}" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control"  readonly=""
                              value="({{md5($value3->password)}}"> 
                           <input type="hidden" id="inputcompany_{{$i}}" isform="true" format="required:n;type:text"  onblur="formValidation(this)" class="form-control" 
                              value="{{$value3->company}}"> 
                        </div>
                           <!-- <div class="input-group col-sm-1">
                              <button type="button" 
                                 title="Show Password"
                                 onclick="myFunction({{$i}})"> 
                                 <span class="fa fa-eye"></span>
                              </button> 
                           </div> -->
                           <div class="input-group col-sm-4">
                              
                              <button type="button" 
                                 title="Edit"
                                 onclick="myedit({{$i}}, {{$user->usergroup}});myedit2({{$i}}, {{$user->usergroup}})">          <!--  this is the title -->
                                 <i class="far fa-edit"></i> <!--  this is the icon  -->
                              </button> 
                              @if($user->usergroup=='1')
                                 <button type="button" class="btn btn-default btn-sm deleteUser" data-userid="{{$i}}"
                                    data-toggle="modal" data-target="#modal-primary" style="border: none;">
                                    <img src="{{asset('image/delete.png')}}"> 
                                 </button>
                              @endif
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
@endsection

@section('jscontent')
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

   function myedit(isi, flag) 
	{
      var tx1 = 'inputuid_'+isi;
      var tx2 = 'inputuserid_'+isi;
      var tx3 = 'inputusergroup_'+isi;
      var tx4 = 'inputuserarea_'+isi;
      var tx5 = 'inputuserpass_'+isi;
      var tx6 = 'inputcompany_'+isi;
      document.getElementById('inputbaru').value = '1';
      document.getElementById('inputbaris').value = isi;
      document.getElementById('inputuid').value = document.getElementById(tx1).value;
      document.getElementById('inputuserid').value = document.getElementById(tx2).value;
      document.getElementById('inputusertype').value = document.getElementById(tx3).value;
      document.getElementById('inputuserarea').value = document.getElementById(tx4).value;
      document.getElementById('inputuserpass').value = document.getElementById(tx5).value;
      document.getElementById('inputuserrepass').value = document.getElementById(tx5).value;
      $('select[name=inputuserarea]').change();
      document.getElementById('inputusercompany').value = document.getElementById(tx6).value;

      
      
      if (flag == '1'){
         var x = document.getElementById("save");
         if (x.style.display == "none") {
            x.style.display = "block";
         }
      } else {
         // document.getElementById('inputuid').disabled = document.getElementById(tx1).value;
         // document.getElementById('inputuserid').value = document.getElementById(tx2).value;
         // document.getElementById('inputusertype').value = document.getElementById(tx3).value;
         // document.getElementById('inputuserarea').value = document.getElementById(tx4).value;
         // document.getElementById('inputuserpass').value = document.getElementById(tx5).value;
         // document.getElementById('inputuserrepass').value = document.getElementById(tx5).value;
         // document.getElementById('inputusercompany').value = document.getElementById(tx6).value;
      }
      
   }

   function myedit2(isi, flag) 
	{
      // var tx6 = 'inputcompany_'+isi;
      // document.getElementById('inputusercompany').value = document.getElementById(tx6).value;
   }

   function xmyedit(isi, flag) 
	{
      var tx1 = 'inputuid_'+isi;
      if (flag == '1'){
         var x = document.getElementById("save");
         if (x.style.display == "none") {
            x.style.display = "block";
         }
      }
      var uid = document.getElementById(tx1).value;
      $.ajax({
         url: '/getmsg3/'+uid+'/'+isi+'/'+flag,
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
         var baru = document.getElementById('inputbaru').value;
         // var old = document.getElementById('oldcompany').value;
         // alert(old);

         var stateID = $(this).val();
         if(stateID) {
            $.ajax({
               url: '/getmsg5/'+stateID,
               type: "GET",
               dataType: "json",
               success:function(data) {
                  if(data){
                     $("#inputusercompany").empty();
                     $("#inputusercompany").append('<option>--- Select OUC ---</option>');
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

      <input type="hidden" id="inputbaris" name="inputbaris" value="'.$id2.'">

      if(inputuserid.value == "" || inputusertype.value == "" || inputuserarea.value == "" || inputuserpass.value == "" || inputuserrepass.value == "" || inputusercompany.value == ""){
         x.style.display = "none";
      } else {
         x.style.display = "block";
      }
   }
</script>
@endsection






