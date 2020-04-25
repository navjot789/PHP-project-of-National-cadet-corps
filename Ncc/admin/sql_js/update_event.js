
$(document).on('click','#update_event_btn',function (event) {
    event.preventDefault();
    var form = $('#update_event_form')[0];
    var formData = new FormData(form);

  
    $.ajax({
        url: "sql/update_event_process.php",
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {

                             if (data != null && data.toLowerCase().includes("updated"))
                                { 
                                    
                                     $('#response').fadeIn().html('<span class="alert alert-success"><i style="color:#fff;" class="fas fa-check-circle"></i> Event updated success!</span>'); 
                                    
                                     setTimeout(function(){  
                                             $('#response').fadeOut("slow");  
                                        }, 7000);

                                       
                                }
                                else { 
                                        $('#response').fadeIn().html('<span class="alert alert-danger"><i style="color:#fff;" class="fas fa-exclamation-triangle"></i>'+data+'</span>');  
                                     // $('<span class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>'+data+'</span>').fadeIn().appendTo('#response');
                                    setTimeout(function(){  
                                         $('#response').fadeOut("slow");  
                                    }, 7000);


                                }
               
                             
        }
    });

});
