  $(document).ready(function(){  
        $('#ct_btn').click(function(e){
             e.preventDefault();  
        
         
                  $.ajax({  
                       url:"sql/contact_process.php",  
                       method:"POST",  
                       data:$('#contact_form').serialize(),  
                       beforeSend:function(){  
                            $('#response').html('<span class="text-info"><i class="fas fa-spinner"></i> Loading response...</span>');  
                       },  
                       success:function(data){

								if (data != null && data.toLowerCase().includes("inserted"))
                                { 
                                    
                                     $('#response').fadeIn().html('<span class="alert alert-success"><i class="fas fa-check-circle"></i> Thanks for contacting us.</span>'); 

                                     setTimeout(function(){  
                                             $('#response').fadeOut("slow");  
                                        }, 7000);

                                        $('#contact_form').trigger("reset");
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