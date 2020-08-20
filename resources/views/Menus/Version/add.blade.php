@extends('layouts.cmain3')

@section('content')

        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    <a class="right" target="_blank"><h4><b>{{$judul}} - Add</b></h4></a>
                    <br/>
                    
                    <form method="post" action="/version/save" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-2 control-label">Versi1</label>
                            <div class="col-md-4">
                                <input type="text" name="versi1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 control-label">Versi2</label>
                            <div class="col-md-4">
                                <input type="text" name="versi2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 control-label">Versi3</label>
                            <div class="col-md-4">
                                <input type="text" name="versi3">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label">APK</label>
                            <div class="col-sm-4">
                                {{-- <img src="" id="files-tag" width="200px" />   --}}
                                <input type="file" name="files" id="files" required="required">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label">Perubahan</label>
                            <div class="col-sm-8">
                                <textarea id="perubahan" name="perubahan" rows="10" cols="50">
                                    
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save">
                            <a href="/version" class="btn btn-primary">Back</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
@endsection

@section('jscontent')
    
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

{{-- <script src="{{asset('admin/assets/ckeditor/ckeditor.js')}}"></script> --}}
{{-- <script>
    var perubahan = document.getElementById("perubahan");
      CKEDITOR.replace(perubahan,{
      language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
  </script> --}}

@endsection      

@section('csscontent')
    <style>
        .thumb {
          height: 75px;
          border: 1px solid #000;
          margin: 10px 5px 0 20;
        }
    </style>
@endsection            