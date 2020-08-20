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
                    <form method="post" action="/plant/update/{{ $plant->id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputplantkode" class="col-sm-2 col-form-label">Plant Code</label>
                            <div class="col-sm-10">
                                <input type="text" maxlength="4" pattern="[0-9]{4}" class="form-control" 
                                    name="plantkode" id="plantkode" placeholder="Plant Code .." required="required" value="{{$plant->plantkode}}">
                                <input type="hidden" name="changedby" value="{{Auth::user()->name}}">
                                @if($errors->has('plantkode'))
                                    <div class="text-danger">
                                        {{ $errors->first('plantkode')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputplantname" class="col-sm-2 col-form-label">Plant Name</label>
                            <div class="col-sm-10">
                                <input type="text" maxlength="40" class="form-control" 
                                name="plantname" id="plantname" placeholder="Plant Name .." required="required" value="{{$plant->plantname}}">
                                @if($errors->has('plantname'))
                                    <div class="text-danger">
                                        {{ $errors->first('plantname')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputscreenmode" class="col-sm-2 col-form-label">Screen Mode</label>
                            <div class="col-sm-10">
                                <input type="text" maxlength="1" pattern="[0-9]{1}" class="form-control" 
                                name="screenmode" id="screenmode" placeholder="Screen Mode .." required="required" value="{{$plant->screenmode}}">
                                @if($errors->has('screenmode'))
                                    <div class="text-danger">
                                        {{ $errors->first('screenmode')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputcompanycode" class="col-sm-2 col-form-label">Company Code</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="companycode" id="companycode" required="required" value="{{$plant->companycode}}">
                                    @foreach ($company as $item)
                                    @if($plant->companycode == $item->companycode) 
                                    <option value="{{$item->companycode}}" selected>{{$item->companyname}}</option>
                                    @else
                                    <option value="{{$item->companycode}}">{{$item->companyname}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <input type="submit" class="btn btn-success" value="Save">
                            <a href="/company" class="btn btn-primary">Back</a>
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
