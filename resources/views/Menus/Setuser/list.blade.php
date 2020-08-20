@extends('layouts.cmain1')

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
        
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <a href="/setuser/add" class="fa fa-plus-circle"></a>
                        <button type="button" class="fa fa-filter" data-toggle="modal" data-target="#filter">
                        </button>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">{{$jdl}}</li>
                </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
                <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Import Excel -->
              
                    <div class="card">
                        <!-- <div class="card-header">
                        <a href="/setuser/add" class="fa fa-plus-circle"></a>
                        <button type="button" class="fa fa-filter" data-toggle="modal" data-target="#filter">
                        </button>
                            
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th>User Code</th>
                                <th>User Name</th>
                                <th>Admin</th>
                                <th>Active</th>
                                <th>Plant</th>
                                <th>Company</th>
                                <th width="10%">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $p)
                            <tr>
                                <td align="left">{{ $p->usercode }}</td>
                                <td align="left">{{ $p->username }}</td>
                                <td align="left">{{ $p->kisadmin }}</td>
                                <td align="left">{{ $p->active }}</td>

                                <td align="left">{{ $p->plantkode }}</td>
                                <td align="left">{{ $p->companycode }}</td>
                                <td  align="left">
                                    <a href="/setuser/edit/{{ $p->id }}" class="fas fa-pencil-alt"></a>
                                    <a href="/setuser/delete/{{ $p->id }}" class="fas fa-trash" onclick="return confirm('Are You Sure?');"></a>
                                    <a href="/setuser/reset/{{ $p->id }}" class="fas fa-key"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        <!-- /.row -->
    </div>
    

        <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
            <form method="get" action="/setuser/filter" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Filter</h5>
						</div>
						<div class="modal-body">
                            {{ csrf_field() }}
                            
                             <div class="form-group row">
                                <label for="inputplantkode" class="col-sm-3 col-form-label">Plant Code</label>
                                <div class="col-sm-8">
                                    <input type="text" maxlength="4" pattern="[0-9]{4}" class="form-control" 
                                        name="plantkode" id="plantkode" placeholder="Plant Code .." >
                                    <input type="hidden" name="changedby" value="{{Auth::user()->name}}">
                                    @if($errors->has('plantkode'))
                                        <div class="text-danger">
                                            {{ $errors->first('plantkode')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputplantname" class="col-sm-3 col-form-label">Plant Name</label>
                                <div class="col-sm-8">
                                    <input type="text" maxlength="40" class="form-control" 
                                    name="plantname" id="plantname" placeholder="Plant Name .." >
                                    @if($errors->has('plantname'))
                                        <div class="text-danger">
                                            {{ $errors->first('plantname')}}
                                        </div>
                                    @endif
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
          <!-- /.modal -->
        </section>

    </div>
                
 @endsection
