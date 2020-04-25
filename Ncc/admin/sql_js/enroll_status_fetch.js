

//https://www.tutorialrepublic.com/html-tutorial/html5-server-sent-events.php
var source = new EventSource("sql/enroll_status_fetch_process.php");
source.onmessage = function(event){
 
    document.getElementById("result").innerHTML = "formID: " + event.data + "<br>";
};
          

      

          

      
