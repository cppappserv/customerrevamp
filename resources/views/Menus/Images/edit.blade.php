@extends('layouts.cmain')

@section('content')

        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    
                    <a class="right" target="_blank"><h4><b>{{$judul}} - Edit</b></h4></a>
                    <br/>
                    
                <form method="post" action="/images/update/{{ $qrmimage->id }}" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                        <div class="form-group row">
                                <label class="col-md-2 control-label">Material Number</label>
                                <div class="col-md-4">
                                    <input type="hidden" name="changedby" value="{{Auth::user()->name}}">
                                    <input type="hidden" name="materialnumber" value="{{$qrmimage->materialnumber}}">
                                    <select class="col-sm-12" disabled>
                                        @foreach ($tblhelp as $item)
                                        <option value="{{$item->materialnumber}}" {{$qrmimage->materialnumber == $item->materialnumber?"selected":""}}>{{$item->materialnumber}} - {{$item->materialdescription}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>
    
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-4">
                                    <img src="/images/storeimage/{{ $qrmimage->id }}" id="files-tag" width="200px" />  
                                    <input type="file" name="files" id="files">
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-8">
                                <textarea id="description" name="description" rows="10" cols="50">
                                    {{$qrmimage->description}}
                                </textarea>
                            </div>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save">
                            <a href="/images" class="btn btn-primary">Back</a>
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
        CKEDITOR.replace('description')
        //bootstrap WYSIHTML5 - text editor
        // $('.textarea').wysihtml5()
    })
</script> --}}
<script src="{{asset('admin/assets/ckeditor/ckeditor.js')}}"></script>
<script>
    var description = document.getElementById("description");
      CKEDITOR.replace(description,{
      language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
  </script>
@endsection  