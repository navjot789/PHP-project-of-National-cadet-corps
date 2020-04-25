$(document).ready(function(){  
        $('#update_submit_btn').click(function(e){
             e.preventDefault();  
          
            
                  $.ajax({  
                       url:"sql/update_set_process.php",  
                       method:"POST",  
                       data:$('#update_submit').serialize(),  
                       beforeSend:function(){  
                            $('#upd_response').html('<span class="text-info"><i class="fas fa-spinner"></i> Loading response...</span>');  
                       },  
                       success:function(data){  
                              
                                       $('#upd_response').fadeIn().html(data);
                                       setTimeout(function(){  
                                             $('#upd_response').fadeOut("slow");  
                                        }, 7000);

                                      
                       }  

                  });  
             
        });  
   });  