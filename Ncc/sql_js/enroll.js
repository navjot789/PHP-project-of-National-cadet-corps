
$(document).on('click','#submit_form',function (event) {
    event.preventDefault();
    var form = $('#enroll_form')[0];
    var formData = new FormData(form);

  
    $.ajax({
        url: "sql/enroll_process.php",
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {

                                if(data != null && data.toLowerCase().includes("user_not_login"))
                                {
                                    
                                      $('#response').fadeIn().html('<h3 class="visit text-center"><i class="fas fa-exclamation-triangle text-danger" ></i><small> Please login in order to submit an application.</small></h3>'); 
                                     setTimeout(function(){  
                                             $('#response').fadeOut("slow");  
                                        }, 7000);

                                }else if (data != null && data.toLowerCase().includes("inserted"))
                                { 
                                    
                                     $('#response').fadeIn().html('<span class="alert alert-success"><i class="fas fa-check-circle"></i> Your application submit successfully!</span>'); 

                                     setTimeout(function(){  
                                             $('#response').fadeOut("slow");  
                                        }, 7000);

                                        $('#enroll_form').trigger("reset");
                                }
                                else { 
                                        $('#response').fadeIn().html('<span class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>'+data+'</span>');  
                                     // $('<span class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>'+data+'</span>').fadeIn().appendTo('#response');
                                    setTimeout(function(){  
                                         $('#response').fadeOut("slow");  
                                    }, 7000);


                                }
               
                             
        }
    });

});
