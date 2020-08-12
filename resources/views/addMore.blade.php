<!DOCTYPE html>
<html>
<head>
    <title>Laravel - Dynamically Add or Remove input fields using JQuery</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
		
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
   
</head>
<body>


<div class="container">
    <h2 align="center">Laravel - Dynamically Add or Remove input fields using JQuery</h2>  
    <div class="form-group">
         <form name="add_name" id="add_name">  


            <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
            </div>


            <div class="alert alert-success print-success-msg" style="display:none">
            <ul></ul>
            </div>


            <div class="table-responsive">  
                <table class="table table-bordered" id="dynamic_field">  
                    <tr>  
                        <td><input type="text" name="desc[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
                        <td><input type="text" name="value1[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table>  
                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
            </div>


         </form>  
    </div> 

    <div class="form-group">
         <form name="add_name1" id="add_name1">  


            <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
            </div>


            <div class="alert alert-success print-success-msg" style="display:none">
            <ul></ul>
            </div>


            <div class="table-responsive">  
                <table class="table table-bordered" id="dynamic_field2">  
                    <tr>  
                        <td><input type="text" name="desc2[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
                        <td><input type="text" name="value2[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
                        <td><button type="button" name="add2" id="add2" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table>  
                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
            </div>


         </form>  
    </div> 
</div>


<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  
      var j=1;  

      // <td><input type="text" name="desc[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
      //                   <td><input type="text" name="value1[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
      //                   <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  


      $('#add').click(function(){  
         i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added">'+
           '<td>'+
            '<input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" />'+
           '</td>'+
           '<td>'+
            '<input type="text" name="desc[]" placeholder="Enter your Name" class="form-control name_list" />'+
           '</td>'+
           '<td>'+
            '<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button>'+
           '</td>'+
           '</tr>');  
      });  

      $('#add2').click(function(){  
         j++;  
           $('#dynamic_field2').append('<tr id="row2'+j+'" class="dynamic-added">'+
           '<td>'+
            '<input type="text" name="name2[]" placeholder="Enter your Name" class="form-control name_list" />'+
           '</td>'+
           '<td>'+
            '<input type="text" name="desc2[]" placeholder="Enter your Name" class="form-control name_list" />'+
           '</td>'+
           '<td>'+
            '<button type="button" name="remove2" id="'+j+'" class="btn btn-danger btn_remove2">X</button>'+
           '</td>'+
           '</tr>');  
      });  


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  

      $(document).on('click', '.btn_remove2', function(){  
           var button_id = $(this).attr("id");   
           $('#row2'+button_id+'').remove();  
      });  


      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      $('#submit').click(function(){            
           $.ajax({  
                url:postURL,  
                method:"POST",  
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)  
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }  
           });  
      });  


      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });  
</script>
</body>
</html>