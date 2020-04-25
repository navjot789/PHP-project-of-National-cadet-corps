$(document).ready(function(){  
        $('#login_submit').click(function(e){
             e.preventDefault();  
          
             var email = $('#login_mail').val(); 
             var pwd = $('#login_pdw').val();
             var submit = $('#login_submit').val();
             
              
                  $.ajax({  
                       url:"sql/login_process.php",  
                       method:"POST",  
                       data:$('#login_form').serialize(),  
                       beforeSend:function(){  
                            $('#login_response').html('<span class="text-info"><i class="fas fa-spinner"></i> Loading response...</span>');  
                       },  
                       success:function(data){  
                            

                               if(data != null && data == "success"){ //redirect...
                                        window.location = "index.php?page=10";
                                } else { //report failure...

                                       $('form').trigger("reset"); 
                                       $('#login_response').fadeIn().html(data);
                                       setTimeout(function(){  
                                             $('#login_response').fadeOut("slow");  
                                        }, 7000);

                                       }
                       }  
                  });  
             
        });  
   });  