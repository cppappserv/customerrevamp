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
                    <li class="breadcrumb-item active">{{$jdl}} / Add</li>
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
                    <form method="post" action="/company/save" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputcompanycode" class="col-sm-2 col-form-label">Company Code</label>
                            <div class="col-sm-10">
                                <input type="text" maxlength="4" class="form-control" name="companycode" id="companycode" placeholder="Company Code .." required="required">
                                <input type="hidden" name="changedby" value="{{Auth::user()->name}}">
                                @if($errors->has('companycode'))
                                    <div class="text-danger">
                                        {{ $errors->first('companycode')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputcompanyname" class="col-sm-2 col-form-label">Company Name</label>
                            <div class="col-sm-10">
                                <input type="text" maxlength="40" class="form-control" name="companyname" id="companyname" placeholder="Company Name .." required="required">
                                @if($errors->has('companyname'))
                                    <div class="text-danger">
                                        {{ $errors->first('companyname')}}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-4">
                                <img src="" id="files-tag2" width="200px" />  
                                <input type="file" name="files" id="files" required="required">
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

@section('contentjs')
    
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#files-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#files").change(function(){
            readURL(this);
        });
    </script>
@endsection      

@section('contentcss')
    <style>
        .thumb {
          height: 75px;
          border: 1px solid #000;
          margin: 10px 5px 0 20;
        }
    </style>
    <style type="text/css">
        input[type=file]{
        display: inline;
        }
        #image_preview {
        border: 1px solid black;
        padding: 10px;
        }
        #image_preview img{
        width: 200px;
        padding: 5px;
        }
        #image_preview1 {
        border: 1px solid black;
        padding: 10px;
        }
        #image_preview1 img{
        width: 200px;
        padding: 5px;
        }
  </style>
@endsection  
