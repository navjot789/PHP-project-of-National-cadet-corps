$(document).ready(function(){  
        $('#update_status').click(function(e){
             e.preventDefault();  
          
              
                  $.ajax({  
                       url:"sql/enroll_status_post_process.php",  
                       method:"POST",  
                       data:$('#enroll_update_form').serialize(),  
                      
                       success:function(data){  
                            

                                if(data != null && data.toLowerCase().includes("updated"))
                                {
                                        $('#stat_response').fadeIn().html('<div class="alert alert-success"><span><i class="fas fa-check" style="color:#fff;"></i> Status updated successfully.</span></div>');
                                			 setTimeout(function(){  
                                             $('#stat_response').fadeOut("slow");  
                                        }, 7000);
                                			 
                                } else { //report failure...
 

                                      $('#stat_response').fadeIn().html('<div class="alert alert-danger"><span><i class="fas fa-times-circle" style="color:#fff;"></i> '+data+'</span></div>');
                                       setTimeout(function(){  
                                             $('#stat_response').fadeOut("slow");  
                                        }, 7000);

                                       }
                       }  
                  });  
             
        });  
   });  


//scroll to top of the page to see the responce status
//Get the button
var mybutton = document.getElementById("update_status");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}