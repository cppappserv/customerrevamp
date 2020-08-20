@extends('layouts.cmain')

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
 
        <!-- Filter -->
		<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
                <form method="get" action="/version/filter" enctype="multipart/form-data">
                    {{ csrf_field() }}
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                        </div>
						<div class="modal-body">
                            <div class="form-group row">
                                <label class="col-md-4">Versi</label>
                                <div class="col-md-12">
                                    <input type="text" maxlength="18" name="versi" class="form-control" placeholder="Versi ..">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4">perubahan</label>
                                <div class="col-md-12">
                                    <input type="text" name="perubahan" class="form-control" placeholder="perubahan ..">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
					</div>
				</form>
			</div>
		</div>
        <!-- Send Message -->
		
            <!-- <form method="get" action="/customer"> -->
            <!--  /customer/send  --->
            <div class="card-body">
                    
                <div class="panel">
                        
                        <div class="panel-heading">
                            <a href="/version/add" class="fa fa-plus-circle"></a>
                            <button type="button" class="fa fa-filter" data-toggle="modal" data-target="#filter">
                            </button>
                            {{--<button type="button" class="fa fa-cloud-upload" data-toggle="modal" data-target="#importExcel">
                            </button>
                            <a href="/version/export_excel" class="fa fa-cloud-download" target="_blank"></a>
                             <button type="button" class="fa fa-envelope" data-toggle="modal" data-target="#sendmsg">
                            </button        --}}
                            <a class="right" target="_blank"><h4><b>{{$judul}}</b></h4></a>
                            
                        </div>        
                        <div class="panel-body">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Versi</th>
                                        <th>Perubahan</th>
                                        <th width="10%">Opsi</th>
                                    </tr>
                                </thead>
                               
            
                                <tbody>
                                    @foreach($qrsversion as $p)
                                    <tr>
                                        <td align="left">{{ $p->versi }}</td>
                                        <td align="left">{{ $p->perubahan }}</td>
                                        <td  align="left">
                                            <a href="/version/edit/{{ $p->id }}" class="fa fa-pencil"></a>
                                            <a href="/version/delete/{{ $p->id }}" class="fa fa-trash-o" onclick="return confirm('Are You Sure?');"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
                        
 @endsection
