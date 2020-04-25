  $(document).ready(function(){  
        $('#fd_btn').click(function(e){
             e.preventDefault();  
        
         
                  $.ajax({  
                       url:"sql/feedback_process.php",  
                       method:"POST",  
                       data:$('#feedback_form').serialize(),  
                       beforeSend:function(){  
                            $('#response').html('<span class="text-info"><i class="fas fa-spinner"></i> Loading response...</span>');  
                       },  
                       success:function(data){

								if (data != null && data.toLowerCase().includes("inserted"))
                                { 
                                    
                                     $('#response').fadeIn().html('<span class="alert alert-success"><i class="fas fa-check-circle"></i> Your feedback record successfully.</span>'); 

                                     setTimeout(function(){  
                                             $('#response').fadeOut("slow");  
                                        }, 7000);

                                        $('#feedback_form').trigger("reset");
                                }
                                else
                                {

								 $('#response').fadeIn().html('<span class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> '+data+'</span>');  
                                     // $('<span class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>'+data+'</span>').fadeIn().appendTo('#response');
                                    setTimeout(function(){  
                                         $('#response').fadeOut("slow");  
                                    }, 7000);
                                }
                          



                       }  
                  });  
              
        });  
   });  