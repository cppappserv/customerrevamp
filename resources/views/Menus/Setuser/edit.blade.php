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
                    <form method="post" action="/setuser/update/{{ $users->id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputuserid" class="col-sm-2 col-form-label">User ID</label>
                            <div class="col-sm-10">
                                <input type="text" maxlength="30" class="form-control" 
                                    name="usercode" id="usercode" placeholder="User ID .." required="required" value="{{$users->usercode}}">
                                <input type="hidden" name="changedby" value="{{Auth::user()->name}}">
                                @if($errors->has('usercode'))
                                    <div class="text-danger">
                                        {{ $errors->first('usercode')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputplantname" class="col-sm-2 col-form-label">User Name</label>
                            <div class="col-sm-10">
                                <input type="text" maxlength="12" class="form-control" 
                                    name="username" placeholder="User Name .." required="required" value="{{$users->username}}">
                                @if($errors->has('username'))
                                    <div class="text-danger">
                                        {{ $errors->first('username')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputplantkode" class="col-sm-2 col-form-label">Plant</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="plantkode" id="plantkode"  required="required">
                                    @foreach ($plant as $item)
                                        @if($users->plantkode == $item->plantkode) 
                                        <option value="{{$item->plantkode}}" selected>{{$item->plantname}} / Company : {{$item->companycode}}</option>
                                        @else
                                        <option value="{{$item->plantkode}}">{{$item->plantname}} / Company : {{$item->companycode}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputgroup" class="col-sm-2 col-form-label">Group</label>
                            <div class="col-sm-8">
                                <select class="select2 form-control" multiple="multiple" 
                                    name="isadmin[]" id="isadmin" required="required">
                                    <!-- <option value="1" selected="selected">test</option> -->
                                    @foreach ($tblgroup as $item)
                                        <option value="{{$item->fkey2}}" {{$item->flag}}>{{$item->data1}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        

                        <div class="form-group row">
                            <label for="inputactive" class="col-sm-2 col-form-label">Active</label>
                            <div class="col-sm-4">
                                <select class="form-control" name="active" id="active" required="required">
                                    @foreach ($tblactive as $item)
                                        @if($users->isadmin == $item->id) 
                                        <option value="{{$item->fkey2}}" selected>{{$item->data1}}</option>
                                        @else
                                        <option value="{{$item->fkey2}}">{{$item->data1}}</option>
                                        @endif
                                    @endforeach
                                </select>
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

@section('contentcss')
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection


@section('contentjs')
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>    
@endsection