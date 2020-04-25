
$(document).on('click','#add_event_btn',function (event) {
    event.preventDefault();
    var form = $('#add_event_form')[0];
    var formData = new FormData(form);

  
    $.ajax({
        url: "sql/add_event_process.php",
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {

                             if (data != null && data.toLowerCase().includes("inserted"))
                                { 
                                    
                                     $('#response').fadeIn().html('<span class="alert alert-success"><i style="color:#fff;" class="fas fa-check-circle"></i> New Event Created success!</span>'); 
                                     $("#add_event_form")[0].reset();
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
