@extends('layouts.cmain3')

@section('content')

        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    <a class="right" target="_blank"><h4><b>{{$judul}} - Add</b></h4></a>
                    <br/>
                    
                    <form method="post" action="/images/save" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-2 control-label">Material Number</label>
                            <div class="col-md-4">
                                <input type="hidden" name="changedby" value="{{Auth::user()->name}}">
                                <select name="materialnumber" id="materialnumber" class="col-sm-12">
                                    @foreach ($tblhelp as $item)
                                    <option value="{{$item->materialnumber}}">{{$item->materialnumber}} - {{$item->materialdescription}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-4">
                                <img src="" id="files-tag" width="200px" />  
                                <input type="file" name="files" id="files" required="required">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-8">
                            <textarea id="description" name="description" rows="10" cols="50">
                                
                            </textarea>
                        </div>
                            {{-- <div class="col-sm-4">
                                <textarea text-align="left" rows="4" cols="50" name="description" placeholder="Description ..">
                                </textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
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

<script src="{{asset('admin/assets/ckeditor/ckeditor.js')}}"></script>
<script>
    var description = document.getElementById("description");
      CKEDITOR.replace(description,{
      language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
  </script>

@endsection      

@section('csscontent')
    <style>
        .thumb {
          height: 75px;
          border: 1px solid #000;
          margin: 10px 5px 0 20;
        }
        /* ,
        #div1 {
          width: 350px;
          height: 70px;
          padding: 10px;
          border: 1px solid #aaaaaa;
        } */
    </style>
@endsection            