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
                    <form method="post" action="/setuser/updatepass/{{ $users->id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputplantname" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="changedby" value="{{Auth::user()->name}}">
                                <input type="password" maxlength="12" class="form-control" 
                                name="password" id="password" placeholder="Password .." required="required" autocomplete="new-password">
                                @if($errors->has('password'))
                                    <div class="text-danger">
                                        {{ $errors->first('password')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputplantname" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" maxlength="12" class="form-control" 
                                name="password_confirmation" id="password-confirm" placeholder="Password .." required="required" autocomplete="new-password">
                            </div>
                        </div>


                        
                        <div class="form-group row">
                            <input type="submit" class="btn btn-success" value="Save">
                            <a href="/setuser" class="btn btn-primary">Back</a>
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
