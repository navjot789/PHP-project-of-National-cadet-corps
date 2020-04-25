
<?php 
include 'connect.php'; // database connection
//var_dump($_POST);
//https://www.tutorialrepublic.com/html-tutorial/html5-server-sent-events.php
header("Content-Type: text/event-stream");
header("Cache-Control: no-cache");

$result=mysqli_query($con,"select fid from enrollment where cid=13");
$data = mysqli_fetch_array($result);
echo "data: " . $data[0] . "\n\n";   
flush();


?>
