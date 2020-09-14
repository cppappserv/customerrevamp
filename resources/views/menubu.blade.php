@extends('layouts.utama')

@section('csscontent')
	<style id="applicationStylesheet" type="text/css">
		#Select_Company {
			left: 50px;
			top: 10px;
			position: relative;
			overflow: visible;
			width: 292px;
			white-space: nowrap;
			text-align: left;
			font-family: Roboto;
			font-style: normal;
			font-weight: normal;
			font-size: 40px;
			color: rgba(84,84,84,1);
		}
		#Rectangle_248_b {
			fill: rgba(51,122,183,1);
		}
		.Rectangle_248_b {
			position: absolute;
			overflow: visible;
			width: 106px;
			height: 13px;
			left: 60px;
			top: 65px;
		}
		#svg_kotak {
			fill: rgba(255,255,255,1);
		}
		.svg_kotak {
			filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
			overflow: visible;
			position: relative;
			width: 632px;
			height: 166.697px;
			left: 0.001px;
			top: 0px;
			transform: matrix(1,0,0,1,0,0);
		}
		#svg_Intersection {
			fill: rgba(51,122,183,1);
		}
		.svg_Intersection {
			overflow: visible;
			position: absolute;
			width: 224.002px;
			height: 148.699px;
			left: 0px;
			top:  0px;
			transform: matrix(1,0,0,1,0,0);
		}
		#text_customer {
			left: 60.001px;
			top: 100px;
			position: absolute;
			overflow: visible;
			width: 161;
			white-space: nowrap;
			text-align: center;
			font-family: Roboto;
			font-style: normal;
			font-weight: normal;
			font-size: 24px;
			color: rgba(255,255,255,1);
			letter-spacing: -0.25px;
		}
		#text_total {
			left: 28.001px;
			top: 20px;
			position: absolute;
			overflow: visible;
			width: 161px;
			white-space: nowrap;
			text-align: center;
			font-family: Roboto;
			font-style: normal;
			font-weight: bold;
			font-size: 64px;
			color: rgba(255,255,255,1);
			letter-spacing: -0.25px;
		}

		#text_company {
			left: 263.001px;
			top: 30px;
			height:166.697px;
			position: absolute;
			overflow: visible;
			width: 270px;
			white-space: nowrap;
			text-align: left;
			font-family: Roboto;
			font-style: normal;
			font-weight: normal;
			font-size: 24px;
			color: rgba(84,84,84,1);
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
<div class="wrapper">

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
        <a href="/home" class="nav-link"  id="Dashboard_bt">Dashboard /</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"  id="Dashboard_bt">{{ $pilcompany }}</a>
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
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"style="
	position: relative;
    margin-left: 0px;
    margin-top: 99px;">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">
	 <div class="container-fluid">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<!-- <h1 class="m-0 text-dark">Select Company</h1> -->
						<div id="Select_Company">
							<span>Select Company</span>
						</div>
						<svg class="Rectangle_248_b">
							<rect id="Rectangle_248_b" rx="0" ry="0" x="0" y="0" width="106" height="13">
							</rect>
						</svg>

						<!-- <svg class="Rectangle_248_b">
						<rect id="Rectangle_248_b" rx="0" ry="0" x="0" y="0" width="106" height="13">
						</rect>
					</svg> -->
					</div><!-- /.col -->
					
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		
		<div class="container-fluid" style="
			margin-top: 20px;
			/* margin-left: 70px; */
			padding-left: 70px;
		">
         
        <!-- Small boxes (Stat box) -->

			<div class="row">
        <?php
        $max=count($percompany);
        for($i=0; $i<$max; $i++){
				$info = $percompany[$i]->info;
				$des = $percompany[$i]->des;
				$des2 = $percompany[$i]->des2;
				$des3 = $percompany[$i]->des3;
				$ttl = number_format($percompany[$i]->ttl);

          switch  ($i){
            case 0  : $warna = "#337ab7"; break;
            case 1  : $warna = "#d63f3f;"; break;
            case 2  : $warna = "#37b733"; break;
            case 3  : $warna = "#f5b443"; break;
            case 4  : $warna = "#9e33b7"; break;
            case 5  : $warna = "#cad620"; break;
            case 6  : $warna = "#2bb9c9"; break;
            case 7  : $warna = "#4d6ab8"; break;
            case 8  : $warna = "#00a76e"; break;
            case 9  : $warna = "#337ab7"; break;
            case 10 : $warna = "#d63f3f"; break;
            case 11 : $warna = "#37b733"; break;
          }
          
            ?>
							<!-- <div class="col-lg-6 col-6"> -->
              <div class="col-md-6 col-sm-6 col-12">
					<a href="/subcompany1/{{$pilcompany}}/{{$info}}">
						<!-- <div class="info-box" id="form02kotak">
							<span class="info-box-icon bg-info text" id="form02kotak2"
							style="background-color: {{$warna}}!important;">
							{{ $ttl }}<br>
							Customer
							</span>
							
							<div class="info-box-content" id="showtext">
								<span id="font24" style="color:black;">
								{{ $des }}<br/>{{ $des2}}<br/>{{ $des3}}
								</span>

							</div>
						</div> -->

						<svg class="svg_kotak" viewBox="0 0 614 148.697">
							<path id="svg_kotak" d="M 20.53511810302734 0 L 593.4649658203125 0 C 604.80615234375 0 715 2.023526906967163 715 4.519673347473145 L 715 144.1775970458984 C 715 146.6737365722656 604.80615234375 148.697265625 593.4649658203125 148.697265625 L 20.53511810302734 148.697265625 C 9.19388484954834 148.697265625 0 146.6737365722656 0 144.1775970458984 L 0 4.519673347473145 C 0 2.023526906967163 9.19388484954834 0 20.53511810302734 0 Z">
							</path>
						</svg>
						<svg class="svg_Intersection" viewBox="11889.999 14082.842 224.002 148.699">
							<path id="svg_Intersection" d="M 11910.5341796875 14231.541015625 C 11901.001953125 14231.541015625 11892.984375 14230.1103515625 11890.6708984375 14228.1728515625 C 11890.455078125 14227.8681640625 11890.2392578125 14227.5615234375 11890.025390625 14227.2548828125 C 11890.0078125 14227.177734375 11889.9990234375 14227.1005859375 11889.9990234375 14227.0224609375 L 11889.9990234375 14087.361328125 C 11889.9990234375 14084.8662109375 11899.1953125 14082.841796875 11910.5341796875 14082.841796875 L 12089.138671875 14082.841796875 C 12104.7421875 14103.4599609375 12114.0009765625 14129.1513671875 12114.0009765625 14157.001953125 C 12114.0009765625 14185.025390625 12104.630859375 14210.8583984375 12088.849609375 14231.541015625 L 11910.5341796875 14231.541015625 Z" style="fill:{{$warna}}">
							</path>
						</svg>
						<div id="text_customer">
							<span>Customer</span>
						</div>
						<div id="text_total">
							<span>{{ $ttl }}</span>
						</div>
						<div id="text_company">
							<span>{{ $des }}<br/>{{ $des2}}<br/>{{ $des3}}</span>
						</div>
					</a>
					<!-- /.info-box -->
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