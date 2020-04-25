  $(document).ready(function(){  
        $('#submit').click(function(e){
             e.preventDefault();  
            var fname = $('#fname').val();
            var lname = $('#lname').val(); 
            var gender = $('#gender').val(); 
            var phone = $('#phone').val(); 
            var dob = $('#dob').val();  


             var email = $('#email').val(); 
             var pwd = $('#password').val();
             var cpwd = $('#cpassword').val();  
             
         if(fname == '' || lname == '' || gender == '' || phone == '' || dob == '' || email == '' || pwd == '' || cpwd == '')  {  
                  $('#response').html('<span class="text-danger"><i class="fas fa-times-circle"></i> All Fields are required</span>');

             }
             else if(pwd!== cpwd)
            {
                 $('#response').html('<span class="text-danger">password does not Match.</span>');
               
            }  
             else  
             {  
                  $.ajax({  
                       url:"sql/signup_process.php",  
                       method:"POST",  
                       data:$('#submit_forms').serialize(),  
                       beforeSend:function(){  
                            $('#response').html('<span class="text-info"><i class="fas fa-spinner"></i> Loading response...</span>');  
                       },  
                       success:function(data){  
                            $('form').trigger("reset");  
                            $('#response').fadeIn().html(data);  
                            setTimeout(function(){  
                                 $('#response').fadeOut("slow");  
                            }, 7000);  
                       }  
                  });  
             }  
        });  
   });  