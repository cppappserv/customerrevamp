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
 
		 
		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/images/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
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
		
        <!-- Filter -->
		<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
                <form method="get" action="/images/filter" enctype="multipart/form-data">
                    {{ csrf_field() }}
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                        </div>
						<div class="modal-body">
                            <div class="form-group row">
                                <label class="col-md-4">Material Number</label>
                                <div class="col-md-12">
                                    <input type="text" maxlength="18" name="materialnumber" class="form-control" placeholder="Material Number ..">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4">Description</label>
                                <div class="col-md-12">
                                    <input type="text" name="description" class="form-control" placeholder="description ..">
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
                            <a href="/images/add" class="fa fa-plus-circle"></a>
                            <button type="button" class="fa fa-filter" data-toggle="modal" data-target="#filter">
                            </button>
                            {{--<button type="button" class="fa fa-cloud-upload" data-toggle="modal" data-target="#importExcel">
                            </button>
                            <a href="/images/export_excel" class="fa fa-cloud-download" target="_blank"></a>
                             <button type="button" class="fa fa-envelope" data-toggle="modal" data-target="#sendmsg">
                            </button        --}}
                            <a class="right" target="_blank"><h4><b>{{$judul}}</b></h4></a>
                            
                        </div>        
                        <div class="panel-body">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        {{-- <th width="12%">
                                            <button type="button" class="fa fa-check-square" data-toggle="modal" id='markall'></button>
                                            <button type="button" class="fa fa-check-square-o" data-toggle="modal" id='unmarkall'></button>
                                        </th> --}}
                                        <th>Masterial Code</th>
                                        <th>Description</th>
                                        <th width="10%">Opsi</th>
                                    </tr>
                                </thead>
                               
            
                                <tbody>
                                    @foreach($qrmimage as $p)
                                    <tr>
                                        {{-- <td align="center"><input type="checkbox" name="sele[]" value="{{ $p->id }}" class="mark" id="ID{{ $p->id }}" ></td> --}}
                                        <td align="left">{{ $p->materialnumber }}</td>
                                        <td align="left">{{ $p->description }}</td>
                                        <td  align="left">
                                            <a href="/images/edit/{{ $p->id }}" class="fa fa-pencil"></a>
                                            <a href="/images/delete/{{ $p->id }}" class="fa fa-trash-o" onclick="return confirm('Are You Sure?');"></a>
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
