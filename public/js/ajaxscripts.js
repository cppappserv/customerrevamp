$(document).ready(function() {
    var cbx = "";
    var msgtx = "";
    var adrkk = "01659440.dyn.cbn.net.id:8817/mysms";
    var adrwa = "01659440.dyn.cbn.net.id:8818";
    var img64 = "";

    $("#pesan").on('change keyup paste', function(){
        
        msgtx = document.getElementById('pesan').value;
        var matches = msgtx.match(/\n/g),
        breaks = matches ? matches.length : 2;
        $('#pesan').attr('rows',breaks + 2); 
        //alert(breaks);
    });
    
    
    $("#SEND").click(function(){
        msgtx = document.getElementById('pesan').value;
        msgtx = encodeURIComponent(msgtx);
        img64 = document.getElementById("image_preview").innerHTML;
        var imsg = 0;
        
        //alert(img64);
        if((msgtx!="")||(img64!="")){        
            $('.mark:checked').each(function(){        
                var noph = $(this).val();
                if(img64!=""){
                    var arrimg = img64.split("\"");
                    SendWA(adrwa,noph,arrimg[1]);
                    //alert(arrimg[1]);
                }
                if(msgtx!=""){
                    SendWA(adrwa,noph,msgtx);
                    //alert(msgtx);
                }
                                
                cbx = '#'+$(this).attr('id');
                $(cbx).prop('checked', false);
                
                //alert("Message Send to " + cbx);
                imsg = 1;
            });
            if(imsg==1) alert("Message Send to WA Server")
            else alert("No Customer Selected!");
        }
    });

    $("#markall").click(function(){
            $('.mark').each(function(){        
                cbx = '#'+$(this).attr('id');                
                $(cbx).prop('checked', true);
            });
    });

    $("#unmarkall").click(function(){
            $('.mark').each(function(){        
                cbx = '#'+$(this).attr('id');                
                $(cbx).prop('checked', false);
            });
    });

});

function encodeImageFileAsURL() {
    var filesSelected = document.getElementById("uploadFile").files;
    if (filesSelected.length > 0) {
      var fileToLoad = filesSelected[0];

      var fileReader = new FileReader();

      fileReader.onload = function(fileLoadedEvent) {
        var srcData = fileLoadedEvent.target.result; // <--- data: base64

        var newImage = document.createElement('img');
        newImage.src = srcData;

        document.getElementById("image_preview").innerHTML = newImage.outerHTML;
        console.log(document.getElementById("image_preview").innerHTML);
      }
      fileReader.readAsDataURL(fileToLoad);
    }
  }

function SendWA(adrwa,number,msgtx){
	//http://192.168.1.187 /wa/sendwa.php?phone=62818986657&text=Test
	var nohp = number;
        
        if(number.substring(0,1)=='0'){
            nohp='62'+number.substring(1,15);
        }
        var surl = "http://"+adrwa+"/wa/sendwa.php?";								
	var sdata = "phone="+nohp+"&text="+msgtx;
        
        //alert(sdata);


	$.ajax({
		type: 'GET',
		url: surl,
		data: sdata,
		success: function(data) {
                    //alert("WA Sukses");
		},
		error: function(){
                    //showResult('Error',' WA ',"Error");
		}
	});	
}

function ConvertTxtMsg(msgtx){
    var txt = msgtx; 
    txt = encodeURIComponent(txt);
    //txt = txt.replace(/(\r\n|\n|\r)/gm,"%0A");
    //txt = txt.replace(/\s+/g,"%20");
    return txt; 
}