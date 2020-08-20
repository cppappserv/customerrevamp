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
                <a class="btn btn-primary btn-sm" href="/otorisasiweb/add">
                                <i class="fa fa-plus-circle">
                                </i>
                                {{-- Add --}}
                            </a>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#filter">
                                <i class="fa fa-filter">
                                </i>
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
                            <a class="btn btn-primary btn-sm" href="/otorisasiweb/add">
                                <i class="fa fa-plus-circle">
                                </i>
                                {{-- Add --}}
                            </a>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#filter">
                                <i class="fa fa-filter">
                                </i>
                            </button>
                            
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email </th>
                                    <th>Group Admin</th>
                                    <th>Plant </th>
                                    <th width="10%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $p)
                                <tr>
                                    {{-- <td align="center"><input type="checkbox" name="sele[]" value="{{ $p->id }}" class="mark" id="ID{{ $p->id }}" ></td> --}}
                                    <td align="left">{{ $p->name }}</td>
                                    <td align="left">{{ $p->email }}</td>
                                    <td align="left">{{ $p->groupadmin }}</td>
                                    <td align="left">{{ $p->plant }}</td>
                                    <td  align="left">
                                        <a href="/otorisasiweb/edit/{{ $p->id }}" class="fas fa-pencil-alt"></a>
                                        <a href="/otorisasiweb/delete/{{ $p->id }}" class="fas fa-trash" onclick="return confirm('Are You Sure?');"></a>
                                        <a href="/otorisasiweb/reset/{{ $p->id }}" class="fas fa-key"></a>
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
				<form method="get" action="/otorisasiweb/filter" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Filter</h5>
						</div>
						<div class="modal-body">
                            {{ csrf_field() }}
                            
                            <div class="form-group row">
                                <label for="inputcompanycode" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" maxlength="12" class="form-control" name="name" id="name" placeholder="Name .." >
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label class="col-sm-3 control-label">E-Mail Address</label>
                                <div class="col-sm-8">
                                <input type="email" name="email" class="form-control" placeholder="Email .." >
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

