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
                    <li class="breadcrumb-item active">{{$jdl}} / Edit Password</li>
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
                    <form method="post" action="/otorisasiweb/resetupdate/{{ $user->id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        

                        <div class="form-group row">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-4">
                            <input type="password" name="password" class="form-control" placeholder="Password .." >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label">Confirm Password</label>
                            <div class="col-sm-4">
                            <input type="password" id="password-confirm" name="password_confirmation" class="form-control" required autocomplete="new-password">
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