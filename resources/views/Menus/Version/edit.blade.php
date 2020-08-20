@extends('layouts.cmain')

@section('content')

        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    
                    <a class="right" target="_blank"><h4><b>{{$judul}} - Edit</b></h4></a>
                    <br/>
                    
                <form method="post" action="/version/update/{{ $qrsversion->id }}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <div class="form-group row">
                            <label class="col-md-2 control-label">Versi1</label>
                            <div class="col-md-4">
                            <input type="text" name="versi1" value="{{$qrsversion->versi1}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 control-label">Versi2</label>
                            <div class="col-md-4">
                                <input type="text" name="versi2" value="{{$qrsversion->versi2}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 control-label">Versi3</label>
                            <div class="col-md-4">
                                <input type="text" name="versi3" value="{{$qrsversion->versi3}}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-4">
                                {{-- <img src="/version/storeimage/{{ $qrsversion->id }}" id="files-tag" width="200px" />   --}}
                                <input type="file" name="files" id="files">
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label class="col-sm-2 control-label">perubahan</label>
                            <div class="col-sm-8">
                            <textarea id="perubahan" name="perubahan" rows="10" cols="50">
                                {{$qrsversion->perubahan}}
                            </textarea>
                        </div>
                            @error('perubahan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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

{{-- <script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('perubahan')
        //bootstrap WYSIHTML5 - text editor
        // $('.textarea').wysihtml5()
    })
</script> --}}
{{-- <script src="{{asset('admin/assets/ckeditor/ckeditor.js')}}"></script>
<script>
    var perubahan = document.getElementById("perubahan");
      CKEDITOR.replace(perubahan,{
      language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
  </script> --}}
@endsection  