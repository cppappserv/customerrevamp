@extends('layouts.cmain1')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                {{-- <h1>General Form</h1> --}}
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">{{$jdl}} / Edit</li>
                </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">  
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="/otorisasiweb/update/{{ $user->id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputcompanycode" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" maxlength="12" class="form-control" name="name" id="name" placeholder="Name .." required="required" value="{{$user->name}}">
                                <input type="hidden" name="changedby" value="{{Auth::user()->name}}">
                                @if($errors->has('name'))
                                    <div class="text-danger">
                                        {{ $errors->first('name')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label">E-Mail Address</label>
                            <div class="col-sm-4">
                            <input type="email" name="email" class="form-control" placeholder="Email .." value="{{$user->email}}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- 'plantkode', 'plantname', 'screenmode', 'companycode', 'changedby' --}}
                        {{-- 'name', 'email', 'password', 'plant','groupadmin' --}}
                        <div class="form-group row">
                            <label for="inputcompanycode" class="col-sm-2 col-form-label">Plant</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="plant" id="plant" required="required">
                                    @foreach ($rcvrmplant as $item)
                                    @if($user->plant == $item->plantcode) 
                                    <option value="{{$item->plantkode}}" selected>{{$item->plantname}}</option>
                                    @else
                                    <option value="{{$item->plantkode}}">{{$item->plantname}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label">Groupadmin</label>
                            <div class="col-sm-4">
                            <input type="number" min="1" max="98" name="groupadmin" class="form-control" placeholder="Groupadmin .." value="{{$user->groupadmin}}">
                                @error('groupadmin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <input type="submit" class="btn btn-success" value="Save">
                            <a href="/otorisasiweb" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </form>
                </div>
                <!-- /.card -->

                </div>
                <!--/.col (left) -->
                
            </div>
            <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

        
@endsection
