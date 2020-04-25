$(document).ready(function(){  
        $('#enroll_btn').click(function(e){
             e.preventDefault();  
        
             
              
                  $.ajax({  
                       url:"sql/enroll_btn_process.php",  
                       method:"POST",  
                       data:$('#btn_enroll_form').serialize(),  
                       beforeSend:function(){  
                            $('#enroll_btn').html('<span class="text-success"><i class="fas fa-spinner"></i> Loading response...</span>');  
                       },  
                       success:function(data){  
                            
                                        
                                        $('#enroll_btn').fadeIn().html('<i class="fas fa-check"></i> '+ data);
                                        $('#enroll_btn').removeClass("btn-info");
                                        $('#enroll_btn').addClass("btn-success");
                                      

                                       }
                       
                  });  
             
        });  



   });  

$(document).ready(function(){  
        $('#enrolled_btn').click(function(e){
             e.preventDefault();  
        
             
              
                  $.ajax({  
                       url:"sql/enroll_btn_process.php",  
                       method:"POST",  
                       data:$('#btn_enroll_form').serialize(),  
                       beforeSend:function(){  
                            $('#enrolled_btn').html('<span class="text-success"><i class="fas fa-spinner"></i> Loading response...</span>');  
                       },  
                       success:function(data){  
                            
                                        
                                        $('#enrolled_btn').fadeIn().html('<i class="fas fa-plus"></i> '+ data);
                                        $('#enrolled_btn').removeClass("btn-success");
                                        $('#enrolled_btn').addClass("btn-info");
                                      

                                       }
                       
                  });  
             
        });  



   });