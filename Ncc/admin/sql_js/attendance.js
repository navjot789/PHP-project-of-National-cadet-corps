$(document).ready(function(){  
        $('#at_btn').click(function(e){
             e.preventDefault();  
          
              
                  $.ajax({  
                       url:"sql/attendance_process.php",  
                       method:"POST",  
                       data:$('#att_form').serialize(),  
                       beforeSend:function(){  
                            $('#att_response').html('<span class="text-info"><i class="fas fa-spinner"></i> Loading response...</span>');  
                       },  
                       success:function(data){  
                            

                               if(data != null && data == "success"){ 
                                       
                                     $('#att_response').fadeIn().html('<div class="alert alert-success"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons">close</i></button><span><i class="fas fa-check-circle" style="color:#fff;"></i> Attendance Marked success.</span></div>');
                                       
                                       setTimeout(function(){  
                                             $('#att_response').fadeOut("slow");  
                                        }, 7000);

                                } else { //report failure...

                                       $('form').trigger("reset"); 
                                    
                                      $('#att_response').fadeIn().html('<div class="alert alert-danger"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="material-icons" style="color:#fff;">close</i></button><span>'+data+'</span></div>');
                                       
                                       setTimeout(function(){  
                                             $('#att_response').fadeOut("slow");  
                                        }, 7000);

                                       }
                       }  
                  });  
             
        });  
   });  
