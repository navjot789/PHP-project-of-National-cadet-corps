$(document).ready(function(){  
        $('#login_btn').click(function(e){
             e.preventDefault();  
          
              
                  $.ajax({  
                       url:"sql/login_process.php",  
                       method:"POST",  
                       data:$('#login_submit').serialize(),  
                       beforeSend:function(){  
                            $('#login_response').html('<span class="text-info"><i class="fas fa-spinner"></i> Loading response...</span>');  
                       },  
                       success:function(data){  
                            

                               if(data != null && data == "success"){ //redirect...
                                        window.location = "dashboard.php";
                                } else { //report failure...

                                       $('form').trigger("reset"); 
                                      

                                      $('#login_response').fadeIn().html('<div class="alert alert-danger"><span>'+data+'</span></div>');
                                       setTimeout(function(){  
                                             $('#login_response').fadeOut("slow");  
                                        }, 7000);

                                       }
                       }  
                  });  
             
        });  
   });  
