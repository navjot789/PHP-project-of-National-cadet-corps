$(document).ready(function(){  
        $('#update_pass').click(function(e){
             e.preventDefault();  
          
            
                  $.ajax({  
                       url:"sql/update_password_process.php",  
                       method:"POST",  
                       data:$('#password_form').serialize(),  
                       beforeSend:function(){  
                            $('#password_response').html('<span class="text-info"><i class="fas fa-spinner"></i> Loading response...</span>');  
                       },  
                       success:function(data){  
                              
                                	   $('#password_form').trigger("reset");
                                       $('#password_response').fadeIn().html(data);
                                       setTimeout(function(){  
                                             $('#password_response').fadeOut("slow");  
                                        }, 7000);

                                      
                       }  

                  });  
             
        });  
   });  

$(".toggle-password").change(function() {
  $(".password").attr("type", this.checked ? "text" : "password")
});