@extends('layouts.utama')
@section('csscontent')
  <style id="applicationStylesheet" type="text/css">
    .col-lg-2 {
      -ms-flex: 0 0 16.666667%;
      flex: 0 0 18.666667%;
      max-width: 18.666667%;
    }
/* #Group_716 {
      position: absolute;
      width: 236.001px;
      height: 276.253px;
      overflow: visible;
      --web-animation: fadein undefineds undefined;
      --web-action-type: page;
      cursor: pointer;
    } */
    #Path_130 {
      fill: rgba(255,255,255,1);
    }
    .Path_130 {
      filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
      overflow: visible;
      position: absolute;
      width: 254px;
      height: 293.411px;
      left: 0px;
      top: 0.842px;
      transform: matrix(1,0,0,1,0,0);
    }
    #Intersection_2 {
      fill: rgba(51,122,183,1);
    }
    .Intersection_2 {
      overflow: visible;
      position: absolute;
      width: 236.001px;
      height: 138.001px;
      left: 0px;
      top: 0px;
      transform: matrix(1,0,0,1,0,0);
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
        <!-- <a href="/home" class="nav-link"  style="color: white;font-size: 28px;">Dashboard</a> -->
        <a href="/home" class="nav-link"  id="Dashboard_bt">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="/setting1" class="nav-link"  style="color: white;font-size: 28px;">Setting</a> -->
        <a href="/setting1" class="nav-link"  id="Dashboard_bt">Setting</a>
      </li>
    </ul>
    @include('layouts.logo')
    <svg class="Rectangle_241_bv">
      <rect id="Rectangle_241_bv" rx="10" ry="10" x="0" y="0" width="125" height="19">
      </rect>
    </svg>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"style="
    margin-left: 0px;
    margin-top: 99px;">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    
    
    <section class="content">
      <div class="container-fluid">
        <input type="hidden" id="Latitude" name="Latitude">
        <input type="hidden" id="Longitude" name="Longitude">
        <div class="row">
          <div id="Group_399_bk" style="
            padding-top: 20px;
            font-size: 36px;
            color: rgba(88,88,88,1);
            height: 100px;
            margin-left: 5%;">
            <div id="Welcome_Aditya_Yudha_bl">
              <span>Welcome,</span>
              <span style="font-style:normal;font-weight:normal;color:rgba(56,154,198,1);">{{$user->fullname}}!</span>
            </div>
          </div>
        </div>
      </div>
      
 
        <!-- Small boxes (Stat box) -->
        
        <div class="row" style="margin-left: 5%;margin-right: 5%;">
        
        <?php
        $max=count($perbu);
        for($i=0; $i<$max; $i++){
          $des = $perbu[$i]->des;
          // $ttl = $percompany[$i]->ttl;
          $ttl = number_format($perbu[$i]->ttl);
          $id = $perbu[$i]->des;
          
          switch  ($i){
            case 0  : $warna = "rgba(51,122,183,1)"; break;
            case 1  : $warna = "rgba(214,63,63,1);"; break;
            case 2  : $warna = "rgba(55,183,51,1)"; break;
            case 3  : $warna = "rgba(245,180,67,1)"; break;
            case 4  : $warna = "rgba(158,51,183,1)"; break;
            case 5  : $warna = "rgba(202,214,32,1)"; break;
            case 6  : $warna = "rgba(43,185,201,1)"; break;
            case 7  : $warna = "rgba(77,106,184,1)"; break;
            case 8  : $warna = "rgba(0,167,110,1)"; break;
            case 9  : $warna = "rgba(51,122,183,1)"; break;
            case 10 : $warna = "rgba(214,63,63,1)"; break;
            case 11 : $warna = "rgba(55,183,51,1)"; break;
          }
          $tulis1=35;
          if (strlen($des) <= 4){
            $tulis1 = 80;
          } else if (strlen($des) <= 6){
            $tulis1 = 75;
          } else if (strlen($des) <= 8){
            $tulis1 = 50;
          } else if (strlen($des) <= 10){
            $tulis1 = 40;
          }
          $tulis2=50;
          if(strlen($ttl) == 1){
            $tulis2 = 110;
          } else if (strlen($ttl) == 2){
            $tulis2 = 100;
          } else if (strlen($ttl) < 4){
            $tulis2 = 75;
          }

          ?>
          <div class="col-lg-2 col-6">
          @if($perbu[$i]->akses === 'Y')
            <a href="/company1/{{$des}}">
          @else
            <a href="#">
          @endif
              <svg width="100%" height="100%"viewBox="0 0 236 275.411">
                  <path id="Path_130" style="fill:white;" d="M 7.892985820770264 0 L 228.1072998046875 0 C 232.4664764404297 0 236.0002746582031 3.747895956039429 236.0002746582031 8.371158599853516 L 236.0002746582031 267.0399780273438 C 236.0002746582031 271.6632385253906 232.4664764404297 275.4111328125 228.1072998046875 275.4111328125 L 7.892985820770264 275.4111328125 C 3.533810138702393 275.4111328125 0 271.6632385253906 0 267.0399780273438 L 0 8.371158599853516 C 0 3.747895956039429 3.533810138702393 0 7.892985820770264 0 Z">
                  </path>
                  <path id="Intersection_2" style="fill:{{$warna}};" style="fill:rgb(0,0,255);" d="M 0 91.22920989990234 L 0 9.999899864196777 C 0 4.477499961853027 4.477499961853027 0 9.999899864196777 0 L 225.9999084472656 0 C 231.5232086181641 0 236.0007019042969 4.477499961853027 236.0007019042969 9.999899864196777 L 236.0007019042969 92.15694427490234 C 205.0950775146484 120.6171264648438 163.8258819580078 138.0006103515625 118.5003051757813 138.0006103515625 C 72.68302154541016 138.0006103515625 31.01273345947266 120.2398910522461 0 91.22920989990234 Z">
                  </path>
                  <text fill=rgba(255,255,255,1) font-size="32"
                    x="{{$tulis1}}" y="70" align-text="center">{{ $des }}</text>
                    <text fill="rgba(84,84,84,1)" font-size="64"
                    x="{{$tulis2}}" y="210">{{ $ttl }}</text>
                    <text fill="rgba(84,84,84,1)" font-size="24" 
                    x="75" y="250">Customer</text>
                </svg>
              </a>
          </div>
          <?php


          
        }
    ?>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
 
</div>
<!-- ./wrapper -->
@endsection        