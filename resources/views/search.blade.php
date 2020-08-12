<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.7 Autocomplete Search using Bootstrap Typeahead JS - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
<body>
   
<div>
    <h1>Laravel 5.7 Autocomplete Search using Bootstrap Typeahead JS - ItSolutionStuff.com</h1>   
    <label>kelurahan</label><input id="search" name="search" class="typeahead form-control"  type="text" onclick="display()">

    <label>kecamatan</label><input id="kecamatan" name="kecamatan" class="typeahead form-control"  type="text" >
    <label>kabupaten</label><input id="kabupaten" name="kabupaten" class="typeahead form-control"  type="text">
    <label>provinsi</label><input id="provinsi"  name="provinsi"  class="typeahead form-control"  type="text">
    <label>kodepos</label><input id="kodepos"   name="kodepos"   class="typeahead form-control"  type="text">
    
</div>


    <script type="text/javascript">
    var route = "{{ url('autocomplete') }}";
    $('#search').typeahead({
         minLength: 4,
         source:  function (term, process) {
         return $.get(route, { term: term }, function (data) {
            console.log(data);  
                return process(data);
            });
        }
    });
</script>
   
</body>
</html>